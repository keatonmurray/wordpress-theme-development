<?php

    function my_theme_enqueue_styles() {
        // Enqueue Google Fonts
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);
        
        // Enqueue Bootstrap CSS
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');

        // Enqueue Theme's main stylesheet
        wp_enqueue_style('theme-style', get_stylesheet_uri());

        // Enqueue Custom CSS
        wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array('theme-style'), '1.0.0', 'all');

        // Enqueue Bootstrap JS
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true);
        
        // Enqueue Font Awesome
        wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/5dfbc71075.js', array(), null, true);
    }

    add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


    function my_footer_area() {
        // echo '<div class="custom-footer-content">';
        // echo '<p>Custom footer text or HTML content goes here.</p>';
        // echo '</div>';
    }
    
    add_action('wp_footer', 'my_footer_area');


