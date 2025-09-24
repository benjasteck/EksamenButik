<!doctype html>
<html lang="en"<?php language_attributes();?>>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Waveform: Mobildiskotek & DJ til Fester med Lyd og Lys</title>
    <link rel="icon" href="<?php echo esc_url($logoImage["url"]); ?>" type="image/png">

    <meta name="description" content="Vi leverer det ultimative mobildiskotek og professionelle DJ-services. Få fuld pakke med musik, lyd og lys til alle typer af fester."
    >
    <meta name="author" content="Benjamin Steckmetz, Anders Jørgensen, Jeppe Westergaard">
    <meta name="robots" content="index, follow">
    <!--FACEBOOK(meta)-->
    <meta property="og:title" content="WaveForm">
    <meta property="og:description" 
    content="Vi leverer det ultimative mobildiskotek og professionelle DJ-services. Få fuld pakke med musik, lyd og lys til alle typer af fester. Bestil nu.">

    <meta property="og:image" content="<?php echo esc_url($logoImage["url"]); ?>">
    <meta property="og:url" content="http://collaborating.local/">
    <!--tWITTER-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Waveform">
    <meta name="twitter:description" 
    content="Vi leverer det ultimative mobildiskotek og professionelle DJ-services. Få fuld pakke med musik, lyd og lys til alle typer af fester. Bestil nu.">

    <meta name="twitter:image" content="<?php echo esc_url($logoImage["url"]); ?>">
    <meta name="google-site-verification" content="wGobuLv3lLfWEThGrDh12OOBFQ8OWAw5casnk8qYf-0" />

    <link rel="apple-touch-icon" href="<?php echo esc_url($logoImage["url"]); ?>">

        
        

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">
<title><?php bloginfo("name"); ?></title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <?php wp_head(); ?>
</head>


<body <?php body_class() ?>>
 


<?php
$HeaderImage = get_field("subpage_header_img");
$ForsideHeaderTitel = get_field("subpageheader_titel");
$ForsideHeaderTitelStor = get_field("subpageheader_titel_stor");
$ForsideHeaderUndertitel = get_field("forside_header_undertitel");
$ForsideHeaderTekst = get_field("forside_header_tekst");
$HeaderPhoneMenu = get_field("phonemenuimg");
?>

<?php 
$link = get_field('forside_header_sort_knap');
$link2 = get_field('forside_header_farvet_knap');

// Tjek om feltet indeholder data, før du fortsætter
if( $link ): 
    // Uddrag URL, titel og target fra array'et
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    endif; 

    if( $link2 ): 
        // Uddrag URL, titel og target fra array'et
        $link2_url = $link2['url'];
        $link2_title = $link2['title'];
        $link2_target = $link2['target'] ? $link2['target'] : '_self';
        
    
?>
    
<?php endif; ?>
<a href="#main" class="skip-link">Skip to main content</a>
<header id="header">
<div class="container">
<nav aria-label="Main menu">
   <div class="navLeft">
    <div class="logo">
        <img src="" alt="">
    </div>
   </div> 
   <div class="navMid">
        <ul>
            <li><a href="#main" class="navBtn selected">Hjem</a></li>
            <li><a href="/arrangement" class="navBtn">Arrangement</a></li>
            <li><a href="/djs" class="navBtn">DJs</a></li>
            <li><a href="/udlejning" class="navBtn">Udlejning</a></li>
            <li><a href="/om-os" class="navBtn">Om Os</a></li>
        </ul>
   </div>
   <div class="navRight">
    <div class="CTABtn1">
        <a>Book Nu</a>
    </div>
    <div class="extendBtn">
        <button>
            <img src="<?php echo esc_url($HeaderPhoneMenu["url"]); ?>" alt="hamburbur knap / telefon navigation menu">
        </button>
    </div>
   </div>
</nav>

</div>
<div class="main-container">
<div class="main-content-wrapper">
  <h1 class="main-heading small"><?php echo($ForsideHeaderTitel);?></h1>
  <h1 class="main-heading large"><?php echo($ForsideHeaderTitelStor);?></h1>
  <style>
.main-heading.large { display: none; }
@media screen and (min-width: 1001px) {
  .main-heading.small { display: none; }
  .main-heading.large { display: block; }
}
</style>
  <h2 class="subtext"><?php echo($ForsideHeaderUndertitel);?></h2>
  <h3 class="description"><?php echo($ForsideHeaderTekst);?></h3>
  <div class="button-wrapper">
    <div class="btnwrap">
     <a class="heroBtn1"href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>   
    </div>
    
    <a class="heroBtn2"href="<?php echo esc_url( $link2_url ); ?>" target="<?php echo esc_attr( $link2_target ); ?>"><?php echo esc_html( $link2_title ); ?></a>
  </div>
</div>
</div>
</header>

<style>
#header {
    background-image: url('<?php echo esc_url($HeaderImage["url"]); ?>');}
</style>
</body>
