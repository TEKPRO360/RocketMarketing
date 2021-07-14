<?php
/*
 * Enqueues
*/
$url = 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js';
$test_url = @fopen($url, 'r');
if ($test_url !== false) {
    function load_external_jQuery()
    {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
        wp_enqueue_script('jquery');
    }
    add_action('wp_enqueue_scripts', 'load_external_jQuery');
} else {
    function load_local_jQuery()
    {
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . '/theme/js/jquery.min.js');
        wp_enqueue_script('jquery');
    }
    add_action('wp_enqueue_scripts', 'load_local_jQuery');
}
if ( ! function_exists('b4st_enqueues') ) {
    function b4st_enqueues() {
        // Styles
        wp_register_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', false, '4.4.1', null);
        wp_enqueue_style('bootstrap4');
        wp_register_style('animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css', false, '3.7.2', false);
        wp_enqueue_style('animatecss');
        wp_register_style('fontawesome5', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css', false, '5.11.2', null);
        wp_enqueue_style('fontawesome5');
        wp_enqueue_style( 'gutenberg-blocks', get_template_directory_uri() . '/theme/css/blocks.css' );
        wp_register_style('owl-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', true, '2.3.4');
        wp_enqueue_style('owl-carousel-css');
        wp_register_style('owl-carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', true, '2.3.4');
        wp_enqueue_style('owl-carousel-theme');
        wp_register_style('theme', get_template_directory_uri() . '/theme/css/b4st.css', false, null);
        wp_enqueue_style('theme');
        wp_register_style('AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.css', false, '2.3.1');
        wp_enqueue_style('AOS');
        // Scripts
        wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
        wp_enqueue_script('modernizr');
        wp_register_script('jQueryUi',  'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', false, '1.12.1', true);
        wp_enqueue_script('jQueryUi');
        wp_enqueue_script('jquery');
        wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', false, '1.16.0', true);
        wp_enqueue_script('popper');
        wp_register_script('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', false, '4.4.1', true);
        wp_enqueue_script('bootstrap4');
        wp_register_script('theme', get_template_directory_uri() . '/theme/js/b4st.js', false, null, true);
        $postId = get_the_id();
        $colorServicio = get_field('color_background', $postId );
        $colorTextoServicio = get_field('color_texto', $postId);
        $script_data = array(
            'color_servicio'    => $colorServicio,
            'texto_servicio'    => $colorTextoServicio,
        );
        wp_localize_script(
            'theme',
            'my_data',
            $script_data
        );
        wp_enqueue_script('theme');
        wp_register_script('owl-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', true, '2.3.4');
        wp_enqueue_script('owl-carousel-js');
        wp_register_script('main-js', get_template_directory_uri() . '/theme/js/main.js', false, null, true);
        wp_enqueue_script('main-js');
        wp_register_script('jQueryMousewheel', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.js', false, '3.1.13', true);
        wp_enqueue_script('jQueryMousewheel');
        wp_register_script('AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.js', false, '2.3.1', true);
        wp_enqueue_script('AOS');
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);