<?php
function register_Widget_SoShake_Facebook_Connect () { return register_widget("Widget_SoShake_Facebook_Connect"); }
add_action('widgets_init', 'register_Widget_SoShake_Facebook_Connect');
function register_Widget_SoShake_Fanbox () { return register_widget("Widget_SoShake_Fanbox"); }
add_action('widgets_init', 'register_Widget_SoShake_Fanbox');

class Widget_SoShake_Fanbox extends WP_Widget {
 
        function Widget_SoShake_Fanbox()
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
                
                echo "<div class=\"sshk-fanbox\"></div><script src=\"http://soshake.com/api/FanBox.js\"></script>";
                
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
class Widget_SoShake_Facebook_Connect extends WP_Widget {
 
        function Widget_SoShake_Facebook_Connect()
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
                
                echo "<div class=\"sshk-fbconnect\" url=\"".site_url()."\"></div><script src=\"http://soshake.com/api/FBConnect.js\"></script>";
                
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

class Widget_SoShake_ADN_728x90 extends WP_Widget {
     
            function Widget_SoShake_ADN_728x90() {
                    $widget_ops = array( 'classname' => 'soshake-adn-728x90', 'description' => 'Insert high revenue ad on your website. Those ads are tailored specificly on each of your visitors.' );
                    $this->WP_Widget( "soshake-adn-728x90", 'SoShake ads 728px x 90px', $widget_ops, array() );
            }
         
            function widget($args, $instance) {
                    extract( $args );
                    $features = $instance["features"];
                    echo $before_widget."<div class=\"sshk-adn\" width=\"728\" height=\"90\"></div><script src=\"http://soshake.com/api/adn.js\"></script>".$after_widget;
            }
            function update($new_instance, $old_instance) { return $new_instance; }
            function form($instance) { $instance = wp_parse_args( (array) $instance, $defaults ); }
     
    }
    function register_Widget_SoShake_ADN_728x90 () { return register_widget("Widget_SoShake_ADN_728x90"); }
    add_action('widgets_init', 'register_Widget_SoShake_ADN_728x90');
    
        class Widget_SoShake_ADN_468x60 extends WP_Widget {
     
            function Widget_SoShake_ADN_468x60() {
                    $widget_ops = array( 'classname' => 'soshake-adn-468x60', 'description' => 'Insert high revenue ad on your website. Those ads are tailored specificly on each of your visitors.' );
                    $this->WP_Widget( "soshake-adn-468x60", 'SoShake ads 468px x 60px', $widget_ops, array() );
            }
         
            function widget($args, $instance) {
                    extract( $args );
                    $features = $instance["features"];
                    echo $before_widget."<div class=\"sshk-adn\" width=\"468\" height=\"60\"></div><script src=\"http://soshake.com/api/adn.js\"></script>".$after_widget;
            }
            function update($new_instance, $old_instance) { return $new_instance; }
            function form($instance) { $instance = wp_parse_args( (array) $instance, $defaults ); }
     
    }
    function register_Widget_SoShake_ADN_468x60 () { return register_widget("Widget_SoShake_ADN_468x60"); }
    add_action('widgets_init', 'register_Widget_SoShake_ADN_468x60');
    
        class Widget_SoShake_ADN_125x125 extends WP_Widget {
     
            function Widget_SoShake_ADN_125x125() {
                    $widget_ops = array( 'classname' => 'soshake-adn-125x125', 'description' => 'Insert high revenue ad on your website. Those ads are tailored specificly on each of your visitors.' );
                    $this->WP_Widget( "soshake-adn-125x125", 'SoShake ads 125px x 125px', $widget_ops, array() );
            }
         
            function widget($args, $instance) {
                    extract( $args );
                    $features = $instance["features"];
                    echo $before_widget."<div class=\"sshk-adn\" width=\"125\" height=\"125\"></div><script src=\"http://soshake.com/api/adn.js\"></script>".$after_widget;
            }
            function update($new_instance, $old_instance) { return $new_instance; }
            function form($instance) { $instance = wp_parse_args( (array) $instance, $defaults ); }
     
    }
    function register_Widget_SoShake_ADN_125x125 () { return register_widget("Widget_SoShake_ADN_125x125"); }
    add_action('widgets_init', 'register_Widget_SoShake_ADN_125x125');
    
