
<section id="partnere">
    <h2 class="partnerTitle">Partnere</h2>
    <div class="logoLine">
        <?php
        $args = array(
            'post_type'      => 'partner',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        );

        $partner_logos = get_posts($args);

        if ($partner_logos) {
            // First logoSlide div
            echo '<div class="logoSlide">';
            foreach ($partner_logos as $post) {
                setup_postdata($post);
                // Correct field name here
                $logo = get_field('partner_logo_img'); 
                if ($logo) {
                    echo '<img src="' . esc_url($logo['url']) . '" alt="' . esc_attr($logo['alt']) . '" />';
                }
            }
            echo '</div>';
            wp_reset_postdata();

            // Second logoSlide div
            echo '<div class="logoSlide">';
            foreach ($partner_logos as $post) {
                setup_postdata($post);
                // Correct field name here
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