<?php 
	add_action( 'wp_enqueue_scripts', function () {
	// 	wp_enqueue_style( 'fonts', подключить шрифты' );

	// wp_enqueue_style( 'reset', 'https://cdn.jsdelivr.net/npm/modern-css-reset/dist/reset.min.css ');
    wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'  );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/styles/main.css' );
	wp_enqueue_style( 'material-icon', 'https://fonts.googleapis.com/icon?family=Material+Icons'  );



	// wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/scripts/bootstrap.bundle.min.js ', array('jquery'), 'null', true);

	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/scripts/popper.min.js ', array('jquery'), 'null', true);
	wp_enqueue_script( 'swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), 'null', true);
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/scripts/sliders.js', array('jquery'), 'null', true);
	wp_enqueue_script ('jquery', 'https://code.jquery.com/ui/1.13.1/jquery-ui.min.js', 'null', true ); 
	wp_enqueue_script( 'jquery.validate', get_template_directory_uri() . '/assets/scripts/jquery.validate.min.js ', array('jquery'), 'null', true);
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/scripts/jquery.ui.touch-punch.min.js ', array('jquery'), 'null', true);
	wp_enqueue_script( 'simplebar', get_template_directory_uri() . '/assets/scripts/simplebar.min.js ', array('jquery'), 'null', true);
	wp_enqueue_script( 'header', get_template_directory_uri() . '/assets/scripts/header.js ', array('jquery'), 'null', true);
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/scripts/script.js ', array('jquery'), 'null', true);
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/scripts/main.js ', array('jquery'), 'null', true);


});

add_theme_support( 'post-thumbnails');
add_theme_support( 'title-tag');
add_theme_support( 'custom-logo');

add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});


?>
