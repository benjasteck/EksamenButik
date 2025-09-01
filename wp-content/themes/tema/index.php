<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<?php

?>

<?php get_template_part( 'Sections/partnere' ); ?>
<?php get_template_part( 'Sections/arrangementer' ); ?>
<?php get_template_part( 'Sections/video' ); ?>
<?php get_template_part( 'Sections/kundeTestimonial' ); ?>
<?php get_template_part( 'Sections/formsInput' ); ?>
<?php get_template_part( 'Sections/blogs' ); ?>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
