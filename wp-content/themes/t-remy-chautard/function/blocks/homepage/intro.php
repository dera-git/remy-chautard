<section class="swiper-slide kl-section-intro-home">
    <div class="kl-container-fluid kl-max-w-540-mobile">
        <?php 
            $logo = get_field('logo_bloc_intro_home');
            if( $logo): 
                $logo_id = $logo['ID'];
                $logo_alt = $logo['alt']; 
        ?>
            <div class="kl-intro-home-logo">
                <?php echo wp_get_attachment_image($logo_id, '', false, array ('class' => 'img-fluid', 'alt' => $logo_alt)); ?>
            </div>
        <?php endif ?>
        <?php if( have_rows('categorie_intro_home') ): ?>
            <div class="kl-intro-home-list">
                <?php 
                    while( have_rows('categorie_intro_home') ): the_row(); 
                ?>
                    <div class="kl-intro-home-item">
                        <?php 
                            $image = get_sub_field('image_categorie_intro_home');
                            $link = get_sub_field('lien_categorie_intro_home');
                            if( $image && $link ): 
                                $image_id = $image['ID'];
                                $image_alt = $image['alt'];
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                        ?>
                            <a class="text-decoration-none d-block h-100" href="<?php echo esc_url( $link_url ); ?>">
                                <?php echo wp_get_attachment_image($image_id, '', false, array ('class' => 'kl-img-cover', 'alt' => $image_alt)); ?>
                                <h5 class="kl-intro-home-item-title"><?= $link_title ?></h5>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif ?>
    </div>
</section>