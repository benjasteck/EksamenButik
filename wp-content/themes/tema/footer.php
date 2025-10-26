<?php

?>
<footer>
    <div class="footerContainerTop">
        <div class="topContainerLeft">
            <div class="linkContainer">
                <ul>
                    <li><a href="/">Hjem</a></li>
                    <li><a href="#arrangementer">Arrangement</a></li>
                    <li><a href="/shop">Shop</a></li>
                    <li><a href="/product-category/udlejning/">Udlejning</a></li>
                    <li><a href="/om-os">Om Os</a></li>
                </ul>
            </div>
            <h2>Bliv &nbsp;en &nbsp;del &nbsp;af &nbsp;nyhedsbrevet</h2>
            <form method="post">
                <input type="email" name="Email" placeholder="Din Email">
                <button type="submit" value=" ">
                    <span class="emailKnap">🡪</span>
                </button>
            </form>
        </div>
        <div class="topContainerRight">
            <address>
                <p class="addressTitle">esbjerg</p>
                <p>Brolæggervej 17</p>
                <p>6710 Esbjerg</p>
                <p>(+45)11223344</p>
                <p>random@email.dk</p>
            </address>
            <ul class="languagePicker"><?php pll_the_languages(array("show_flags" => true)) ?></ul>
        </div>
    </div>
    <div class="footerContainerBottom">
    </div>
</footer>
<?php  wp_footer();  ?>
</body>

</html>