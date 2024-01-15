<?php 
    /* 
    Template Name: Archive
    */
    get_header();

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC'
      );
      
    $postslist = new Wp_Query($args)
?>

<section class="swiper-slide">
    <div class="container-fluid h-100 px-md-0">
        <div class="d-flex flex-column flex-md-row align-items-center h-100 kl-ps-md-50 kl-ps-xl-115">
            <div class="kl-title-archive kl-max-w-md-300 kl-max-w-xxl-418">
                <div class="kl-text-100 kl-color-black-primary kl-ff-font-secondary kl-fw-regular">
                    <?php the_content() ?>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row align-items-stretch kl-list-post">
                <?php $i = 1; if( $postslist->have_posts() ): ?>
                    <?php while( $postslist->have_posts() ): $postslist->the_post() ?>
                        <?php 
                            $class_block = $i > 3 ? 'kl-animate-block' : '';
                            $dnone = $i > 3 ? 'none' : '' 
                        ?>
                        <div class="kl-card-post <?= $class_block ?>" style="display:<?= $dnone ?>">
                            <div class="mb-4 pb-1">
                                <?php the_post_thumbnail( 'post-image', array('class' => 'img-fluid kl-img-post') ) ?>
                            </div>
                            <div class="kl-text-16 kl-color-black-primary kl-fw-regular mb-2 pb-1">
                                <span><?php echo get_the_date('d F Y', get_the_ID()) ?></span>
                            </div>
                            <div data-mh="title-post" class="kl-text-16 kl-color-orange-primary kl-fw-regular text-uppercase kl-title-post kl-pe-lg-60 kl-mb-10">
                                <h4><?php the_title() ?></h4>
                            </div>
                            <div class="kl-text-20 kl-color-black-primary kl-fw-medium kl-pe-lg-60 kl-letter-spacing-05 kl-excerpt-post">
                                <?php the_excerpt() ?>
                            </div>
                            <div class="text-end kl-mt-10">
                                <a href="<?php the_permalink() ?>" class="kl-read-link">Lire</a>
                            </div>
                        </div>
                        <?php $i++ ?>
                    <?php endwhile ?>
                <?php endif ?>
                <?php wp_reset_postdata(); ?>
                <div class="kl-block-btn-plus js-load-more-post">
                    <button type="button" class="kl-btn-plus">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20.431" height="20.431" viewBox="0 0 20.431 20.431">
                            <path id="Tracé_5" data-name="Tracé 5" d="M6.354,20.431V0H7.707V20.41S7.386,20.431,6.354,20.431Z" transform="translate(0 17.246) rotate(-90)" fill="#ff581a"/>
                            <path id="Tracé_5-2" data-name="Tracé 5" d="M6.354,20.431V0H7.707V20.41S7.386,20.431,6.354,20.431Z" transform="translate(3.186)" fill="#ff581a"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>