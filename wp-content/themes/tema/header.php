<!doctype html>
<html lang="en" <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">
<title><?php bloginfo("name"); ?></title>
        <?php wp_head(); ?>
</head>


<body <?php body_class() ?>>
    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>


<?php
$HeaderImage = get_field("forside_header_billede");
$ForsideHeaderTitel = get_field("forside_header_titel");
$ForsideHeaderUndertitel = get_field("forside_header_undertitel");
$ForsideHeaderTekst = get_field("forside_header_tekst");
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

<div id="header">
<div class="container">
<nav>
   <div class="navLeft">
    <div class="logo">
        <img src="images/logo.png" alt="">
    </div>
   </div> 
   <div class="navMid">
    <div class="navBtn selected">
        <p>Hjem</p>
    </div>
    <div class="navBtn">
        <p>Arrangement</p>
    </div>
    <div class="navBtn">
        <p>DJs</p>
    </div>
    <div class="navBtn">
        <p>Udlejning</p>
    </div>
    <div class="navBtn">
        <p>Om Os</p>
    </div>
   </div>
   <div class="navRight">
    <div class="CTABtn1">
        <p>Book Nu</p>
    </div>
   </div>
</nav>

</div>
<div class="main-container">
<div class="main-content-wrapper">
  <h1 class="main-heading"><?php echo($ForsideHeaderTitel);?></h1>
  <p class="subtext"><?php echo($ForsideHeaderUndertitel);?></p>
  <p class="description"><?php echo($ForsideHeaderTekst);?></p>
  <div class="button-wrapper">
    <a class="heroBtn1"href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <a class="heroBtn2"href="<?php echo esc_url( $link2_url ); ?>" target="<?php echo esc_attr( $link2_target ); ?>"><?php echo esc_html( $link2_title ); ?></a>
  </div>
</div>
</div>
</div>

<style>
#header {
    background-image: url('<?php echo esc_url($HeaderImage["url"]); ?>');}
</style>
</body>

 <?php endwhile; ?>
<?php endif; ?>