        class Widget_SoShake_ADN_200x200 extends WP_Widget {
     
            function Widget_SoShake_ADN_200x200() {
                    $widget_ops = array( 'classname' => 'soshake-adn-200x200', 'description' => 'Insert high revenue ad on your website. Those ads are tailored specificly on each of your visitors.' );
                    $this->WP_Widget( "soshake-adn-200x200", 'SoShake ads 200px x 200px', $widget_ops, array() );
            }
         
            function widget($args, $instance) {
                    extract( $args );
                    $features = $instance["features"];
                    echo $before_widget."<div class=\"sshk-adn\" width=\"200\" height=\"200\"></div><script src=\"http://soshake.com/api/adn.js\"></script>".$after_widget;
            }
            function update($new_instance, $old_instance) { return $new_instance; }
            function form($instance) { $instance = wp_parse_args( (array) $instance, $defaults ); }
     
    }
    function register_Widget_SoShake_ADN_200x200 () { return register_widget("Widget_SoShake_ADN_200x200"); }
    add_action('widgets_init', 'register_Widget_SoShake_ADN_200x200');
    
        class Widget_SoShake_ADN_250x250 extends WP_Widget {
     
            function Widget_SoShake_ADN_250x250() {
                    $widget_ops = array( 'classname' => 'soshake-adn-250x250', 'description' => 'Insert high revenue ad on your website. Those ads are tailored specificly on each of your visitors.' );
                    $this->WP_Widget( "soshake-adn-250x250", 'SoShake ads 250px x 250px', $widget_ops, array() );
            }
         
            function widget($args, $instance) {
                    extract( $args );
                    $features = $instance["features"];
                    echo $before_widget."<div class=\"sshk-adn\" width=\"250\" height=\"250\"></div><script src=\"http://soshake.com/api/adn.js\"></script>".$after_widget;
            }
            function update($new_instance, $old_instance) { return $new_instance; }
            function form($instance) { $instance = wp_parse_args( (array) $instance, $defaults ); }
     
    }
    function register_Widget_SoShake_ADN_250x250 () { return register_widget("Widget_SoShake_ADN_250x250"); }
    add_action('widgets_init', 'register_Widget_SoShake_ADN_250x250');
    
        class Widget_SoShake_ADN_180x150 extends WP_Widget {
     
            function Widget_SoShake_ADN_180x150() {
                    $widget_ops = array( 'classname' => 'soshake-adn-180x150', 'description' => 'Insert high revenue ad on your website. Those ads are tailored specificly on each of your visitors.' );
                    $this->WP_Widget( "soshake-adn-180x150", 'SoShake ads 180px x 150px', $widget_ops, array() );
            }
         
            function widget($args, $instance) {
                    extract( $args );
                    $features = $instance["features"];
                    echo $before_widget."<div class=\"sshk-adn\" width=\"180\" height=\"150\"></div><script src=\"http://soshake.com/api/adn.js\"></script>".$after_widget;
            }
            function update($new_instance, $old_instance) { return $new_instance; }
            function form($instance) { $instance = wp_parse_args( (array) $instance, $defaults ); }
     
    }
    function register_Widget_SoShake_ADN_180x150 () { return register_widget("Widget_SoShake_ADN_180x150"); }
    add_action('widgets_init', 'register_Widget_SoShake_ADN_180x150');
    
        class Widget_SoShake_ADN_300x250 extends WP_Widget {
     
            function Widget_SoShake_ADN_300x250() {
                    $widget_ops = array( 'classname' => 'soshake-adn-300x250', 'description' => 'Insert high revenue ad on your website. Those ads are tailored specificly on each of your visitors.' );
                    $this->WP_Widget( "soshake-adn-300x250", 'SoShake ads 300px x 250px', $widget_ops, array() );
            }
         
