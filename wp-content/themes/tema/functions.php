<?php
function bst_load_resources() {
    wp_enqueue_style("main-css", get_template_directory_uri() . "/style.css");
}
add_action("wp_enqueue_scripts", "bst_load_resources");
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
    wp_enqueue_script(
        'mytheme-js',
        get_template_directory_uri() . '/js/loadText.js', 
        array('jquery'), 
        filemtime(get_template_directory() . '/js/loadText.js'), 
        true 
    );
     wp_enqueue_script(
        'mytheme2-js', 
        get_template_directory_uri() . '/js/buttonmagic.js', 
        array('jquery'), 
        filemtime(get_template_directory() . '/js/buttonmagic.js'), 
        true 
    );
    wp_enqueue_script(
        'mytheme3-js', 
        get_template_directory_uri() . '/js/progressbar.js', 
        array('jquery'), 
        filemtime(get_template_directory() . '/js/progressbar.js'), 
        true 
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


function custom_excerpt_length($length) {
    return 30; 
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
    wp_register_script( 
        'modal-handler', 
        get_template_directory_uri() . '/js/modal-handler.js', 
        array(), 
        '1.0', 
        true 
    );
    wp_enqueue_script( 'modal-handler' );
}

add_action( 'wp_enqueue_scripts', 'custom_modal_scripts' );

function demo_testimonial_form_handler() {
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

function shop_enable_woocommerce(){
    add_theme_support("woocommerce");
}
add_action("after_setup_theme", "shop_enable_woocommerce");

function render_products_by_tag( $tag_slug ) {
    $args = array(
        'post_type'      => 'product',
        'post_status'    => 'publish',
        'posts_per_page' => 12,
        'tax_query'      => array(
            array(
                'taxonomy' => 'product_tag',
                'field'    => 'slug',
                'terms'    => $tag_slug, // Dynamic tag slug
            ),
        ),
    );

    $loop = new WP_Query( $args );
    $output = '';

    if ( $loop->have_posts() ) {
        ob_start();

        echo '<ul class="products-list tag-' . esc_attr( $tag_slug ) . '">';

        while ( $loop->have_posts() ) {
            $loop->the_post();
            $product = wc_get_product( get_the_ID() );

            echo '<li>';
            echo '<div class="product-img-container">' . get_the_post_thumbnail() . '</div>';
            
            echo '<h4>' . esc_html( get_the_title() ) . '</h4>';
            echo '<p class="price">' . $product->get_price_html() . '</p>';
            echo '<a href="' . esc_url( get_permalink() ) . '">See more</a>';
            echo '</li>';
        }
        echo '</ul>';

        wp_reset_postdata();
        $output = ob_get_clean();

    } else {
        wp_reset_postdata();
        $output = '<p>No products found with the tag "' . esc_html( $tag_slug ) . '".</p>';
    }

    return $output;
}
add_action( 'wp_head', function() {
    if ( is_product() or is_cart() or is_checkout() or is_shop() or is_account_page()) : ?>
<style>
#header {
    height: 160px;
}

.button-wrapper {
    display: none;
}

.main-container {
    height: 85vh;
}
</style>
<?php
    endif;
});
add_action( 'wp_head', function() {
    if ( is_account_page()) : ?>
<style>
#header {
    height: 130px;
}
</style>
<?php
    endif;
});

function plp_register_strings(){
    pll_register_string("Polylang Playground", "Hjem");
    pll_register_string("Polylang Playground", "Arrangement");
    pll_register_string("Polylang Playground", "DJs");
    pll_register_string("Polylang Playground", "Udlejning");
    pll_register_string("Polylang Playground", "Om Os");
    pll_register_string("Polylang Playground", "Arrangementer");
    pll_register_string("Polylang Playground", "Se Mere");
    pll_register_string("Polylang Playground", "Skriv en testimonial");
    pll_register_string("Polylang Playground", "Skriv Dit Navn");
    pll_register_string("Polylang Playground", "Skriv Din Email");
    pll_register_string("Polylang Playground", "Skriv Dit Telefon Nummer");
    pll_register_string("Polylang Playground", "Skriv Dato For Fest");
    pll_register_string("Polylang Playground", "Skriv Antal Gæster");
    pll_register_string("Polylang Playground", "Beskriv fest, spilletid samt ekstra tanker");
    pll_register_string("Polylang Playground", "Send forespørgsel");
    pll_register_string("Polylang Playground", "Læs Mere");
}
add_action("init","plp_register_strings");