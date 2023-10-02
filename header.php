<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Lien bibliothèque font awesome -->
    <script src="https://kit.fontawesome.com/61f1f173b3.js" crossorigin="anonymous"></script>
    <title>Motaphoto</title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">

        <header id="masthead" class="site-header">

            <!-- Affiche le menu "Menu principal" déja enregistré  -->

            <nav id="site-navigation" class="main-navigation">
                <a href="<?php echo home_url('/'); ?>">
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
            <!-- Integration de mon template menu burger -->
            <?php get_template_part('/templates-parts/menu-burger'); ?>
            <!-- Affichage de l'image du header -->
            <?php if (is_front_page()) : ?>

                <div class="img-text-header">
                    <img class="text-header" src="<?php echo get_template_directory_uri(); ?>/assets/photos/Titre-header.png" alt="Titre du header">
                    <?php
                    $images = array("nathalie-0.jpeg", "nathalie-1.jpeg", "nathalie-2.jpeg", "nathalie-3.jpeg", "nathalie-4.jpeg", "nathalie-5.jpeg", "nathalie-6.jpeg", "nathalie-7.jpeg", "nathalie-8.jpeg", "nathalie-9.jpeg", "nathalie-10.jpeg", "nathalie-11.jpeg", "nathalie-12.jpeg", "nathalie-13.jpeg", "nathalie-14.jpeg", "nathalie-15.jpeg");
                    $key = array_rand($images);
                    echo '<img class="background-header" src="' . get_template_directory_uri() . '/assets/photos/' . $images[$key] . '"> '; ?>

                </div>
            <?php endif; ?>

        </header>

        <?php wp_body_open(); ?>