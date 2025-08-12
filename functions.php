<?php
function iten_enqueue_scripts() {
    wp_enqueue_style('iten-style', get_stylesheet_uri());
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=DM+Sans:wght@400;500&display=swap', false);
    wp_enqueue_script('iten-script', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'iten_enqueue_scripts');
?>
