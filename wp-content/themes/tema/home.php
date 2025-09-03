<?php get_header() ?>

	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post() ?>
			<?php
			
			$title = get_the_title();
			$excerpt = get_the_excerpt();
			$categories = get_the_category();
			$tags = get_the_tags();
            $image = get_field("blogimg");
			?>
			

            <div class="blogContainer">
            <div class="blogContent">
                <div class="stickycontainer">
                    <div class="blogImg">
                        <div class="stickyImg2">
                            <img src="<?php echo esc_url($image["url"]); ?>" alt="">
                        </div>
                        
                </div>
            </div>
            <div class="blogText">
                <div class="blogTextContent">
                <div class="progressbar">
                    <div class="progressbarInner">

                    </div>
                </div>
                <h1 class="blogTitel"><?php echo esc_html($title); ?></h1>
                <div class="tagContainer">
                    <?php if($tags): ?>
									<?php foreach($tags as $tag): ?>
										<a href="<?php echo get_tag_link($tag->term_id); ?>" class="tag"><?php echo $tag->name; ?></a>
									<?php endforeach; ?>
								<?php endif; ?>
                </div>
                <h4 class="blogSnippet"><?php echo esc_html($excerpt); ?></h4>
                <div class="blogBtn">
                    <p>Læs Mere</p>
                </div>
                </div>
            </div>
            </div>
    </div>


		<?php endwhile; ?>
		
	<?php endif; ?>

<?php get_footer() ?>