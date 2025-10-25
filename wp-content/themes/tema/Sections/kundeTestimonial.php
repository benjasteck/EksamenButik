<section id="kunde">
    <div class="testimonialContainer">
        <?php
            $args = array(
            'post_type'      => 'testimonial',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        );

        $testimonials = get_posts($args);
        if ($testimonials) {
            echo '<div class="kundeSlide">';
            foreach ($testimonials as $post) {
                setup_postdata($post);
                $Title = get_field('testimonialtitle');
                $Description = get_field('testimonialtekst');
                $Stars = get_field('testimonialscore');
                

                if ($Title && $Description && $Stars) {
                    echo '
            <div class="testimonial">
                <div class="testimonialContent">
                    <h2 class="testimonialName">' . esc_html($Title) . '</h2>
                    <p class="testimonialDesc">' . esc_html($Description) . '</p>
                    <div class="stjernebox">
                        <p>' . esc_html($Stars) . '</p>
                    </div>
                </div>
            </div>';
                }
            }
            echo '</div>';
            wp_reset_postdata();


            echo '<div class="kundeSlide">';
            foreach ($testimonials as $post) {
                setup_postdata($post);
                $Title = get_field('testimonialtitle');
                $Description = get_field('testimonialtekst');
                $Stars = get_field('testimonialscore');
                

                if ($Title && $Description && $Stars) {
                    echo '
            <div class="testimonial">
                <div class="testimonialContent">
                    <h2 class="testimonialName">' . esc_html($Title) . '</h2>
                    <p class="testimonialDesc">' . esc_html($Description) . '</p>
                    <div class="stjernebox">
                        <p>' . esc_html($Stars) . '</p>
                    </div>
                </div>
            </div>';
                }
            }
            echo '</div>';
            wp_reset_postdata();


        }
        ?>
    </div>
    <div class="testimonialBtnWrapper">
        <?php if ( is_user_logged_in() ): ?>
        <a class="testimonialBtn" id="openTestimonialModal" href="#"><?php pll_e("Skriv en testimonial"); ?></a>
        <?php else: ?>
        <a class="testimonialBtn"
            href="<?php echo wp_registration_url(); ?>"><?php pll_e("Skriv en testimonial"); ?></a>
        <?php endif; ?>
    </div>

</section>