<?php
function bst_load_resources() {
    wp_enqueue_style("main-css", get_template_directory_uri() . "/style.css");
}
add_action("wp_enqueue_scripts", "bst_load_resources");
// Disable gutenberg editor
function disable_gutenberg() {
    remove_post_type_support('page', 'editor');
    remove_post_type_support('post', 'editor');
}
add_action('init', 'disable_gutenberg');