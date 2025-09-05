<?php
function bst_load_resources() {
    wp_enqueue_style("main-css", get_template_directory_uri() . "/style.css");
}
add_action("wp_enqueue_scripts", "bst_load_resources");
// Disable gutenberg editor
function disable_gutenberg() {
    remove_post_type_support('page', 'editor');

}
add_action('init', 'disable_gutenberg');


function handle_simple_form_submission() {
	$Fornavn = isset( $_POST['fornavn'] ) ? sanitize_text_field( $_POST['fornavn'] ) : '';
    $Efternavn  = isset( $_POST['efternavn'] ) ? sanitize_text_field( $_POST['efternavn'] ) : '';
    $Alder      = isset( $_POST['alder'] ) ? sanitize_text_field( $_POST['alder'] ) : '';
    $Bopæl     = isset( $_POST['bopael'] ) ? sanitize_text_field( $_POST['bopael'] ) : '';
    $Spørgsmål1     = isset( $_POST['sporgsmal-1'] ) ? sanitize_text_field( $_POST['sporgsmal-1'] ) : '';
    $Spørgsmål2     = isset( $_POST['sporgsmal-2'] ) ? sanitize_text_field( $_POST['sporgsmal-2'] ) : '';
    $Spørgsmål3     = isset( $_POST['sporgsmal-3'] ) ? sanitize_text_field( $_POST['sporgsmal-3'] ) : '';
    $Spørgsmål4     = isset( $_POST['sporgsmal-4'] ) ? sanitize_text_field( $_POST['sporgsmal-4'] ) : '';

	$subject ="Tak for at besvare vores spørgeskema";
	$message = "
	Hej $Fornavn,
	

Tak for at besvare vores spørgeskema.

Med venlig hilsen,
WaveForm
";
}


function mytheme_enqueue_scripts() {
    // Register and enqueue your custom JS file
    wp_enqueue_script(
        'mytheme-js', // Handle (unique ID)
        get_template_directory_uri() . '/js/loadText.js', // File path
        array('jquery'), // Dependencies (optional)
        filemtime(get_template_directory() . '/js/loadText.js'), // Version (good for cache-busting)
        true // Load in footer (true) or header (false)
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');