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

    <label for="bopæl">Bopæl:</label><br>
    <input type="bopæl" id="bopæl" name="bopæl"><br><br>


    
    <input type="submit" value="Submit">
</form>
<?php get_footer() ?>