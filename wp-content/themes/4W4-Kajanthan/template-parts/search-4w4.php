 <?php
        $titre =  get_the_title(); 
        if(substr($titre,0,1) == "0"){
        $titre = substr($titre,1);
        }
?>
<article >
<h3></h3>
        <?php 
        $la_categorie = "Notes-4w4";
        if(in_category("cours")){
            $la_categorie = "cours";
        }wp_nav_menu(array(
            "menu" => $la_categorie,
            "container" => "nav"
        )); ?>
               
</article>