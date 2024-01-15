<?php
/*
Template Name: Evenement sportif
*/
get_header();

$args = array(
    'post_type'      => 'evenement_sportif',
    'posts_per_page' => 4,
    'orderby'        => 'date',
    'order'          => 'DESC'
);

global $post;

$event_list = new Wp_Query($args) ?>
    <?php the_content() ?>
    <section class="swiper-slide">
        <div class="kl-container-fluid h-100 px-md-0">
            <div class="d-flex flex-column flex-md-row align-items-center h-100">
                <div class="d-block d-md-flex flex-column flex-md-row align-items-stretch h-100">
                    <?php if( $event_list->have_posts() ): ?>
                        <?php while( $event_list->have_posts() ): $event_list->the_post() ?>
                            <?php
                                $title_color_report = get_field('couleur_titre_reportage');
                                $color_title = "";
                                if($title_color_report == 'white' ) {
                                    $color_title = "kl-color-white";
                                }else{
                                    $color_title = "kl-color-black-primary";
                                }
                            ?>
                            <a href="<?php the_permalink(); ?>" class="kl-card-modele">
                                <div class="kl-card-img-modele">
                                    <?php if (get_post_thumbnail_id()): ?>
                                        <?php the_post_thumbnail( 'thumbnails-report-ent', array('class' => 'img-fluid') ) ?>
                                    <?php else: ?>
                                        <span class="kl-img-empty"></span>
                                   <?php endif; ?>
                                </div>
                                <div class="kl-title-absolute <?= $color_title ?>">
                                    <div class="kl-text-40 kl-fw-medium text-uppercase kl-letter-spacing-05 mb-1">
                                        <h3><?php the_title() ?></h3>
                                    </div>
                                    <div class="kl-text-16 kl-fw-regular kl-letter-spacing-05 px-3">
                                        <?php if( get_field('ville_reportage_entreprise') ): ?>
                                            <span><?php the_field('ville_reportage_entreprise') ?></span>
                                        <?php endif ?>
                                        <?php if( get_field('annee_reportage_entreprise') ): ?>
                                            <span class="d-inline-block mx-1">—</span>
                                            <span><?php the_field('annee_reportage_entreprise') ?></span>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile ?>
                    <?php endif ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ?>