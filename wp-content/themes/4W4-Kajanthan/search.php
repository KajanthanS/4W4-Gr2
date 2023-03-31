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
            the_title("<h4>","</h4>");
            // the_content(); ?>
           <?=  wp_trim_words(get_the_excerpt(),50,"[...]") ?>
            <hr>    
       <?php endwhile;
    endif;
?>

</main>

<?php get_footer(); ?>