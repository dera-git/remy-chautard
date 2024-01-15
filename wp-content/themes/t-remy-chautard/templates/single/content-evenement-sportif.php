<?php
    $page_id = get_the_ID();
    $page_data = get_page($page_id); 
    $content = $page_data->post_content; 
?>

<section class="swiper-slide kl-ps-xl-120 kl-ps-md-50 kl-section-intro-page-small">
    <div class="kl-container-fluid flex-md-column align-items-md-start kl-max-w-540-mobile h-100 px-md-0">
        <div class="px-4 px-md-0 mb-5 mb-md-0">
            <a href="<?php the_permalink(19); ?>" class="kl-link-semi-bordered kl-text-18">REVENIR À LA GALERIE</a>
        </div>
        <div class="kl-max-w-md-490 kl-me-md-50 kl-me-xl-120 my-md-auto">
            <div class="px-4 px-md-0">
                <div class="mb-4 pb-3">
                    <div class="kl-text-100 kl-color-black-primary kl-ff-font-secondary kl-fw-regular">
                        <?php the_title() ?>
                    </div>
                </div>
                <div class="kl-text-18 kl-max-w-lg-390 kl-color-black-primary kl-fw-regular kl-text-xl-16 kl-mt-paragraph">
                    <?php echo $content ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="swiper-slide">
    <div class="container-fluid h-100 px-md-0">
        <div class="d-flex flex-column flex-md-row align-items-center h-100 kl-content-img-single">
            <?php the_content() ?>
        </div>
    </div>
</section>