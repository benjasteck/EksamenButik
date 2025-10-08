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
    $sporgsmal1 = sanitize_textarea_field($_REQUEST["sporgsmal1"]);
    $sporgsmal2 = sanitize_textarea_field($_REQUEST["sporgsmal2"]);
    $sporgsmal3 = sanitize_textarea_field($_REQUEST["sporgsmal3"]);
    $sporgsmal4 = sanitize_textarea_field($_REQUEST["sporgsmal4"]);

	$answer= wp_insert_post(array(
		"post_type" => "question answer",
		"post_status" => "publish",
		"post_title" => "answer of " . $fornavn));
	
	update_field("fornavn", $fornavn, $answer);
	update_field("efternavn", $efternavn, $answer);
	update_field("bopael", $bopael, $answer);
	update_field("alder", $alder, $answer);
    update_field("sporgsmal1", $sporgsmal1, $answer);
    update_field("sporgsmal2", $sporgsmal2, $answer);
    update_field("sporgsmal3", $sporgsmal3, $answer);
    update_field("sporgsmal4", $sporgsmal4, $answer);
	
	wp_redirect($_SERVER["HTTP_REFERER"]);
	exit;
}
add_action("admin_post_review_form", "demo_review_form_handler");
add_action("admin_post_nopriv_review_form", "demo_review_form_handler");

function custom_modal_scripts() {
    // 1. Register the script file
    wp_register_script( 
        'modal-handler', 
        get_template_directory_uri() . '/js/modal-handler.js', // <-- Adjust this path to your JS file
        array(), 
        '1.0', 
        true // Load in footer for better performance
    );

    // 2. Enqueue the script
    wp_enqueue_script( 'modal-handler' );
}
// Hook the function to the correct action
add_action( 'wp_enqueue_scripts', 'custom_modal_scripts' );

function demo_testimonial_form_handler() {
    //aint noone wanna log in to write a testimonial
    if ( ! is_user_logged_in() ) {
        wp_die('You must be logged in to submit a testimonial.');
    }
    if ( ! isset( $_POST['simple_form_nonce_field'] ) ||  ! wp_verify_nonce( $_POST['simple_form_nonce_field'], 'simple_form_nonce_action' ) ) {
        wp_die( 'Security check failed.' );
    }
	$testimonialtitle = sanitize_text_field($_REQUEST["testimonialtitle"]);
	$testimonialtekst = sanitize_textarea_field($_REQUEST["testimonialtekst"]);
    $testimonialscore = sanitize_text_field($_REQUEST["testimonialscore"]);

	$testimonial = wp_insert_post(array(
		"post_type" => "testimonial",
		"post_status" => "publish",
		"post_title" => "Review of " . $testimonialtitle
	));
	if ( is_wp_error( $testimonial_id ) ) {
        wp_send_json_error( 'Error inserting post: ' . $testimonial_id->get_error_message() );
    }
	update_field("testimonialtitle", $testimonialtitle, $testimonial);
	update_field("testimonialtekst", $testimonialtekst, $testimonial);
	update_field("testimonialscore", $testimonialscore, $testimonial);
	
	wp_redirect($_SERVER["HTTP_REFERER"]);
	exit;
}
add_action("admin_post_testimonial_form", "demo_testimonial_form_handler");
add_action("admin_post_nopriv_testimonial_form", "demo_testimonial_form_handler");