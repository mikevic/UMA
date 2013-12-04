<aside id="sidebar">
<div class="hero-unit content_box" id="content_box2">
<h3 class="umheading" style="color:white;">Recent Posts</h3>
<hr>
<h4>
<ul>
<?php
	$args = array( 'numberposts' => '10' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" style="color:white;" >' .   $recent["post_title"].'</a> </li> ';
	}
?>
</ul>
</h4>
</div>
<div class="hero-unit content_box" id="content_box1">
<h3 class="umheading" style="color:white;">Categories</h3>
<hr>
<ul>
<h4><li><a href="http://ushamenonasia.com/blog/?cat=5" style="color:white;">Fundraising & Philanthropy</li>
<li><a href="http://ushamenonasia.com/blog/?cat=3" style="color:white;">Leadership</li>
<li><a href="http://ushamenonasia.com/blog/?cat=4" style="color:white;">Management</li>
<li><a href="http://ushamenonasia.com/blog/?cat=1" style="color:white;">Uncategorized</li></h4>
</ul>
</div>
<div class="hero-unit content_box" id="content_box3">
<h3 class="umheading" style="color:white;">Blogroll</h3>
<hr>
<ul>
<h4><li><a href="http://101fundraising.org" style="color:white;" target="_blank">101Fundraising</li>
<li><a href="http://www.sofii.org" style="color:white;" target="_blank">SOFII</li>
<li><a href="http://www.socialedge.org/blogs/kiva-chronicles" style="color:white;" target="_blank">Kiva Chronicles</li>
<li><a href="http://philanthropy.com/section/Home/172" style="color:white;" target="_blank">The Chronicale of Philanthropy</li>
<li><a href="http://www.peopleinaid.org/interactive/forums" style="color:white;" target="_blank">People in AID Interactive</li>
<li><a href="http://www.asianphilanthropyforum.org" style="color:white;" target="_blank">Asian Philanthropy Forum</li>
<li><a href="http://www.idealist.org/" style="color:white;" target="_blank">Idealist</li>
<li><a href="http://blog.guykawasaki.com/#axzz1aHLDNyRI" style="color:white;" target="_blank">How to change the world</li>
<li><a href="http://rohitbhargava.typepad.com" style="color:white;" target="_blank">Influential Marketing</li>
<li><a href="http://www.theagitator.net/" style="color:white;" target="_blank">The Agitator</li>
<li><a href="http://www.fundchat.org/category/articles/international/" style="color:white;" target="_blank">#fundchat</li></h4></ul></h4>
</div>
</aside>