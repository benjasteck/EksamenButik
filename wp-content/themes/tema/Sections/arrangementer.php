<?php
$bryllupfest = get_field("arrangement_img1");
$firmafest = get_field("arrangement_img2");
$konfirmationfest = get_field("arrangement_img3");
$gymnasiefest = get_field("arrangement_img4");
$efterskolefest = get_field("arrangement_img5");
$ungdomfest = get_field("arrangement_img6");
$bornefest = get_field("arrangement_img7");
$fodselsdagfest = get_field("arrangement_img8");
$byfest = get_field("arrangement_img9");
?>


<section id="arrangementer">
    <div class="sticky-container">
        <h2 class="arrangementerTitle">Arrangementer</h2>
    <div class="image-group">
        <div class="stickyImg">
            <img src='<?php echo esc_url($bryllupfest["url"]); ?>' alt="">
            <h3>Bryllup Fest</h3>
            <div class="arrBtn">
                <p>Se Mere</p>
            </div>
        </div>
        <div class="stickyImg">
            <img src='<?php echo esc_url($firmafest["url"]); ?>' alt="">
            <h3>Firma Fest</h3>
            <div class="arrBtn">
                <p>Se Mere</p>
            </div>
        </div>
        <div class="stickyImg">
            <img src='<?php echo esc_url($konfirmationfest["url"]); ?>' alt="">
            <h3>Konfirmation Fest</h3>
            <div class="arrBtn">
                <p>Se Mere</p>
            </div>
        </div> 
    </div>
    <div class="image-group" id="image-group2">
        <div class="stickyImg">
           <img src='<?php echo esc_url($gymnasiefest["url"]); ?>' alt=""> 
           <h3>Gymnasie Fest</h3>
            <div class="arrBtn">
                <p>Se Mere</p>
            </div>
        </div>
        <div class="stickyImg">
           <img src='<?php echo esc_url($efterskolefest["url"]); ?>' alt=""> 
           <h3>Efterskole Fest</h3>
            <div class="arrBtn">
                <p>Se Mere</p>
            </div>
        </div>
        <div class="stickyImg">
           <img src='<?php echo esc_url($ungdomfest["url"]); ?>' alt=""> 
           <h3>Ungdoms Fest</h3>
            <div class="arrBtn">
                <p>Se Mere</p>
            </div>
        </div>
    </div>
    <div class="image-group" id="image-group3">
        <div class="stickyImg">
            <img src='<?php echo esc_url($bornefest["url"]); ?>' alt="">
            <h3>Børne Disco</h3>
            <div class="arrBtn">
                <p>Se Mere</p>
            </div>
        </div>
        <div class="stickyImg">
            <img src="'<?php echo esc_url($fodselsdagfest["url"]); ?>' alt="">
            <h3>fødselsdagfest</h3>
            <div class="arrBtn">
                <p>Se Mere</p>
            </div>
        </div>
        <div class="stickyImg">
            <img src='<?php echo esc_url($byfest["url"]); ?>' alt="">
            <h3>Byfest</h3>
            <div class="arrBtn">
                <p>Se Mere</p>
            </div>
        </div>
    </div>
</div>
</section>