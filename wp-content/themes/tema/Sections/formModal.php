<div class="modalBody" id="testimonialModal">
    <div class="mainModal">
        <div class="modalContentHolder">
            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                <input type="hidden" name="action" value="testimonial_form" placeholder="Navn: ">
                <?php wp_nonce_field( 'simple_form_nonce_action', 'simple_form_nonce_field' ); ?>

                <label for="testimonialtitle" id="testimonialtitle">Navn:</label><br>
                <input type="text" id="navn" name="testimonialtitle"><br>

                <label for="testimonialtekst" id="testimonialtekst">Besked:</label><br>
                <textArea type="textArea" id="besked" name="testimonialtekst"></textArea><br><br>

                <p>
                    <label for="testimonialscore" id="testimonialscore">Rating:</label>
                <div class="emoji-stars">
                    <div class="emoji-stars">
                        <input type="radio" id="star5" name="testimonialscore" value="★★★★★" />
                        <label for="star5">★</label>

                        <input type="radio" id="star4" name="testimonialscore" value="★★★★☆" />
                        <label for="star4">★</label>

                        <input type="radio" id="star3" name="testimonialscore" value="★★★☆☆" />
                        <label for="star3">★</label>

                        <input type="radio" id="star2" name="testimonialscore" value="★★☆☆☆" />
                        <label for="star2">★</label>

                        <input type="radio" id="star1" name="testimonialscore" value="★☆☆☆☆" required />
                        <label for="star1">★</label>
                    </div>
                </div>
                </p>
                <div class="inputWrapper">
                    <?php if ( is_user_logged_in() ): ?>
                    <input type="submit" value="Submit" id="testimonialInput">
                    <?php else: ?>
                    <a class="subBtn" href="<?php echo wp_registration_url(); ?>">Submit</a>
                    <?php endif; ?>

                    <input type="button" value="Cancel" id="testimonialInputCancel">
                </div>

            </form>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const cancelButton = document.getElementById('testimonialInputCancel');
    const modal = document.getElementById('testimonialModal');

    // Define the duration of the CSS transition (must match the CSS: 0.3s = 300ms)
    const fadeDuration = 300;

    if (cancelButton && modal) {
        cancelButton.addEventListener('click', function() {
            modal.classList.remove('fade-in');
            // Step 1: Start the animation by adding the CSS class
            modal.classList.add('fade-out');

            // Step 2 & 3: Wait for the animation to finish, then hide the element completely
            setTimeout(() => {
                modal.style.display = 'none';

                // (Optional cleanup: remove the class just in case the modal is shown again)
                modal.classList.remove('fade-out');
            }, fadeDuration);

        });
    }
});
</script>