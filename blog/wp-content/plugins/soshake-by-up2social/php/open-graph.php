<?php
/**
 * Recursively build RDFa <meta> elements used for Open Graph protocol
 *
 * @since 1.0
 * @param string $property whitespace separated list of CURIEs placed in a property attribute
 * @param mixed content attribute value for the given property. use an array for array property values or structured properties
 */
function old_soshake_fb_output_og_protocol( $property, $content ) {
	if ( empty( $property ) || empty( $content ) )
		return;

	// array of property values or structured property
	if ( is_array( $content ) ) {
		foreach( $content as $structured_property => $content_value ) {
			// handle numeric keys from regular arrays
			// account for the special structured property of url which is equivalent to the root tag and sets up the structure
			if ( ! is_string( $structured_property ) || $structured_property === 'url' )
				old_soshake_fb_output_og_protocol( $property, $content_value );
			else
				old_soshake_fb_output_og_protocol( $property . ':' . $structured_property, $content_value );
		}
	}
	else {
		echo "<meta property=\"$property\" content=\"" . esc_attr( $content ) . "\" />\n";
	}
}

/**
 * Add Open Graph protocol markup to <head>
 *
 * @since 1.0
 */
function old_soshake_fb_add_og_protocol() {
	global $post;

	$meta_tags = array(
		'http://ogp.me/ns#locale' => old_soshake_fb_get_locale(),
		'http://ogp.me/ns#site_name' => get_bloginfo( 'name' ),
		'http://ogp.me/ns#type' => 'website',
                'twitter:card'  => 'summary'
	);
	
	if ( is_home() || is_front_page() ) {
		$meta_tags['http://ogp.me/ns#title'] = get_bloginfo( 'name' );
		$meta_tags['http://ogp.me/ns#description'] = get_bloginfo( 'description' );
                $meta_tags['twitter:title'] = get_bloginfo('name');
                $meta_tags['twitter:description'] = get_bloginfo('description');
	} else if ( is_single() ) {
		$post_type = get_post_type();
		$meta_tags['http://ogp.me/ns#type'] = 'article';
		$meta_tags['http://ogp.me/ns#url'] = apply_filters( 'rel_canonical', get_permalink() );
		$meta_tags['twitter:url'] = apply_filters( 'rel_canonical', get_permalink() );
		if ( post_type_supports( $post_type, 'title' ) ) {
			$meta_tags['http://ogp.me/ns#title'] = get_the_title();
			$meta_tags['twitter:title'] = get_the_title();
                }
		if ( post_type_supports( $post_type, 'excerpt' ) ) {
			// thanks to Angelo Mandato (http://wordpress.org/support/topic/plugin-facebook-plugin-conflicts-with-powerpress?replies=16)
			// Strip and format the wordpress way, but don't apply any other filters which adds junk that ends up getitng stripped back out
			if ( !post_password_required($post) ) {
				// First lets get the post excerpt (shouldn't have any html, but anyone can enter anything...)
				$desc_no_html = $post->post_excerpt;
				if ( !empty($excerpt_no_html) ) {
					$desc_no_html = strip_shortcodes($desc_no_html); // Strip shortcodes first in case there is HTML inside the shortcode
					$desc_no_html = wp_strip_all_tags($desc_no_html); // Strip all html
					$desc_no_html = trim($desc_no_html); // Trim the final string, we may have stripped everything out of the post so this will make the value empty if that's the case
				}
				
				// Recheck if empty, may be that the strip functions above made excerpt empty, doubhtful but we want to be 100% sure.
				if( empty($desc_no_html) ) {
					$desc_no_html = $post->post_content; // Start over, this time with the post_content
					$desc_no_html = strip_shortcodes( $desc_no_html ); // Strip shortcodes first in case there is HTML inside the shortcode
					$desc_no_html = str_replace(']]>', ']]&gt;', $desc_no_html); // Angelo Recommendation, if for some reason ]]> happens to be in the_content, rare but We've seen it happen
					$desc_no_html = wp_strip_all_tags($desc_no_html);
					$excerpt_length = apply_filters('excerpt_length', 55);
					$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
					if(function_exists("wp_trim_words")) $desc_no_html = wp_trim_words( $desc_no_html, $excerpt_length, $excerpt_more );
					$desc_no_html = trim($desc_no_html); // Trim the final string, we may have stripped everything out of the post so this will make the value empty if that's the case
				}
				
				$desc_no_html = str_replace( array( "\r\n", "\r", "\n" ), ' ',$desc_no_html); // I take it Facebook doesn't like new lines?
				$meta_tags['http://ogp.me/ns#description'] = $desc_no_html;
				$meta_tags['twitter:description'] = $desc_no_html;
			}
		}
		
		$meta_tags['http://ogp.me/ns/article#published_time'] = get_the_date('c');
		$meta_tags['http://ogp.me/ns/article#modified_time'] = get_the_modified_date('c');
		
		if ( post_type_supports( $post_type, 'author' ) && isset( $post->post_author ) )
			$meta_tags['http://ogp.me/ns/article#author'] = get_author_posts_url( $post->post_author );

		// add the first category as a section. all other categories as tags
		$cat_ids = get_the_category();
		
		if ( ! empty( $cat_ids ) ) {
			$cat = get_category( $cat_ids[0] );
			
			if ( ! empty( $cat ) )
				$meta_tags['http://ogp.me/ns/article#section'] = $cat->name;

			//output the rest of the categories as tags
			unset( $cat_ids[0] );
			
			if ( ! empty( $cat_ids ) ) {
				$meta_tags['http://ogp.me/ns/article#tag'] = array();
				foreach( $cat_ids as $cat_id ) {
					$cat = get_category( $cat_id );
					$meta_tags['http://ogp.me/ns/article#tag'][] = $cat->name;
					unset( $cat );
				}
			}
		}

		// add tags. treat tags as lower priority than multiple categories
		$tags = get_the_tags();
		
		if ( $tags ) {
			if ( ! array_key_exists( 'http://ogp.me/ns/article#tag', $meta_tags ) )
				$meta_tags['http://ogp.me/ns/article#tag'] = array();
				
			foreach ( $tags as $tag ) {
				$meta_tags['http://ogp.me/ns/article#tag'][] = $tag->name;
			}
		}

		// does current post type and the current theme support post thumbnails?
		if ( post_type_supports( $post_type, 'thumbnail' ) && function_exists( 'has_post_thumbnail' ) && has_post_thumbnail() ) {
			list( $post_thumbnail_url, $post_thumbnail_width, $post_thumbnail_height ) = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
			
			if ( ! empty( $post_thumbnail_url ) ) {
				$image = array( 'url' => $post_thumbnail_url );
				if ( ! empty( $post_thumbnail_width ) )
					$image['width'] = absint( $post_thumbnail_width );
				if ( ! empty($post_thumbnail_height) )
					$image['height'] = absint( $post_thumbnail_height );
					
				$meta_tags['http://ogp.me/ns#image'] = array( $image );
			}
		} else {
                        global $wpdb, $channel, $wp_query; 
                        if($wp_query->post->ID) {
                                $args = array(
                                'numberposts' => 1,
                                'order'=> 'ASC',
                                'post_mime_type' => 'image',
                                'post_parent' => $wp_query->post->ID,
                                'post_status' => null,
                                'post_type' => 'attachment'
                                );
                                
                                $attachments = get_children( $args );
                                
                                if ($attachments) {
                                        list( $post_thumbnail_url, $post_thumbnail_width, $post_thumbnail_height ) = wp_get_attachment_image_src( $attachments[0]->ID, 'thumbnail' )  ? wp_get_attachment_image_src( $attachments[0]->ID, 'thumbnail' ) : wp_get_attachment_image_src( $attachments[0]->ID, 'full' );
                                        $image = array( 'url' => $post_thumbnail_url );
                                        if ( ! empty( $post_thumbnail_width ) )
                                                $image['width'] = absint( $post_thumbnail_width );
                                        if ( ! empty($post_thumbnail_height) )
                                                $image['height'] = absint( $post_thumbnail_height );
                                        $meta_tags['http://ogp.me/ns#image'] = array( $image );
                                        $meta_tags['twitter:image'] = $image["url"];
                                }
                        }
                }
	}
	else if ( is_author() && isset( $post->post_author ) ) {
		$meta_tags['http://ogp.me/ns#type'] = 'profile';
		$meta_tags['http://ogp.me/ns/profile#first_name'] = get_the_author_meta( 'first_name', $post->post_author );
		$meta_tags['http://ogp.me/ns/profile#last_name'] = get_the_author_meta( 'last_name', $post->post_author );
		if ( is_multi_author() )
			$meta_tags['http://ogp.me/ns/profile#username'] = get_the_author_meta( 'login', $post->post_author );
	}
	else if ( is_page() ) {
		$meta_tags['http://ogp.me/ns#type'] = 'article';
		$meta_tags['http://ogp.me/ns#title'] = get_the_title();
		$meta_tags['http://ogp.me/ns#url'] = apply_filters( 'rel_canonical', get_permalink() );
		$meta_tags['twitter:title'] = get_the_title();
		$meta_tags['twitter:url'] = apply_filters( 'rel_canonical', get_permalink() );
                $desc_no_html = $post->post_excerpt;
                if ( !empty($excerpt_no_html) ) {
                        $desc_no_html = strip_shortcodes($desc_no_html); // Strip shortcodes first in case there is HTML inside the shortcode
                        $desc_no_html = wp_strip_all_tags($desc_no_html); // Strip all html
                        $desc_no_html = trim($desc_no_html); // Trim the final string, we may have stripped everything out of the post so this will make the value empty if that's the case
                }
                
                // Recheck if empty, may be that the strip functions above made excerpt empty, doubhtful but we want to be 100% sure.
                if( empty($desc_no_html) ) {
                        $desc_no_html = $post->post_content; // Start over, this time with the post_content
                        $desc_no_html = strip_shortcodes( $desc_no_html ); // Strip shortcodes first in case there is HTML inside the shortcode
                        $desc_no_html = str_replace(']]>', ']]&gt;', $desc_no_html); // Angelo Recommendation, if for some reason ]]> happens to be in the_content, rare but We've seen it happen
                        $desc_no_html = wp_strip_all_tags($desc_no_html);
                        $excerpt_length = apply_filters('excerpt_length', 55);
                        $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
                        if(function_exists("wp_trim_words")) $desc_no_html = wp_trim_words( $desc_no_html, $excerpt_length, $excerpt_more );
                        $desc_no_html = trim($desc_no_html); // Trim the final string, we may have stripped everything out of the post so this will make the value empty if that's the case
                }
                
                $desc_no_html = str_replace( array( "\r\n", "\r", "\n" ), ' ',$desc_no_html); // I take it Facebook doesn't like new lines?
                $meta_tags['twitter:description'] = $desc_no_html;
	}

	$options = get_option( 'fb_options' );
	
	if ( ! empty( $options['app_id'] ) )
		$meta_tags['http://ogp.me/ns/fb#app_id'] = $options['app_id'];

	$meta_tags = apply_filters( 'fb_meta_tags', $meta_tags, $post );

	foreach ( $meta_tags as $property => $content ) {
		old_soshake_fb_output_og_protocol( $property, $content );
	}
        if(get_option("up2-fbid") == "") {
                ?><meta property="fb:admins" content="<? echo get_option("up2-fbid") ?>"/><?php
        }
}

