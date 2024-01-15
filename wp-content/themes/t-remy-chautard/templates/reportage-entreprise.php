<?php 
    /* 
    Template Name: Reportage Entreprise
    */
    get_header();

    $args = array(
        'post_type'      => 'reportage_entreprise',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC'
      );
      
    $reportlist = new Wp_Query($args)
?>

<section class="swiper-slide">
    <div class="container-fluid h-100 px-md-0">
        <div class="d-flex flex-column flex-md-row align-items-center h-100 kl-ps-md-50 kl-ps-xl-120">
            <?php the_content() ?>
            <div class="d-block d-md-flex flex-column flex-md-row align-items-stretch kl-list-cpt">
                <?php if( $reportlist->have_posts() ): ?>
                    <?php while( $reportlist->have_posts() ): $reportlist->the_post() ?>
                        <a href="<?php the_permalink() ?>" class="kl-card-modele" >
                            <div class="kl-card-img-modele">
                                <?php the_post_thumbnail( 'thumbnails-report-ent', array('class' => 'img-fluid') ) ?>
                            </div>
                            <div class="kl-title-absolute">
                                <div class="kl-text-40 kl-color-white kl-fw-medium text-uppercase kl-letter-spacing-05 mb-1">
                                    <h3><?php the_title() ?></h3>
                                </div>
                                <div class="kl-text-16 kl-color-white kl-fw-regular kl-letter-spacing-05 px-3">
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