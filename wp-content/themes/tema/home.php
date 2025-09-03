<?php get_header() ?>
	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post() ?>
			<?php
			$url = get_the_permalink();
			$title = get_the_title();
			$date = get_the_date();
			$author = get_the_author();
			$excerpt = get_the_excerpt();
			$categories = get_the_category();
			$tags = get_the_tags();
			?>
			

            <div class="blogContainer">
            <div class="blogContent">
                <div class="stickycontainer">
                    <div class="blogImg">
                        <div class="stickyImg2">
                            <img src="images/blogImg1.jpg" alt="">
                        </div>
                        <div class="stickyImg2">
                             <img src="images/blogImg2.jpg" alt="">       
                        </div>
                        <div class="stickyImg2">
                            <img src="images/blogImg3.jpg" alt="">
                        </div>
                        <div class="stickyImg2">
                             <img src="images/blogImg4.jpg" alt="">   
                        </div>
                </div>
            </div>
            <div class="blogText">
                <div class="blogTextContent">
                <div class="progressbar">
                    <div class="progressbarInner">

                    </div>
                </div>
                <h1 class="blogTitel">Lej DJ hos Waveform</h1>
                <div class="tagContainer">
                    <div class="tag"><p>#DJ</p></div>
                    <div class="tag"><p>#Leje</p></div>
                    <div class="tag"><p>#DinMor</p></div>
                </div>
                <h4 class="blogSnippet">Forskning og flere studier viser at konventionel medicin oprindeligt brugt til andre lidelser kan hjælpe med at sulte kræft og i sidste ende slå kræftceller ihjel.</h4>
                <div class="blogBtn">
                    <p>Læs Mere</p>
                </div>
                </div>
            </div>
            </div>
    </div>


		<?php endwhile; ?>
		<?php echo paginate_links() ?>
	<?php endif; ?>
<?php get_footer() ?>