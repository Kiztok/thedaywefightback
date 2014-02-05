<?php
/*
Plugin Name: The Day We Fight Back for WordPress
Plugin URI: http://thedaywefightback.org/
Description: Adds the footer for The Day We Fight Back
Version: 2014.02.11
Author: Darkness
Author URI: http://github.com/darkness/
WordPress Version Required: 3.5
*/
defined( 'WPINC' ) OR exit();

add_action( 'wp_enqueue_scripts', function(){
  wp_enqueue_script( 'tdwfb', plugins_url( 'thedaywefightback.js', __FILE__ ),
    array(), '1.0.0', true );
});
