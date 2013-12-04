<?php
class old_Widget_SoShake_Fanbox extends WP_Widget {
 
        function old_Widget_SoShake_Fanbox()
        {
                /* Widget settings. */
                $widget_ops = array( 'classname' => 'soshakeFBB', 'description' => 'Insert a Facebook Fanbox on your website' );
                
                /* Widget control settings. */
                $control_ops = array();
                
                /* Create the widget. */
                $this->WP_Widget( "soshake-fanbox", 'Facebook Fanbox by SoShake', $widget_ops, $control_ops );
        }
     
        function widget($args, $instance)
        {
                // Contenu du widget à afficher
                extract( $args );
                
                /* User-selected settings. */
                $features = $instance["features"];
                
                /* Before widget (defined by themes). */
                echo $before_widget;
                
                echo "<div class=\"up2-fanbox\"></div><script src=\"http://soshake.com/api/FanBox.js\"></script>";
                
                /* After widget (defined by themes). */
                echo $after_widget;
        }
     
        function update($new_instance, $old_instance)
        {
                // Modification des paramètres du widget
                return $new_instance;
        }
 
        function form($instance)
        {
                // Affichage des paramètres du widget dans l'admin
                $instance = wp_parse_args( (array) $instance, $defaults );
                ?>
                <a href="http://soshake.com/front/f/FanBox" target="_blank">Configure your Fanbox</a>
                <?php
        }
 
}
class old_Widget_SoShake_Facebook_Connect extends WP_Widget {
 
        function old_Widget_SoShake_Facebook_Connect()
        {
                $widget_ops = array( 'classname' => 'soshakeFBC', 'description' => 'Insert a Facebook Connect on your website to allow your visitors to easily create an account' );
                
                /* Widget control settings. */
                $control_ops = array();
                
                /* Create the widget. */
                $this->WP_Widget( "soshake-fbconnect", 'Facebook Connect by SoShake', $widget_ops, $control_ops );
        }
     
        function widget($args, $instance)
        {
                // Contenu du widget à afficher
                extract( $args );
                
                /* User-selected settings. */
                $features = $instance["features"];
                
                /* Before widget (defined by themes). */
                echo $before_widget;
                
                echo "<div class=\"up2-fbconnect\" url=\"".site_url()."\"></div><script src=\"http://soshake.com/api/FBConnect.js\"></script>";
                
                /* After widget (defined by themes). */
                echo $after_widget;
        }
     
        function update($new_instance, $old_instance)
        {
                // Modification des paramètres du widget
                return $new_instance;
        }
 
        function form($instance)
        {
                // Affichage des paramètres du widget dans l'admin
                $instance = wp_parse_args( (array) $instance, $defaults );
                ?>
                <a href="http://soshake.com/front/f/FBConnect" target="_blank">Configure your Facebook Connect</a>
                <?php
        }
 
}