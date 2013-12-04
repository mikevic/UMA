<?php
$currentFile = $_SERVER["PHP_SELF"];
$parts = Explode('/', $currentFile);
$current_page =  $parts[count($parts) - 1];
?>
<script>
function fix_flash() {
    // loop through every embed tag on the site
    var embeds = document.getElementsByTagName('embed');
    for (i = 0; i < embeds.length; i++) {
        embed = embeds[i];
        var new_embed;
        // everything but Firefox & Konqueror
        if (embed.outerHTML) {
            var html = embed.outerHTML;
            // replace an existing wmode parameter
            if (html.match(/wmode\s*=\s*('|")[a-zA-Z]+('|")/i))
                new_embed = html.replace(/wmode\s*=\s*('|")window('|")/i, "wmode='transparent'");
            // add a new wmode parameter
            else
                new_embed = html.replace(/<embed\s/i, "<embed wmode='transparent' ");
            // replace the old embed object with the fixed version
            embed.insertAdjacentHTML('beforeBegin', new_embed);
            embed.parentNode.removeChild(embed);
        } else {
            // cloneNode is buggy in some versions of Safari & Opera, but works fine in FF
            new_embed = embed.cloneNode(true);
            if (!new_embed.getAttribute('wmode') || new_embed.getAttribute('wmode').toLowerCase() == 'window')
                new_embed.setAttribute('wmode', 'transparent');
            embed.parentNode.replaceChild(new_embed, embed);
        }
    }
    // loop through every object tag on the site
    var objects = document.getElementsByTagName('object');
    for (i = 0; i < objects.length; i++) {
        object = objects[i];
        var new_object;
        // object is an IE specific tag so we can use outerHTML here
        if (object.outerHTML) {
            var html = object.outerHTML;
            // replace an existing wmode parameter
            if (html.match(/<param\s+name\s*=\s*('|")wmode('|")\s+value\s*=\s*('|")[a-zA-Z]+('|")\s*\/?\>/i))
                new_object = html.replace(/<param\s+name\s*=\s*('|")wmode('|")\s+value\s*=\s*('|")window('|")\s*\/?\>/i, "<param name='wmode' value='transparent' />");
            // add a new wmode parameter
            else
                new_object = html.replace(/<\/object\>/i, "<param name='wmode' value='transparent' />\n</object>");
            // loop through each of the param tags
            var children = object.childNodes;
            for (j = 0; j < children.length; j++) {
                try {
                    if (children[j] != null) {
                        var theName = children[j].getAttribute('name');
                        if (theName != null && theName.match(/flashvars/i)) {
                            new_object = new_object.replace(/<param\s+name\s*=\s*('|")flashvars('|")\s+value\s*=\s*('|")[^'"]*('|")\s*\/?\>/i, "<param name='flashvars' value='" + children[j].getAttribute('value') + "' />");
                        }
                    }
                }
                catch (err) {
                }
            }
            // replace the old embed object with the fixed versiony
            object.insertAdjacentHTML('beforeBegin', new_object);
            object.parentNode.removeChild(object);
        }
    }
}
</script>
<style>
.navbar-fixed-top
{ z-index:10002;
}
.navbar
{ z-index:10000;
}
</style>
 <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<? echo $host; ?>" id="usha_menon_menu"><img class="hidden-desktop" src="img/ushamenon.png" height="40px"/></a>
          <div class="nav-collapse">
            <ul class="nav">
              <li <? if($current_page == 'index.php'){ echo 'class="active"';}?>><a href="../index.php"><b>Home</b></a></li>
              <li class="dropdown <? if($current_page == 'about.php'){ echo 'active';} ?> ">
    				<a href="about.php" class="dropdown-toggle" data-toggle="dropdown"><b>About Us</b><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        	<li><a href="../about.php">What We Do</a></li>
                        	<li><a href="../testimonials.php">Testimonials</a></li>
                        	<li><a href="http://ushamenonasia.com/cv" target="_blank">Usha Menon's CV</a></li>
                        </ul>
 			  </li>
              <li class="dropdown <? if($current_page == 'bookshelf.php'){ echo 'active';} ?> ">
    				<a href="bookshelf.php" class="dropdown-toggle" data-toggle="dropdown"><b>Library</b><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        	<li><a href="../bookshelf.php">Usha's Book Shelf</a></li>
                        	<li><a href="../resources.php">Resources</a></li>
                        </ul>
 			  </li>
              <li <? if($current_page == 'media.php') { echo 'class="active"';}?>><a href="../media.php"><b>Media</b></a></li>
			  <li <? if($current_page == 'contact.php') { echo 'class="active"';}?>><a href="../contact.php"><b>Contact</b></a></li>
				
            </ul>
			<ul class="nav pull-right" style="padding:0px;height:18px;"> 
				<li><a id="search_bar" style="padding:10px;"><?php get_search_form(); ?></a></li>
			</ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
