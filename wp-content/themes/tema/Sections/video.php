<?php
$videoBaggrund = get_field("video_background");

?>

<section id="video">
<div class="vidContent">
<h2 class="vidTitle">Video</h2>
<div class="ytContainer">
   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/3dxEL18FYRM?si=Qz2POKjifcvCPZTM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
<a href="">Se Mere</a>
</div>
</section>

<section id="fester">
<div class="festercontainer">
    <div class="festcontent1">
        <h2 class="festnummer">3476</h2>
        <p class="festBeskrivelse">Privatfester siden 1725</p>
        <div class="festLine"></div>
    </div>
    <div class="festcontent2">
        <h2 class="festnummer">4235</h2>
        <p class="festBeskrivelse">Privatfester siden 1725</p>
        <div class="festLine"></div>
    </div>
    <div class="festcontent3">
        <h2 class="festnummer">4679</h2>
        <p class="festBeskrivelse">Privatfester siden 1725</p>
        <div class="festLine"></div>
    </div>
    <div class="festcontent4">
        <h2 class="festnummer">5372</h2>
        <p class="festBeskrivelse">Privatfester siden 1725</p>
        <div class="festLine"></div>
    </div>
</div>
<style>
#video {
    background-image: url('<?php echo esc_url($videoBaggrund["url"]); ?>');}
</style>
</section>