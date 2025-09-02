<?php
$args = array(
    'post_type' => 'partner', // Replace 'partner' with your actual custom post type name
    'posts_per_page' => -1,  // Get all partner posts
    'orderby' => 'menu_order',
    'order' => 'ASC',
);

$partner_logos = get_posts($args);
?>

<section id="partnere">
<h2 class="partnerTitle">Partnere</h2>
<div class="logoSlide">
            <?php
            if ($partner_logos) {
                foreach ($partner_logos as $post) {
                    setup_postdata($post);
                    $logo = get_field('partner_logo_img'); // Use the name of your ACF image field
                    if ($logo) {
                        echo '<img src="' . esc_url($logo['url']) . '" alt="' . esc_attr($logo['alt']) . '" />';
                    }
                }
                wp_reset_postdata();
            }
            ?>
        </div>
    <div class="logoSlide">
    <?php
            // Repeat the loop for the second logo slide if you want the continuous effect
            if ($partner_logos) {
                foreach ($partner_logos as $post) {
                    setup_postdata($post);
                    $logo = get_field('partner_logo_image');
                    if ($logo) {
                        echo '<img src="' . esc_url($logo['url']) . '" alt="' . esc_attr($logo['alt']) . '" />';
                    }
                }
                wp_reset_postdata();
            }
            ?>
    </div>
</div>
</section>