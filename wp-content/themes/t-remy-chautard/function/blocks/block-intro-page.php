<div class="kl-max-w-none kl-max-w-md-535 kl-max-w-lg-684 kl-me-md-50 kl-me-xl-100 kl-mb-50 kl-mb-md-0 px-4 px-md-0 kl-mt-neg-xl-60">
    <div class="kl-title-archive mb-4 pb-3">
        <?php if( get_field('titre_h1_intro_page') ): ?>
            <div class="kl-text-100 kl-color-black-primary kl-ff-font-secondary kl-fw-regular px-sm-5 ps-md-0 pe-md-5">
                <?php the_field('titre_h1_intro_page') ?>
            </div>
        <?php endif ?>
    </div>
    <?php if( get_field('description_intro_page') ): ?>
        <div class="kl-text-18 kl-color-black-primary kl-fw-regular kl-text-xl-16 kl-mt-paragraph">
            <?php the_field('description_intro_page') ?>
        </div>
    <?php endif ?>
</div>