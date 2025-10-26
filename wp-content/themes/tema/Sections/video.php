<?php
$videoBaggrund = get_field("video_background");
$FestType1Titel = get_field("festtype1_titel");
$FestType1Undertitel = get_field("festtype1_undertitel");
$FestType2Titel = get_field("festtype2_titel");
$FestType2Undertitel = get_field("festtype2_undertitel");
$FestType3Titel = get_field("festtype3_titel");
$FestType3Undertitel = get_field("festtype3_undertitel");
$FestType4Titel = get_field("festtype4_titel");
$FestType4Undertitel = get_field("festtype4_undertitel");
$VideoTitel = get_field("video_titel");



?>

<section id="video">
    <div class="vidContent">
        <div class="vidTitle"></div>
        <div class="ytContainer hidden">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/3dxEL18FYRM?si=Qz2POKjifcvCPZTM"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <a href=""><?php pll_e("Se Mere"); ?></a>
    </div>
</section>

<section id="fester">
    <div class="festercontainer">
        <div class="festcontent1">
            <h2 class="festnummer count-up-target" data-countup><?php echo($FestType1Titel); ?></h2>
            <p class="festBeskrivelse"> <?php echo($FestType1Undertitel);?></p>
            <div class="festLine"></div>
        </div>
        <div class="festcontent2">
            <h2 class="festnummer count-up-target" data-countup><?php echo($FestType2Titel); ?></h2>
            <p class="festBeskrivelse"> <?php echo($FestType2Undertitel);?></p>
            <div class="festLine"></div>
        </div>
        <div class="festcontent3">
            <h2 class="festnummer count-up-target" data-countup><?php echo($FestType3Titel); ?></h2>
            <p class="festBeskrivelse"> <?php echo($FestType3Undertitel);?></p>
            <div class="festLine"></div>
        </div>
        <div class="festcontent4">
            <h2 class="festnummer count-up-target" data-countup><?php echo($FestType4Titel); ?></h2>
            <p class="festBeskrivelse"> <?php echo($FestType4Undertitel);?></p>
            <div class="festLine"></div>
        </div>
    </div>

    <script>
    const countUpObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;

                if (!target.classList.contains('counted')) {
                    makeCountup(target);
                    target.classList.add('counted');
                    observer.unobserve(target);
                }
            }
        });
    }, {
        rootMargin: '0px 0px -100px 0px',
        threshold: 0.1
    });

    function countup(el, target) {
        let data = {
            count: 0
        };
        anime({
            targets: data,
            count: [0, target],
            duration: 3000,
            round: 1,
            delay: 200,
            easing: 'easeOutCubic',
            update() {
                el.innerText = data.count.toLocaleString();
            }
        });
    }

    function makeCountup(el) {
        const text = el.textContent;
        const target = parseInt(text, 10);

        const io = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.intersectionRatio > 0) {
                    countup(el, target);
                    io.unobserve(entry.target);
                }
            });
        });

        io.observe(el);
    }

    const els = document.querySelectorAll('[data-countup]');

    els.forEach(makeCountup);
    </script>
    <style>
    #video {
        background-image: url('<?php echo esc_url($videoBaggrund["url"]); ?>');
    }
    </style>
</section>