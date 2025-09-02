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
?>


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
  <h1 class="main-heading">B O O K &nbsp; &nbsp; T H E  &nbsp; &nbsp; B E A T</h1>
  <p class="subtext">Alt til fest, et sted</p>
  <p class="description">Alt til fest, ét sted. Fra pumpende bas og lys, der fylder rummet, til DJs, der kender præcis hvilke tracks der får dansegulvet til at eksplodere. Om du bare mangler højtalere, eller vil have hele pakken med DJ, lyd og lys. Din fest, dit vibe, vi leverer resten.</p>
  <div class="button-wrapper">
    <button class="heroBtn1">Fest Typer</button>
    <button class="heroBtn2">Book Tid</button>
  </div>
</div>
</div>
</div>


</body>
<style>
header {
    background-image: url('<?php echo esc_url($HeaderImage["url"]); ?>');}
</style>
 <?php endwhile; ?>
<?php endif; ?>