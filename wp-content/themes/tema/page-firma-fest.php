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
    echo render_products_by_tag( 'FirmaFest' ); 
    ?>
</div>
</div>
</div>
</div>
<?php get_template_part( 'Sections/blogs' ); ?>
<script>

</script>
<?php get_footer() ?>