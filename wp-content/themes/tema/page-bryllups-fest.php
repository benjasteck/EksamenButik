<?php get_header(); ?>
<?php 
    $ForsideHeaderTitel = get_field("subpageheader_titel");
    
    ?>
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
<?php
            $image1 = get_field("product_image_1");
            $image2 = get_field("product_image_2");
            $image3 = get_field("product_image_3");     
            ?>

<h2 class="main-heading N2">BRYLLUPSFEST</h2>
<div class="productImgLine">
    <img src="<?php echo esc_url($image1["url"]); ?> " alt="" class="active">
    <img src="<?php echo esc_url($image2["url"]); ?> " alt="">
    <img src="<?php echo esc_url($image3["url"]); ?> " alt="">
</div>
<div class="headerSlider">
    <div id="slider">
        <input type="radio" name="slider" id="slide1" checked>
        <input type="radio" name="slider" id="slide2">
        <input type="radio" name="slider" id="slide3">
        <div id="slides">
            <div id="overflow">
                <div class="inner">
                    <div class="slide slide_1">
                        <div class="slide-content">
                            <div class="image2" aria-label="Person collecting plastic waste in a polluted environment">
                                <h2>Plastic Pollution in the Congo</h2>
                                <p>Plastic pollution harms communities and ecosystems in the Congo. Locals are taking
                                    action and fighting back, in hopes to change for a cleaner future.</p>
                                <a href="article.html" class="btn2" alt="Link to article">See more</a>
                            </div>


                        </div>
                    </div>
                    <div class="slide slide_2">
                        <div class="slide-content">
                            <div class="image2" id="image2"
                                aria-label="Diver surrounded by plastic waste and plastic bags in deep ocean waters">
                                <h2>Our Oceans Are Drowning in Plastic <br>Microplastics fill the ocean</h2>
                                <p>Every year, tons of plastic end up in our oceans threatening marine life and
                                    ecosystems. Together, we can take action and change for our oceans for future
                                    generations.</p>
                                <a href="article.html" class="btn2" alt="Link to article">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide slide_3">
                        <div class="slide-content">
                            <div class="image2" id="image3"
                                aria-label="Rivers in the slums covered in trash and plastic">
                                <h2>Plastic pollution Floods the Slums <br>straight into the ocean</h2>
                                <p>In the slums plastic pollution covers entire rivers. Without proper waste management,
                                    plastic continues to pile up, trapping these areas in a cycle of contamination and
                                    poverty.</p>
                                <a href="article.html" class="btn2" alt="Link to article">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="bullets">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
        </div>
    </div>
</div>
</div>
</div>
</div>