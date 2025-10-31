<?php get_header() ?>
<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
    <input type="hidden" name="action" value="process_simple_form_submission">

    <?php wp_nonce_field( 'simple_form_nonce_action', 'simple_form_nonce_field' ); ?>

    <label for="fornavn">Fornavn:</label><br>
    <input type="text" id="fornavn" name="fornavn"><br><br>

    <label for="efternavn">Efternavn:</label><br>
    <input type="text" id="efternavn" name="efternavn"><br><br>

    <label for="alder">Alder:</label><br>
    <input type="alder" id="alder" name="alder"><br><br>

    <label for="bopael">Bopæl:</label><br>
    <input type="bopael" id="bopael" name="bopael"><br><br>

    <label for="sporgsmal1">Hvis du skulle booke en DJ, hvilken begivenhed skulle det være til?:</label><br>
    <input type="sporgsmal1" id="hvis_du_skulle_booke_en_dj" name="sporgsmal1"><br><br>

    <label for="sporgsmal2">Hvilket firma tænker du på, hvis du fik at vide at du skulle booke en DJ?:</label><br>
    <input type="sporgsmal2" id="sporgsmal2" name="sporgsmal2"><br><br>

    <label for="sporgsmal3">Har du før skulle booke en DJ, og i så fald var det nemt og overskueligt?:</label><br>
    <input type="sporgsmal3" id="sporgsmal3" name="sporgsmal3"><br><br>

    <label for="sporgsmal4">Hvis du før har booket en DJ, hvilket firma var det så?:</label><br>
    <input type="sporgsmal4" id="sporgsmal4" name="sporgsmal4"><br><br>






    <input type="submit" value="Submit">
</form>
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
<?php get_footer() ?>