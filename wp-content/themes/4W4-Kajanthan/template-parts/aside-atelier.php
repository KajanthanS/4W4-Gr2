<aside class="site__aside">
        <h3>Nos ateliers en 2023</h3>
        <?php 
        $la_categorie = "Notes-4w4";
        if(in_category("cours")){
            $la_categorie = "cours";
        }
        wp_nav_menu(array(
            "menu" => $la_categorie,
            "container" => "nav"
        )); ?>
</aside>