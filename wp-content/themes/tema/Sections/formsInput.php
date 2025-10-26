<?php
$tilbud_form_titel = get_field("tilbud_form_titel");
$tilbud_form_undertitel = get_field("tilbud_form_undertitel");
$tilbud_form_tekst1 = get_field("tilbud_form_tekst1");
$tilbud_form_tekst2 = get_field("tilbud_form_tekst2");
$tilbud_form_tekst3 = get_field("tilbud_form_tekst3");
$form_label1 = get_field("form_label1");
$form_label2 = get_field("form_label2");
$form_label3 = get_field("form_label3");
$form_label4 = get_field("form_label4");
$form_label5 = get_field("form_label5");
$form_label6 = get_field("form_label6");
?>

<section id="booking">
    <div class="bookingContent">
        <div class="bookingLeft">
            <h1 class="bookingTitle"><?php echo($tilbud_form_titel); ?></h1>
            <div class="bookingSubTitle"><?php echo($tilbud_form_undertitel); ?></div>
            <div class="bookingLine"></div>
            <div class="bookingText">
                <div class="bookingText1">
                    <div class="bookingTextLeft">
                        <h1>1</h1>
                    </div>
                    <div class="bookingTextRight">
                        <div><?php echo($tilbud_form_tekst1); ?></div>
                    </div>
                </div>
                <div class="bookingText2">
                    <div class="bookingTextLeft">
                        <h1>2</h1>
                    </div>
                    <div class="bookingTextRight">
                        <div><?php echo($tilbud_form_tekst2); ?></div>
                    </div>
                </div>
                <div class="bookingText3">
                    <div class="bookingTextLeft">
                        <h1>3</h1>
                    </div>
                    <div class="bookingTextRight">
                        <h2><?php echo($tilbud_form_tekst3); ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="bookingRight">
            <div class="formularContainer">
                <div class="inputContainer">
                    <label for="name"><?php echo($form_label1); ?></label>
                    <input type="text" id="name" class="nameInput" placeholder="<?php echo pll__('Skriv Dit Navn'); ?>">
                </div>

                <div class="inputContainer">
                    <label for="email"><?php echo($form_label2); ?></label>
                    <input type="text" id="email" class="nameInput"
                        placeholder="<?php echo pll__('Skriv Din Email'); ?>">
                </div>

                <div class="inputContainer">
                    <label for="tlf"><?php echo($form_label3); ?></label>
                    <input type="text" id="tlf" class="nameInput"
                        placeholder="<?php echo pll__('Skriv Dit Telefon Nummer'); ?>">
                </div>

                <div class="twoinputsContainer">
                    <div class="inputRight">
                        <div class="inputContainer" id="shortInput1">
                            <label for="date"><?php echo($form_label4); ?></label>
                            <input type="text" id="date" class="shortInput"
                                placeholder="<?php echo pll__('Skriv Dato For Fest'); ?>">
                        </div>
                    </div>
                    <div class="inputLeft">
                        <div class="inputContainer" id="shortInput2">
                            <label for="gest"><?php echo($form_label5); ?></label>
                            <input type="text" id="gest" class="shortInput"
                                placeholder="<?php echo pll__('Skriv Antal Gæster'); ?>">
                        </div>
                    </div>
                </div>
                <div class="inputContainer" id="inputStor">
                    <label for="besk">Beskrivelse</label>
                    <input type="text" id="besk" class="bigInput"
                        placeholder="<?php echo pll__('Beskriv fest, spilletid samt ekstra tanker'); ?>">
                </div>
                <div class="inputBtn">
                    <a href=""><?php echo pll__('Send forespørgsel'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>