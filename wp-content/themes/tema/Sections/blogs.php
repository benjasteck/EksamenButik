
<?php
$blogBaggrund = get_field("blog_background");
?>

<section id="blogs">
    <?php get_template_part( '/home' ); ?>
    <h1 class="blogBottomTitle">Vi klarer alt det praktiske og tekniske</h1>
    <h4 class="BlogBottomSubTitle">Forskning og flere studier viser at konventionel medicin oprindeligt brugt til andre lidelser kan hjælpe med at sulte kræft og i sidste ende slå kræftceller ihjel.</h4>
    <div class="blogBottomBtn">
        <p>BOOK TID</p>
    </div>
    <style>
#blogs {
    background-image: url('<?php echo esc_url($blogBaggrund["url"]); ?>');}
</style>
</section>
