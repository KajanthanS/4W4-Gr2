<?php  ?>
<!-- /**
 * template part pour afficher la galerie dans la page d'accueil
 */ -->
 
 <article class="blocflex__galerie">
  
   <?php the_content(); ?>
    <?php the_field('couleur') ?>
    <p><?php the_field('message') ?></p>
    <p><?php the_field('style') ?></p>
 </article>

 