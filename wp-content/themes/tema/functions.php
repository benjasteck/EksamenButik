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
     wp_enqueue_script(
        'mytheme2-js', // Handle (unique ID)
        get_template_directory_uri() . '/js/buttonmagic.js', // File path
        array('jquery'), // Dependencies (optional)
        filemtime(get_template_directory() . '/js/buttonmagic.js'), // Version (good for cache-busting)
        true // Load in footer (true) or header (false)
    );
    wp_enqueue_script(
        'mytheme3-js', // Handle (unique ID)
        get_template_directory_uri() . '/js/progressbar.js', // File path
        array('jquery'), // Dependencies (optional)
        filemtime(get_template_directory() . '/js/progressbar.js'), // Version (good for cache-busting)
        true // Load in footer (true) or header (false)
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


function custom_excerpt_length($length) {
    return 30; // Change 20 to the desired word count
}
add_filter('excerpt_length', 'custom_excerpt_length');


function demo_review_form_handler() {
	$fornavn = sanitize_text_field($_REQUEST["fornavn"]);
	$efternavn = sanitize_text_field($_REQUEST["efternavn"]);
	$bopael = sanitize_text_field($_REQUEST["bopael"]);
	$alder = absint($_REQUEST["alder"]);
    $sporgsmal-1 = sanitize_textarea_field($_REQUEST["sporgsmal-1"]);
    $sporgsmal-2 = sanitize_textarea_field($_REQUEST["sporgsmal-2"]);
    $sporgsmal-3 = sanitize_textarea_field($_REQUEST["sporgsmal-3"]);
    $sporgsmal-4 = sanitize_textarea_field($_REQUEST["sporgsmal-4"]);

	$answer= wp_insert_post(array(
		"post_type" => "question answer",
		"post_status" => "publish",
		"post_title" => "answer of " . get_the_title($fornavn)));
	
	update_field("fornavn", $fornavn, $answer);
	update_field("efternavn", $efternavn, $answer);
	update_field("bopael", $bopael, $answer);
	update_field("alder", $alder, $answer);
    update_field("sporgsmal-1", $sporgsmal-1, $answer);
    update_field("sporgsmal-2", $sporgsmal-2, $answer);
    update_field("sporgsmal-3", $sporgsmal-3, $answer);
    update_field("sporgsmal-4", $sporgsmal-4, $answer);
	
	wp_redirect($_SERVER["HTTP_REFERER"]);
	exit;
}
add_action("admin_post_review_form", "demo_review_form_handler");
add_action("admin_post_nopriv_review_form", "demo_review_form_handler");