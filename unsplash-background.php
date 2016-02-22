<?php 
    /*
    Plugin Name: Unsplash Background for WordPress
    Plugin URI: https://github.com/nasrulhazim/unsplash-background
    Description: Display Random Background Images from Unsplash.com
    Author: Nasrul Hazim Bin Mohamad
    Version: 1.0
    Author URI: http://blog.nasrulhazim.com
    */
    
	function enqueue_styles() {
		wp_enqueue_style('vegas','https://cdnjs.cloudflare.com/ajax/libs/vegas/2.2.0/vegas.min.css');
	}

	function enqueue_scripts() {
		wp_enqueue_script('vegas','https://cdnjs.cloudflare.com/ajax/libs/vegas/2.2.0/vegas.min.js',array('jquery'),'1.0',false);

		wp_enqueue_script( 'unsplash-background', plugin_dir_url( __FILE__ ) . 'assets/js/unsplash-background.js', array( 'jquery' ), '1.0', false );
	}

	add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
	add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

?>