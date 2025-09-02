
<section id="partnere">
    <h2 class="partnerTitle">Partnere</h2>
    <div class="logoLine">
        <?php
        $images = get_field('partner_logo_img'); // 'partner_logo_img' is your ACF Gallery field name

        if ($images) : ?>
            
            <div class="logoSlide">
                <?php foreach ($images as $image) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endforeach; ?>
            </div>
            
            <div class="logoSlide">
                <?php foreach ($images as $image) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endforeach; ?>
            </div>
            
        <?php endif; ?>
    </div>
</section>