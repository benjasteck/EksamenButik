<?php get_header() ?>
    <div class="blogContainer">
	<?php if(have_posts()): ?>
        <?php
        $post_counter = 1; 
        $top_value = 10;
        ?>
		<?php while(have_posts()): the_post() ?>
			<?php
			$url = get_the_permalink();
			$title = get_the_title();
			$excerpt = get_the_excerpt();
			$categories = get_the_category();
			$tags = get_the_tags();
            $image = get_field("blogimg");
            $post_id = "post" . $post_counter;
            
			?>
			

            
            <div class="blogContent"  id="<?php echo esc_attr($post_id); ?>">
                <div class="stickycontainer">
                    <div class="blogImg"  style="top: <?php echo esc_attr($top_value); ?>px;">
                        <div class="stickyImg2" >
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
		
	<?php endif; ?>
</div>
<?php get_footer() ?>