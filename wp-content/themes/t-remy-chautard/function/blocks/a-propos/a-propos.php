<section class="swiper-slide kl-section-presentation kl-section-about">
    <div class="kl-container-fluid kl-max-w-540-mobile">
        <div class="kl-presentation-content">
            <?php if( get_field('titre_bloc_a_propos') ): ?>
                <div class="kl-presentation-title mb-5 mb-md-3 pt-2 pt-md-0">
                    <div class="kl-title-section kl-text-100 pb-xxl-2 mb-3 mb-md-4">
                        <?php the_field('titre_bloc_a_propos') ?>
                    </div>
                    <?php if( get_field('description_courte_a_propos') ): ?>
                        <div class="kl-text-18 px-3 px-md-0">
                            <?php the_field('description_courte_a_propos') ?>
                        </div>
                    <?php endif ?>
                </div>
            <?php endif ?>

            <div class="kl-presentation-wrapper-img-text">
                <?php 
                    $image = get_field('image_bloc_a_propos');
                    if( $image): 
                        $image_id = $image['ID'];
                        $image_alt = $image['alt']; 
                ?>
                    <div class="kl-presentation-img">
                        <?php echo wp_get_attachment_image($image_id, '', false, array ('class' => 'img-fluid', 'alt' => $image_alt)); ?>
                        <div class="kl-presentation-img-infos">
                            <span class="kl-text-12 d-none d-md-block"><?php the_field('legende_image_bloc_a_propos') ?></span>
                            <?php 
                                $link = get_field('lien_bloc_a_propos');
                                if( $link ) : 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                            ?>
                                <a class="kl-link-semi-bordered" href="<?php echo esc_url( $link_url ); ?>"><?= $link_title; ?></a>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endif ?>

                <?php if( get_field('description_bloc_a_propos') ): ?>
                    <div class="kl-presentation-text pb-md-5">
                        <div class="kl-presentation-text-content kl-text-18 mb-2">
                            <?php the_field('description_bloc_a_propos') ?>
                        </div>
                    </div>
                <?php endif ?>
            </div>            
        </div>
    </div>
</section>