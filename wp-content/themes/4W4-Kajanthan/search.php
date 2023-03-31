<?php  
/**
* Modèle par défaut
* 
*/
?>
<?php get_header(); ?>

<?php 
$nouvelle_classe = "";
if(is_search())(
    $nouvelle_classe = "no-aside"
)
?>


<main class="site <?php echo (is_search()?'no-aside':'');?>">

    <h3>Résultats de la recherche</h3>
<?php 
    if (have_posts()): 
        while(have_posts()): the_post();
            get_template_part("template-parts/search-cours"); 
            // the_content(); ?>
           
            <hr>    
       <?php endwhile;
    endif;
?>

</main>

<?php get_footer(); ?>