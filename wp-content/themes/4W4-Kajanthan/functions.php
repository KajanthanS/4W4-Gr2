<?php 


function ajouter_styles() {
        wp_enqueue_style( 'style-principale', // Identifiant du link css
         get_template_directory_uri() . '/css/style.css', // Endroit où se trouve le fichier style.css
         array(), // Les fichiers css qui dépendent de style.css
         fileatime(get_template_directory() . "/style.css"), // version de notre style.css
        );
}
        add_action( 'wp_enqueue_scripts', 'ajouter_styles' );


// Enregistrement des menus

    function enregistrement_nav_menu(){
        register_nav_menus( array(
            'principal' => 'Menu principal',
            'footer'  => 'Menu pied de page',
        ) );
    }
    add_action( 'after_setup_theme', 'enregistrement_nav_menu', 0 );


?>