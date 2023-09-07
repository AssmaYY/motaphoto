<?php get_header(); ?>

<div class="items item">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="galerie-single-post">
                <!-- info de la photo -->
                <div class="infos">
                    <h1><?php the_title(); ?></h1>
                    <p><?php echo get_field_object('réference')['label'];?> : 
                    <span class="ref-contact"><?php the_field('réference');?></span></p>
                    <p><?php echo get_field_object('catégories')['label']; ?> :
                    <?php the_field('categorie'); ?></p>
                    <p><?php echo get_field_object('formats')['label']; ?> :
                    <?php the_field('format'); ?></p>
                    <p><?php echo get_field_object('type')['label']; ?> :
                    <?php the_field('type'); ?></p>
                    
                </div>
                <!-- Div contenant la photo -->
                <div class="img-post">
                    <!-- Div contenant mon image -->
                    <div class="single-similaire">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    
                </div>
            </article>
            <!-- bouton contact et next/prev -->
            <div class="info-next-prev">
                <div class="info-compl">
                    <p>Cette photo vous intéresse ?</p>
                    <button class="btn btn-contact">Contact</button>
                </div>
                <div class="nextandprev">
    <!-- Div contenant les deux flèches -->
    <div class="arrows">
        <?php
        // Récupère le post précédent et le post suivant
        $prevPost = get_previous_post();
        $nextPost = get_next_post();
        ?>

        <!-- Si un post précédent existe -->
        <?php if (!empty($prevPost)) {
            // Récupère l'URL de l'image mise en avant du post précédent
            $prevThumbnail = get_the_post_thumbnail_url( $prevPost->ID );
            // Récupère le lien vers le post précédent
            $prevLink = get_permalink($prevPost);
            ?>
            <!-- Div contenant flèche de gauche -->
            <div class="prev">
                <a href="<?php echo $prevLink; ?>">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>

        <!-- Si aucun post précédent n'existe -->
        <?php } else { ?>
            <!-- Affiche une flèche gauche -->
            <i class="fas fa-arrow-left"></i>
        <?php } ?>

        <!-- Si un post suivant existe -->
        <?php if (!empty($nextPost)) {
            // Récupère l'URL de l'image mise en avant du post suivant
            $nextThumbnail = get_the_post_thumbnail_url( $nextPost->ID );
            // Récupère le lien vers le post suivant
            $nextLink = get_permalink($nextPost);
            ?>
            <!-- Div contenant ma flèche de droite -->
            <div class="next">
                <a href="<?php echo $nextLink; ?>">
                    <!-- Affiche une flèche droite -->
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        <?php } ?>

    </div>

    <!-- Affiche l'image précédente en miniature -->
    <div class="img-arrow">
        <img class="image-prev" src="<?php echo $prevThumbnail; ?>" alt="Prévisualisation image précédente">
    </div>

    <!-- Affiche l'image suivante en miniature -->
    <div class="img-arrow">
        <img class="image-next" src="<?php echo $nextThumbnail; ?>" alt="Prévisualisation image suivante">
    </div>

</div>
            </div>
            <!-- Div contenant les photos similaires -->
            <div class="info-similaire">
                <p>Vous aimerez aussi</p>
                <div class="img-article-similaire">
                    <?php 
                    // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
                    $args = array(
                    'post_type' => 'any',
                    'meta_key' => 'catégories',
                    'meta_value' => get_field('catégories'), 
                    'posts_per_page' => 2,
                    'paged' => 1,
                    'post__not_in'   => array( get_the_ID() ),
                    );

                    // 2. On exécute la WP Query
                    $my_query = new WP_Query( $args );

                    // 3. On lance la boucle !
                    if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>

                        <div class="single-post">
                            <!-- Div contenant mon image -->
                            <div class="single-similaire">
                                <a class="" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            </div>
                          
                        </div>

                    <?php endwhile;
                    endif;

                    // 4. réinitialisation à la requête principale 
                    wp_reset_postdata(); ?>
                </div>
                
                <div class="plus-photo">
                    <a href="<?php echo home_url( '#' ); ?>"><button class="btn btn-photo">Toutes les photos</button></a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>