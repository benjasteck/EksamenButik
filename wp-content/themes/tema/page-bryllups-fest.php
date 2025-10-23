<?php get_header(); ?>
<?php $ForsideHeaderTitel = get_field("subpageheader_titel");  ?>

<style>
#header {
    height: 66vh;
}

.button-wrapper {
    display: none;
}

.main-container {
    height: 85vh;
}
</style>

<div class="product-listing-area">
    <?php 
    // Option 1: Call the reusable function directly, specifying the tag slug
    // We are calling render_products_by_tag() and echoing its output.
    echo render_products_by_tag( 'BryllupFest' ); 
    ?>
</div>
</div>
</div>
</div>
<?php get_template_part( 'Sections/blogs' ); ?>
<script>

</script>
<?php get_footer() ?>