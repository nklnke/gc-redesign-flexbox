<?php

function mytheme_add_woocommerce_support() {
	add_theme_support( 'gctheme' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
