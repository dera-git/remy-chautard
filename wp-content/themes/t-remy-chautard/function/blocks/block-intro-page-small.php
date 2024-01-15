<section class="swiper-slide kl-ps-xl-120 kl-ps-md-50 kl-section-intro-page-small">
    <div class="kl-container-fluid kl-max-w-540-mobile h-100 px-md-0">
        <div class="kl-max-w-md-490 kl-me-md-50 kl-me-xl-120">
            <div class="px-4 px-md-0">
                <div class="mb-4 pb-3">
                    <?php if( get_field('titre_h1_intro_page') ): ?>
                        <div class="kl-text-100 kl-color-black-primary kl-ff-font-secondary kl-fw-regular">
                            <?php the_field('titre_h1_intro_page') ?>
                        </div>
                    <?php endif ?>
                </div>
                <?php if( get_field('description_intro_page') ): ?>
                    <div class="kl-text-18 kl-max-w-lg-390 kl-color-black-primary kl-fw-regular kl-text-xl-16 kl-mt-paragraph">
                        <?php the_field('description_intro_page') ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>
