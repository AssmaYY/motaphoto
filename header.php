<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Motaphoto</title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    
	<header id="masthead" class="site-header">
	
 <!-- Affiche le menu "Menu principal" enregistré au préalable -->

		<nav id="site-navigation" class="main-navigation">
		<a href="<?php echo home_url( '/' ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/photos/Logo.png" alt="Logo du site motaphoto">
            </a>  
            <?php 
            wp_nav_menu([
            'menu' => 'main', 
            'container' => false, 
            'class' => 'header_menu', // classe personnalisée
            ]);
        ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
