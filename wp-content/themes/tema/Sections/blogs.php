
<?php
$blogBaggrund = get_field("blog_background");
?>

<section id="blogs">
      <div class="blogContainer" id="blogContainer">
    <?php
    $args = array(
        'post_type'      => 'forsideblog', // <-- Using your custom post type key
        'posts_per_page' => 5,
        'order'          => 'ASC',
    );
    $the_query = new WP_Query($args);
    ?>

    <?php if ($the_query->have_posts()): ?>
        <?php
        $post_counter = 1;
        $top_value = 10;
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post() ?>
            <?php
            $title = get_field("forsideblogtitel");
            $excerpt = get_field("forsideblogexcerp");
            $image = get_field("forsideblogbillede");
            $category = get_field("forsideblogkategori");
            $tag1 = get_field("tag1");
            $tag2 = get_field("tag2");
            $tag3 = get_field("tag3");
            
            $post_id = "post" . $post_counter;
            ?>
            
            <div class="blogContent" id="<?php echo esc_attr($post_id); ?>">
                <div class="stickycontainer">
                    <div class="blogImg" style="top: <?php echo esc_attr($top_value); ?>px;">
                        <div class="stickyImg2">
                            <img src="<?php echo esc_url($image["url"]); ?>" loading="lazy" alt="">
                        </div>
                    </div>
                </div>
                <div class="blogText">
                    <div class="blogTextContent">
                        <div class="progressbar">
                            <div class="progressbarInner"></div>
                        </div>
                        <h1 class="blogTitel"><?php echo esc_html($title); ?></h1>
                        <div class="tagContainer">
                            <?php if ($category): ?>
                                <span class="tag"><?php echo esc_html($category); ?></span>
                            <?php endif; ?>
                            <?php if ($tag1): ?>
                                <a href="<?php echo esc_url($tag1["url"]); ?>" class="tag"><?php echo esc_html($tag1["title"]); ?></a>
                            <?php endif; ?>
                            <?php if ($tag2): ?>
                                <a href="<?php echo esc_url($tag2["url"]); ?>" class="tag"><?php echo esc_html($tag2["title"]); ?></a>
                            <?php endif; ?>
                            <?php if ($tag3): ?>
                                <a href="<?php echo esc_url($tag3["url"]); ?>" class="tag"><?php echo esc_html($tag3["title"]); ?></a>
                            <?php endif; ?>
                        </div>
                        <h4 class="blogSnippet"><?php echo esc_html($excerpt); ?></h4>
                        <div class="blogBtn">
                            <a href="<?php echo esc_url($url); ?>">Læs Mere</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
            $post_counter++;
            $top_value += 10;
            ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <button onclick="smoothScroll(document.getElementById('blogContainer'))" class="upBtn">↑</button>
</div>
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
