<?php 
/**
* Plugin Name: Check Ud github and licence  
* Plugin URI: https://www.facebook.com/musadiq.khan.tareen
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: Test taker
* Author URI: https://www.facebook.com/musadiq.khan.tareen
**/

ob_start();
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/musadiq012/ldprogithubupdatetesting/',
    __FILE__,
    'ldprogithubupdatetesting'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');

//Optional: If you're using a private repository, specify the access token like this:
//$myUpdateChecker->setAuthentication('your-token-here');

 add_action( 'init', 'create_post_type' );
    function create_post_type() {
        register_post_type( 'testtakerpost',
            array(
                'labels' => array(
                    'name' => __( 'Musadiq test' ),
                    'singular_name' => __( 'Musadiq test' )
                ),
                'public' => true,
                'has_archive' => true,
            )
        );
    }
    
