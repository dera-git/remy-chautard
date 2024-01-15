<?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'order'          => 'ASC'
    );

    $postslist = new Wp_Query($args)
?>

<section class="swiper-slide kl-section-img-article">
    <div class="kl-container-fluid kl-max-w-540-mobile">
        <div class="d-md-flex h-100 kl-article-wrapper kl-reset-scroll-wrapper">
            <div class="kl-img-full-article">
                <?php the_post_thumbnail( 'full', array('class' => 'img-fluid kl-img-cover') ) ?>
            </div>
            <div class="h-100 kl-content-title-article">
                <div>
                    <a href="<?php the_permalink(9); ?>" class="kl-link-semi-bordered kl-text-18 mb-4">Retour aux actualités</a>
                </div>
                <div class="mb-md-4">
                    <div class="kl-text-16 kl-color-black-primary kl-fw-regular mb-2 pb-1">
                        <span><?php echo get_the_date('d F Y', get_the_ID()) ?></span>
                    </div>
                    <div class="kl-text-16 kl-color-orange-primary kl-fw-regular text-uppercase d-inline-block kl-title-post mb-4">
                        <h4><?php the_title() ?></h4>
                    </div>
                    <div class="kl-text-40 text-uppercase kl-fw-medium">
                        <h1 class="kl-title-exerpt-article"><?php the_excerpt(); ?></h1>
                    </div>
                </div>
                <div>
                    <div class="kl-scroll">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="70.805" viewBox="0 0 29 70.805">
                            <g transform="translate(-353 -815.195)">
                                <g transform="translate(353 834)" fill="none" stroke="#ff581a" stroke-width="1">
                                    <rect width="29" height="52" rx="14.5" stroke="none"/>
                                    <rect x="0.5" y="0.5" width="28" height="51" rx="14" fill="none"/>
                                </g>
                                <g class="kl-scroll-arrow">
                                    <path d="M6.354,25.125c0-.271-.1-6.661-6.354-6.661V17.109a6.909,6.909,0,0,1,6.354,3.322V-9.679H7.707V20.41a6.835,6.835,0,0,1,6.281-3.3v1.354c-6.187,0-6.28,6.389-6.281,6.661H6.354Z" transform="translate(360.506 834.874)" fill="#ff581a"/>
                                </g>
                            </g>
                        </svg>
                        <span>Scroll</span>
                    </div>
                </div>
            </div>
            <?php if(get_the_content()) : ?>
                <div class="kl-wrapper-column-text">
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

