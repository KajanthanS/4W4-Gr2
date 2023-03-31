<?php
               $titre =  get_the_title(); 
               $sigle = substr($titre,0,7);
               $titre_long = substr($titre,7,-5);
               $duree = substr($titre, strpos($titre,'('));
               ?>
<article class="article__search">
               <div>   
                    <h4><a href="<?php the_permalink(); ?>"><?= $titre_long; ?></h4>
                    <p><?= $sigle; ?></p>
                    <p><?= $duree; ?></p>
                    <p>Enseignant: <?php the_field('enseignant') ?></p>
                    <p>Domaine: <?php the_field('domaine') ?></p>
               </div>         
               
               <div>
                <p><?= wp_trim_words(get_the_excerpt(),100) ?></p>
               </div>
               


</article>