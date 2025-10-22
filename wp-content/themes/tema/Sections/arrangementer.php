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
$bryllupfesttekst = get_field("arrangement_titel1");
$firmafesttekst = get_field("arrangement_titel2");
$konfirmationfesttekst = get_field("arrangement_titel3");
$gymnasiefesttekst = get_field("arrangement_titel4");
$efterskolefesttekst = get_field("arrangement_titel5");
$ungdomfesttekst = get_field("arrangement_titel6");
$bornefesttekst = get_field("arrangement_titel7");
$fodselsdagfesttekst = get_field("arrangement_titel8");
$byfesttekst = get_field("arrangement_titel9");
?>


<section id="arrangementer">
    <div class="sticky-container">
        <h2 class="arrangementerTitle" aria-label="en liste af de typer af arrangementer vi har">Arrangementer</h2>
        <div class="image-group">
            <div class="stickyImg">
                <img src='<?php echo esc_url($bryllupfest["url"]); ?>' loading="lazy"
                    alt="<?php echo $bryllupfest ["alt"]?>">
                <h3><?php echo($bryllupfesttekst); ?></h3>
                <div class="arrBtn">
                    <p>Se Mere</p>
                </div>
            </div>
            <div class="stickyImg">
                <img src='<?php echo esc_url($firmafest["url"]); ?>' loading="lazy"
                    alt="<?php echo $firmafest ["alt"]?>">
                <h3><?php echo($firmafesttekst); ?></h3>
                <div class="arrBtn">
                    <p>Se Mere</p>
                </div>
            </div>
            <div class="stickyImg">
                <img src='<?php echo esc_url($konfirmationfest["url"]); ?>' loading="lazy"
                    alt="<?php echo $konfirmationsfest ["alt"]?>">
                <h3><?php echo($konfirmationfesttekst); ?></h3>
                <div class="arrBtn">
                    <p>Se Mere</p>
                </div>
            </div>
        </div>
        <div class="image-group" id="image-group2">
            <div class="stickyImg">
                <img src='<?php echo esc_url($gymnasiefest["url"]); ?>' loading="lazy"
                    alt="<?php echo $gymnasiefest ["alt"]?>">
                <h3><?php echo($gymnasiefesttekst); ?></h3>
                <div class="arrBtn">
                    <p>Se Mere</p>
                </div>
            </div>
            <div class="stickyImg">
                <img src='<?php echo esc_url($efterskolefest["url"]); ?>' loading="lazy"
                    alt="<?php echo $efterskolefest ["alt"]?>">
                <h3><?php echo($efterskolefesttekst); ?></h3>
                <div class="arrBtn">
                    <p>Se Mere</p>
                </div>
            </div>
            <div class="stickyImg">
                <img src='<?php echo esc_url($ungdomfest["url"]); ?>' loading="lazy"
                    alt="<?php echo $ungdomfest ["alt"]?>">
                <h3><?php echo($ungdomfesttekst); ?></h3>
                <div class="arrBtn">
                    <p>Se Mere</p>
                </div>
            </div>
        </div>
        <div class="image-group" id="image-group3">
            <div class="stickyImg">
                <img src='<?php echo esc_url($bornefest["url"]); ?>' loading="lazy"
                    alt="<?php echo $bornefest ["alt"]?>">
                <h3><?php echo($bornefesttekst); ?></h3>
                <div class="arrBtn">
                    <p>Se Mere</p>
                </div>
            </div>
            <div class="stickyImg">
                <img src='<?php echo esc_url($fodselsdagfest["url"]); ?>' loading="lazy"
                    alt="<?php echo $fodselsdagfest ["alt"]?>">
                <h3><?php echo($fodselsdagfesttekst); ?></h3>
                <div class="arrBtn">
                    <p>Se Mere</p>
                </div>
            </div>
            <div class="stickyImg">
                <img src='<?php echo esc_url($byfest["url"]); ?>' loading="lazy" alt="<?php echo $byfest ["alt"]?>">
                <h3><?php echo($byfesttekst); ?></h3>
                <div class="arrBtn">
                    <p>Se Mere</p>
                </div>
            </div>
        </div>
    </div>
</section>