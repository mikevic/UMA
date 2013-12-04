<?php
$text_intro = "";
global $post;
if ($post) {
        global $wp_query;
        $tags = wp_get_post_tags($post->ID);
        if ($tags) {
                $first_tag = $tags[0]->term_id;
                $args=array(
                        'tag__in' => array($first_tag),
                        'post__not_in' => array($post->ID),
                        'showposts'=>5,
                        'caller_get_posts'=>1
                );
                $up2RelatedPost = new WP_Query($args);
                if( $up2RelatedPost->have_posts() )
                {
                        ?>
                        <div id="u2s-CrossSellProduct-single" style="display:none;">
                                <div class="up2-text"><?php echo $text_intro ?></div>
                                <ul class="up2-carrousel-products">
                                        <?php $i = 1; while ($up2RelatedPost->have_posts()) : $up2RelatedPost->the_post(); ?>
                                        <li id="up2-product<?php echo $i; ?>" style="display:none;">
                                        <table>
                                                <tr>
                                                        <td>
                                                                <a href="<?php the_permalink() ?>" class="u2s-CrossSellProduct-lien">
                                                                <?php
                                                                $args = array(
                                                                'numberposts' => 1,
                                                                'order'=> 'ASC',
                                                                'post_mime_type' => 'image',
                                                                'post_parent' => $up2RelatedPost->posts[($i-1)]->ID,
                                                                'post_status' => null,
                                                                'post_type' => 'attachment'
                                                                );
                                                                
                                                                $attachments = get_children( $args );
                                                                
                                                                if ($attachments) {
                                                                        foreach($attachments as $attachment) {
                                                                                $image_attributes = wp_get_attachment_image_src( $attachment->ID, 'thumbnail' )  ? wp_get_attachment_image_src( $attachment->ID, 'thumbnail' ) : wp_get_attachment_image_src( $attachment->ID, 'full' );
                                                                                echo '<img src="'.wp_get_attachment_thumb_url( $attachment->ID ).'" />';
                                                                        }
                                                                } else {
                                                                        global $post, $posts;
                                                                        $first_img = '';
                                                                        ob_start();
                                                                        ob_end_clean();
                                                                        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $up2RelatedPost->posts[($i-1)]->post_content, $matches);
                                                                        $first_img = $matches[1][0];
                                                                        echo '<img src="'.$first_img.'" />';
                                                                }
                                                                ?>
                                                                </a>
                                                        </td>
                                                        <td>
                                                                <a href="<?php the_permalink() ?>" class="u2s-CrossSellProduct-lien">
                                                                <div class="up2-h2"><?php the_title(); ?></div>
                                                                <p><?php echo str_replace("\"","",substr(strip_tags(get_the_content()),0,500)) ?> ...</p>
                                                                </a>
                                                                <a href="<?php the_permalink() ?>" class="u2s-CrossSellProduct-lien u2s-add-to-cart">Lire l'article >></a>
                                                        </td>
                                               </tr>
                                        </table>
                                        </li>
                                        <?php $i++; if($i == 6) break; endwhile; ?>
                                </ul>
                                <img src="http://up2social.com/lib/images/arrow_left.png" id="up2-arrow-left" />
                                <img src="http://up2social.com/lib/images/arrow_right.png" id="up2-arrow-right" />
                        </div>
                        <div id="u2s-CrossSellProduct-grid" style="display:none;">
                                <div class="up2-text"><?php echo $text_intro ?></div>
                                <table>
                                        <tr>
                                        <?php $i = 1; while ($up2RelatedPost->have_posts()) : $up2RelatedPost->the_post(); ?>
                                                <td>
                                                        <a href="<?php the_permalink() ?>" class="u2s-CrossSellProduct-lien">
                                                        <?php
                                                        $args = array(
                                                        'numberposts' => 1,
                                                        'order'=> 'ASC',
                                                        'post_mime_type' => 'image',
                                                        'post_parent' => $up2RelatedPost->posts[($i-1)]->ID,
                                                        'post_status' => null,
                                                        'post_type' => 'attachment'
                                                        );
                                                        
                                                        $attachments = get_children( $args );
                                                        
                                                        if ($attachments) {
                                                                foreach($attachments as $attachment) {
                                                                        $image_attributes = wp_get_attachment_image_src( $attachment->ID, 'thumbnail' )  ? wp_get_attachment_image_src( $attachment->ID, 'thumbnail' ) : wp_get_attachment_image_src( $attachment->ID, 'full' );
                                                                        echo '<img src="'.wp_get_attachment_thumb_url( $attachment->ID ).'" />';
                                                                }
                                                        } else {
                                                                global $post, $posts;
                                                                $first_img = '';
                                                                ob_start();
                                                                ob_end_clean();
                                                                $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $up2RelatedPost->posts[($i-1)]->post_content, $matches);
                                                                $first_img = $matches[1][0];
                                                                echo '<img src="'.$first_img.'" />';
                                                        }
                                                        ?>
                                                        <div class="up2-h2"><?php the_title(); ?></div>
                                                        </a>
                                                </td>
                                        <?php $i++; if($i == 6) break; endwhile; ?>
                                       </tr>
                                </table>
                        </div>
                        <?php
                }
        }
}