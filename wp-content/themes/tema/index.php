<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<?php

?>

<?php get_template_part( 'sections/partnere' ); ?>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
