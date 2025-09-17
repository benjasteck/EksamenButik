<?php get_header(); ?>
<?php 
    $ForsideHeaderTitel = get_field("subpageheader_titel");
    
    ?>
<style>
#header {
    height: 66vh;
}
.button-wrapper{
    display: none;
}
.main-container{
    height: 85vh;
}
</style>
<?php
            $image1 = get_field("sus_billed_1");
            $image2 = get_field("sus_billed_2");
            $image3 = get_field("sus_billede_stor");
            $image4 = get_field("polytech_background");
            $image5 = get_field("polytech_interview_img");
            $image6 = get_field("os_img");
            $image7 = get_field("os_img_icon1");
            $image8 = get_field("os_img_icon2");
            $image9 = get_field("os_img_icon3");
            ?>


<h2 class="SusSubHeader">At sikre bæredygtige produktionsformer</h2>
<div class="susVideo"><iframe width="1400px" height="100%" src="https://www.youtube.com/embed/2ojNg2RZmWw?si=mAJOIb7i8Oa1yaAu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
<div class="mal1Tekst">
    <div class="mal1Venstre">
        <h3 class="mal1VenstreTitel">Hvad er verdensmål nr 12</h3>
        <div class="gradientLinje"></div>
        <p class="mal1VenstreTekst">Verdensmål nummer 12 handler om ansvarligt forbrug og produktion. Det fokuserer på at reducere affald, mindske overforbrug og sikre, at ressourcer bruges effektivt og bæredygtigt. Målet er at ændre den måde, vi producerer og forbruger varer på, så vi beskytter miljøet og sikrer en bedre fremtid for kommende generationer. Det kræver handling fra både regeringer, virksomheder og borgere. Ved at vælge bæredygtige produkter og mindske spild kan vi alle bidrage til en mere ansvarlig og balanceret global udvikling.</p>
    </div>
<div class="mal1Hojre">
    <img src="<?php echo esc_url($image1["url"]); ?> " class="parralaxImg" alt="">
</div>
</div>
<div class="mal2Tekst">
    <div class="mal2Venstre">
    <img src="<?php echo esc_url($image2["url"]); ?>" class="parralaxImg" alt="">
    </div>
    <div class="mal2Hojre">
        <h3 class="mal1VenstreTitel">Et mål vi tager personligt</h3>
        <div class="gradientLinje"></div>
        <h4>En mulighed for at tage ansvar</h4>
        <p class="mal1VenstreTekst">Ansvarligt forbrug og produktion er mere end bare et mål – det er en nødvendighed for vores fælles fremtid. Hos os handler det om at tage ansvar i alle led af værdikæden ved at minimere affald, optimere ressourceforbruget og skabe bæredygtige løsninger, der holder i længden. Vi ser det som en mulighed for at gøre en reel forskel, både i vores virksomhed og i samfundet omkring os. Ved at prioritere bæredygtighed og reducere overforbrug, bidrager vi aktivt til en mere balanceret og miljøvenlig verden. Sammen kan vi skabe et grundlag for en fremtid, hvor ressourcerne bruges med omtanke – til gavn for både mennesker og planeten.</p>
    
    </div>
</div>

<section id="bigSusImg">
<h3 class="susBigTekst"><span>"Det handler ikke kun om lyd og musik.</span><br>Det handler om fællesskab."</h3>
</section>
<div class="mal3Tekst">
    <h3 class="mal1VenstreTitel2">Et fællesskab med bæredygtighed i kernen</h3>
    <div class="gradientLinje"></div>
    <p class="mal1VenstreTekst">Hos Waveform handler det ikke kun om at skabe lyd og stemning, men også om at tage ansvar for den verden, vi er en del af. Vi genbruger udstyr, tænker cirkulært og skaber nye muligheder ud af det, andre ser som affald. Sammen med vores fællesskab arbejder vi for at mindske overforbrug og inspirere til en mere ansvarlig tilgang til kreativ produktion. For os er bæredygtighed ikke en trend – det er en holdning. Og vi mener, at de bedste idéer opstår, når vi står sammen.</p>
</div>

