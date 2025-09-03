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

    <label for="sporgsmal-1">Hvis du skulle booke en DJ, hvilken begivenhed skulle det være til?:</label><br>
    <input type="sporgsmal-1" id="hvis_du_skulle_booke_en_dj" name="sporgsmal-1"><br><br>
    
    <label for="sporgsmal-2">Hvilket firma tænker du på, hvis du fik at vide at du skulle booke en DJ?:</label><br> <input type="sporgsmal-2" id="sporgsmal-2" name="sporgsmal-2"><br><br>

    <label for="sporgsmal-3">Har du før skulle booke en DJ, og i så fald var det nemt og overskueligt?:</label><br>
    <input type="sporgsmal-3" id="sporgsmal-3" name="sporgsmal-3"><br><br>

    <label for="sporgsmal-4">Hvis du før har booket en DJ, hvilket firma var det så?:</label><br>
    <input type="sporgsmal-4" id="sporgsmal-4" name="sporgsmal-4"><br><br>

    



    
    <input type="submit" value="Submit">
</form>
<?php get_footer() ?>