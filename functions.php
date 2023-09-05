<?php 

// Liaisons de fichiers CSS et JS

function motaphoto_scripts()
{
  // css
  wp_enqueue_style('motaphoto_scripts', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');

  // Déclarer jQuery
  wp_enqueue_script('jquery' );
    
  // Déclarer le JS
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/JS/script.js', array( 'jquery' ), '1.0', true);

}
add_action('wp_enqueue_scripts', 'motaphoto_scripts');

// aJOUT DU MENU PRINCIPAL//
function register_menus() {
  register_nav_menu( 'main-menu', __( 'Menu principal', 'text-domain' ) );
  register_nav_menu( 'footer', __( 'Pied de page', 'text-domain' ) );
}
add_action( 'after_setup_theme', 'register_menus' );