<section id="polytech">
<div class="polytechWrapper">
    <div class="polytechWrapperLeft">
    <article class="content">
        <h3 class="polytechTitel">Polytech</h2>
        
        <div class="topic" id="topic1">
            <button onclick="toggleTopic('topic1')">Hvem er Polytech</button>
            <p>Polytech er en dansk virksomhed grundlagt i 1994 med hovedsæde i Bramming. De arbejder primært inden for vindenergi og udvikler avancerede tekniske løsninger til at beskytte og optimere vindmøllevinger. Deres arbejde inkluderer lynbeskyttelsessystemer, slidstærke belægninger og avancerede sensorer til overvågning af vingerne. Polytech lægger stor vægt på forskning og udvikling og har en stor del af medarbejderne tilknyttet netop dette område. Virksomheden kombinerer innovation med bæredygtighed og arbejder målrettet for at levere løsninger, der både er effektive, miljøvenlige og langtidsholdbare. Polytech bidrager dermed aktivt til den grønne omstilling og en mere bæredygtig energifremtid.</p>
        </div>
        <div class="gradientLinje2"></div>
        <div class="topic" id="topic2">
           <button onclick="toggleTopic('topic2')">Polytech & Verdensmål</button>
            <p>Polytechs innovationer støtter direkte flere af FNs verdensmål, især mål 7 (Ren energi til alle) og mål 12 (Klimaindsats). Ved at udvikle avancerede lynbeskyttelsessystemer, slidstærke belægninger og smarte sensorer til vindmøllevinger øger Polytech effektiviteten, sikkerheden og levetiden af vedvarende energiinfrastruktur. Dette bidrager til øget brug af ren energi, reducerer afhængigheden af fossile brændstoffer og sænker udledningen af drivhusgasser. Deres stærke fokus på forskning og bæredygtige løsninger understøtter også mål 9 (Industri, innovation og infrastruktur) ved at fremme modstandsdygtig og miljøvenlig teknologi. Gennem disse bestræbelser bidrager Polytech aktivt til den globale omstilling mod bæredygtige energisystemer og klimamål. Deres arbejde er et eksempel på integrationen af innovation og bæredygtighed og spiller en vigtig rolle i at støtte FNs vision om en grønnere fremtid.</p>
        </div>
        <div class="gradientLinje2"></div>
        <div class="topic" id="topic3">
            <button onclick="toggleTopic('topic3')">Interview</button>
            <p>Polytech er en dansk virksomhed grundlagt i 1994 med hovedsæde i Bramming. De arbejder primært inden for vindenergi og udvikler avancerede tekniske løsninger til at beskytte og optimere vindmøllevinger. Deres arbejde inkluderer lynbeskyttelsessystemer, slidstærke belægninger og avancerede sensorer til overvågning af vingerne. Polytech lægger stor vægt på forskning og udvikling og har en stor del af medarbejderne tilknyttet netop dette område. Virksomheden kombinerer innovation med bæredygtighed og arbejder målrettet for at levere løsninger, der både er effektive, miljøvenlige og langtidsholdbare. Polytech bidrager dermed aktivt til den grønne omstilling og en mere bæredygtig energifremtid.</p>
        </div>
        <div class="gradientLinje2"></div>
    </article>
    </div>
    <div class="polytechWrapperRight">
        <img src="<?php echo esc_url($image5["url"]); ?>" class="parralaxImg" alt="">
    </div>    
</div>
<div class="osWrapper">
    <div class="osWrapperLeft">
        <img src="<?php echo esc_url($image6["url"]); ?>" class="parralaxImg" alt="">
    </div>
    <div class="osWrapperRight">
        <h3 class="polytechTitel">Hvad gør vi</h3>
        <div class="tekstContent">
        <img src="<?php echo esc_url($image7["url"]); ?>" alt="">
        <p>Forskning og flere studier viser at konventionel medicin oprindeligt brugt til andre lidelser kan hjælpe med at sulte kræft og i sidste ende slå kræftceller ihjel.Forskning og flere studier viser at konventionel medicin</p>
        </div>
        <div class="tekstContent">
<img src="<?php echo esc_url($image8["url"]); ?>" alt="">
        <p>Forskning og flere studier viser at konventionel medicin oprindeligt brugt til andre lidelser kan hjælpe med at sulte kræft og i sidste ende slå kræftceller ihjel.Forskning og flere studier viser at konventionel medicin</p>
        </div>
        <div class="tekstContent">
<img src="<?php echo esc_url($image9["url"]); ?>" alt="">
        <p>Forskning og flere studier viser at konventionel medicin oprindeligt brugt til andre lidelser kan hjælpe med at sulte kræft og i sidste ende slå kræftceller ihjel.Forskning og flere studier viser at konventionel medicin</p>
        </div>
    </div>
</div>
</section>
<script>
  window.addEventListener('scroll', function() {
  const parallaxImages = document.querySelectorAll('.parralaxImg');
  const scrollPosition = window.pageYOffset;
  const parallaxSpeed = 0.3; // Adjust this value to change the scroll speed

  parallaxImages.forEach(image => {
    image.style.transform = `translateY(${scrollPosition * parallaxSpeed}px)`;
  });
});
</script>
<?php get_template_part( 'Sections/blogs' ); ?>
<script>
 function toggleTopic(id) {
  const topic = document.getElementById(id);
  const isExpanded = topic.classList.contains('expanded');

  document.querySelectorAll('.topic').forEach(el => el.classList.remove('expanded'));

  if (!isExpanded) {
    topic.classList.add('expanded');
   
  } 
}
</script>

<style>
#bigSusImg {
    background-image: url('<?php echo esc_url($image3["url"]); ?>');}
    #polytech {
    background-image: url('<?php echo esc_url($image4["url"]); ?>');}
</style>

<?php get_footer(); ?>