            function widget($args, $instance) {
                    extract( $args );
                    $features = $instance["features"];
                    echo $before_widget."<div class=\"sshk-adn\" width=\"300\" height=\"250\"></div><script src=\"http://soshake.com/api/adn.js\"></script>".$after_widget;
            }
            function update($new_instance, $old_instance) { return $new_instance; }
            function form($instance) { $instance = wp_parse_args( (array) $instance, $defaults ); }
     
    }
    function register_Widget_SoShake_ADN_300x250 () { return register_widget("Widget_SoShake_ADN_300x250"); }
    add_action('widgets_init', 'register_Widget_SoShake_ADN_300x250');
    
        class Widget_SoShake_ADN_336x280 extends WP_Widget {
     
            function Widget_SoShake_ADN_336x280() {
                    $widget_ops = array( 'classname' => 'soshake-adn-336x280', 'description' => 'Insert high revenue ad on your website. Those ads are tailored specificly on each of your visitors.' );
                    $this->WP_Widget( "soshake-adn-336x280", 'SoShake ads 336px x 280px', $widget_ops, array() );
            }
         
            function widget($args, $instance) {
                    extract( $args );
                    $features = $instance["features"];
                    echo $before_widget."<div class=\"sshk-adn\" width=\"336\" height=\"280\"></div><script src=\"http://soshake.com/api/adn.js\"></script>".$after_widget;
            }
            function update($new_instance, $old_instance) { return $new_instance; }
            function form($instance) { $instance = wp_parse_args( (array) $instance, $defaults ); }
     
    }
    function register_Widget_SoShake_ADN_336x280 () { return register_widget("Widget_SoShake_ADN_336x280"); }
    add_action('widgets_init', 'register_Widget_SoShake_ADN_336x280');
    
        class Widget_SoShake_ADN_120x600 extends WP_Widget {
     
            function Widget_SoShake_ADN_120x600() {
                    $widget_ops = array( 'classname' => 'soshake-adn-120x600', 'description' => 'Insert high revenue ad on your website. Those ads are tailored specificly on each of your visitors.' );
                    $this->WP_Widget( "soshake-adn-120x600", 'SoShake ads 120px x 600px', $widget_ops, array() );
            }
         
            function widget($args, $instance) {
                    extract( $args );
                    $features = $instance["features"];
                    echo $before_widget."<div class=\"sshk-adn\" width=\"120\" height=\"600\"></div><script src=\"http://soshake.com/api/adn.js\"></script>".$after_widget;
            }
            function update($new_instance, $old_instance) { return $new_instance; }
            function form($instance) { $instance = wp_parse_args( (array) $instance, $defaults ); }
     
    }
    function register_Widget_SoShake_ADN_120x600 () { return register_widget("Widget_SoShake_ADN_120x600"); }
    add_action('widgets_init', 'register_Widget_SoShake_ADN_120x600');
    
        class Widget_SoShake_ADN_160x600 extends WP_Widget {
     
            function Widget_SoShake_ADN_160x600() {
                    $widget_ops = array( 'classname' => 'soshake-adn-160x600', 'description' => 'Insert high revenue ad on your website. Those ads are tailored specificly on each of your visitors.' );
                    $this->WP_Widget( "soshake-adn-160x600", 'SoShake ads 160px x 600px', $widget_ops, array() );
            }
         
            function widget($args, $instance) {
                    extract( $args );
                    $features = $instance["features"];
                    echo $before_widget."<div class=\"sshk-adn\" width=\"160\" height=\"600\"></div><script src=\"http://soshake.com/api/adn.js\"></script>".$after_widget;
            }
            function update($new_instance, $old_instance) { return $new_instance; }
            function form($instance) { $instance = wp_parse_args( (array) $instance, $defaults ); }
     
    }
    function register_Widget_SoShake_ADN_160x600 () { return register_widget("Widget_SoShake_ADN_160x600"); }
    add_action('widgets_init', 'register_Widget_SoShake_ADN_160x600');