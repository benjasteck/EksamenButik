<?php
$PartnerTitel = get_field("partner_title");
?>


<section id="partnere">
    <h2 class="partnerTitle"
        aria-label="A view of our partners containing Nordic Event, Skat, Leo, Danske Bank, Mearsk, Rigshopitalet, SDU university of southern Denmark, TDC Telenor, Rema tusind.">
        <?php echo($PartnerTitel);?></h2>
    <div class="logoLine" tabindex="0">
        <?php
        $args = array(
            'post_type'      => 'partner',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        );
        $partner_logos = get_posts($args);
        if ($partner_logos) {
            echo '<div class="logoSlide">';
            foreach ($partner_logos as $post) {
                setup_postdata($post);
                $logo = get_field('partner_logo_img');
                if ($logo) {
                    echo '<img src="' . esc_url($logo['url']) . '" alt="' . esc_attr($logo['alt']) . '" />';
                }
            }
            echo '</div>';
            wp_reset_postdata();
            echo '<div class="logoSlide">';
            foreach ($partner_logos as $post) {
                setup_postdata($post);
                $logo = get_field('partner_logo_img');
                if ($logo) {
                    echo '<img src="' . esc_url($logo['url']) . '" alt="' . esc_attr($logo['alt']) . '" />';
                }
            }
            echo '</div>';
            wp_reset_postdata();
        }
        ?>
    </div>
</section>