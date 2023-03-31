<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <?php wp_head(); ?>
</head>
<?php 
$nouvelle_classe = "";
if(is_front_page())(
    $nouvelle_classe = "no-aside"
)
?>

<body class="site <?php echo (is_front_page()?'no-aside':'');?>">
<!-- <body class="site <?= $nouvelle_classe; ?> -->
   <header class="site__header">
    <section class="site__header__logo">
         <?php the_custom_logo()?> 
        <div class="menu__recherche">
            <input type="checkbox" id="check-menu">
            <?php wp_nav_menu(array(
                "menu" => "entete",
                "container" => "nav"
                )) ?>
            
            <?php get_search_form() ?>
            <label class="icon-burger" for="check-menu"><img src="https://s2.svgbox.net/hero-solid.svg?ic=menu&color=fff0f0" width="32" height="32"></label>
            
        </div>
    </section>
    <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
    <h2><?= bloginfo('description') ?></h2>
   </header>
   <?php 
    if (!is_search() && !is_front_page()) {
    get_template_part("template-parts/aside"); 
    } 
    ?>
    
    




