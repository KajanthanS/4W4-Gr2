<?php  
/**
* Modèle par défaut
* 
*/
?>
<?php get_header(); ?>
<main>
    <section class="blocflex1">
        <?php wp_nav_menu(array(
            "menu" => "evenementmenu",
            "container" => "nav"

        )) ?>

        <?php wp_nav_menu(array(
                    "menu" => "bloc_archive",
                    "container" => "nav"

        )) ?>
    </sectiont>
   <section class="blocflex">
<?php 
    if (have_posts()): 
        while(have_posts()): the_post(); ?>
        <?php 
            $la_categorie = "4w4";
            if(in_category("galerie")){
                $la_categorie = "galerie";
        }
       get_template_part('template-parts/categorie',$la_categorie); ?>
       
       
       <?php endwhile;
        endif;
    ?>
    </section>
    <?php get_template_part("template-parts/aside2"); ?>
</main>
<?php get_footer(); ?>