/**
 * Get the locale and set it for the Facebook SDK
 *
 * @since 1.0
 */
function old_soshake_fb_get_locale() {
	$fb_valid_fb_locales = array(
		'ca_ES', 'cs_CZ', 'cy_GB', 'da_DK', 'de_DE', 'eu_ES', 'en_PI', 'en_UD', 'ck_US', 'en_US', 'es_LA', 'es_CL', 'es_CO', 'es_ES', 'es_MX',
		'es_VE', 'fb_FI', 'fi_FI', 'fr_FR', 'gl_ES', 'hu_HU', 'it_IT', 'ja_JP', 'ko_KR', 'nb_NO', 'nn_NO', 'nl_NL', 'pl_PL', 'pt_BR', 'pt_PT',
		'ro_RO', 'ru_RU', 'sk_SK', 'sl_SI', 'sv_SE', 'th_TH', 'tr_TR', 'ku_TR', 'zh_CN', 'zh_HK', 'zh_TW', 'fb_LT', 'af_ZA', 'sq_AL', 'hy_AM',
		'az_AZ', 'be_BY', 'bn_IN', 'bs_BA', 'bg_BG', 'hr_HR', 'nl_BE', 'en_GB', 'eo_EO', 'et_EE', 'fo_FO', 'fr_CA', 'ka_GE', 'el_GR', 'gu_IN',
		'hi_IN', 'is_IS', 'id_ID', 'ga_IE', 'jv_ID', 'kn_IN', 'kk_KZ', 'la_VA', 'lv_LV', 'li_NL', 'lt_LT', 'mk_MK', 'mg_MG', 'ms_MY', 'mt_MT',
		'mr_IN', 'mn_MN', 'ne_NP', 'pa_IN', 'rm_CH', 'sa_IN', 'sr_RS', 'so_SO', 'sw_KE', 'tl_PH', 'ta_IN', 'tt_RU', 'te_IN', 'ml_IN', 'uk_UA',
		'uz_UZ', 'vi_VN', 'xh_ZA', 'zu_ZA', 'km_KH', 'tg_TJ', 'ar_AR', 'he_IL', 'ur_PK', 'fa_IR', 'sy_SY', 'yi_DE', 'gn_PY', 'qu_PE', 'ay_BO',
		'se_NO', 'ps_AF', 'tl_ST'
	);

	$locale = get_locale();

	// convert locales like "es" to "es_ES", in case that works for the given locale (sometimes it does)
	if (strlen($locale) == 2) {
		$locale = strtolower($locale).'_'.strtoupper($locale);
	}

	// convert things like de-DE to de_DE
	$locale = str_replace('-', '_', $locale);

	// check to see if the locale is a valid FB one, if not, use en_US as a fallback
	if ( !in_array($locale, $fb_valid_fb_locales) ) {
		$locale = 'en_US';
	}

	return apply_filters('fb_locale', $locale); // filter the locale in case somebody has a weird case and needs to change it
}

add_action( 'wp_head', 'old_soshake_fb_add_og_protocol' );