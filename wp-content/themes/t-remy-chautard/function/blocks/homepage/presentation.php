<section class="swiper-slide kl-section-presentation">
    <div class="kl-container-fluid kl-max-w-540-mobile">
        <div class="kl-presentation-content">
            <?php if( get_field('titre_bloc_presentation_home') ): ?>
                <div class="kl-presentation-title mb-5 mb-md-3 pt-2 pt-md-0">
                    <h2 class="kl-title-section kl-text-100 mb-1 mb-md-2">
                        <?php the_field('titre_bloc_presentation_home') ?>
                    </h2>
                    <?php if( get_field('sous_titre_bloc_presentation_home') ): ?>
                        <h3 class="kl-text-40 kl-fw-extra-light mb-md-2 text-uppercase">
                            <?php the_field('sous_titre_bloc_presentation_home') ?>
                        </h3>
                    <?php endif ?>
                </div>
            <?php endif ?>
        
            <?php 
                $image = get_field('image_bloc_presentation_home');
                if( $image): 
                    $image_id = $image['ID'];
                    $image_alt = $image['alt']; 
            ?>
                <div class="kl-presentation-img">
                    <span class="kl-text-12"><?php the_field('legende_image_bloc_presentation_home') ?></span>
                    <?php echo wp_get_attachment_image($image_id, '', false, array ('class' => 'img-fluid', 'alt' => $image_alt)); ?>
                </div>
            <?php endif ?>

            <div class="kl-presentation-text">
                <?php if( get_field('description_bloc_presentation_home') ): ?>
                    <div class="kl-presentation-text-content kl-text-18 mb-4">
                        <?php the_field('description_bloc_presentation_home') ?>
                    </div>
                <?php endif ?>
                <?php 
                    $link = get_field('lien_bloc_presentation_home');
                    if( $link ) : 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                ?>
                    <div class="text-center text-md-start pt-2 pt-md-0">
                        <a class="kl-link-semi-bordered" href="<?php echo esc_url( $link_url ); ?>">
                            <?= $link_title; ?>
                        </a>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>