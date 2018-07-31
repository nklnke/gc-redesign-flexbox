add_theme_support( 'woocommerce' );

// css register
wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.min.css', array(), 'screen');
wp_register_style( 'style', get_template_directory_uri() . '/css/style.css', array('normalize'), 'screen');

// css connection
wp_enqueue_style( 'normalize');
wp_enqueue_style( 'style');

// js register
wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), false);
    
// js connection
wp_enqueue_script( 'jquery');
