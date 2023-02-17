<?php  
/**
* Modèle par défaut
* 
*/
?>
<?php get_header(); ?>
<main>
   <section class="blocflex">
<?php 
    if (have_posts()): 
        while(have_posts()): the_post(); ?>
        <article>
            <h2>
            <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
            </h2> 
        

            <!-- Affiche le contenu complet de l'article -->
            <?php //the_content() ?>
            
            <!-- Affiche un résumé de l'article -->
            <?php //the_excerpt() ?>
            <p><?= wp_trim_words(get_the_excerpt(), 10, " ➤") ?></p>
            
            <hr>
        </article>
       
       <?php endwhile;
        endif;
    ?>
    </section>
</main>

<?php get_footer(); ?>