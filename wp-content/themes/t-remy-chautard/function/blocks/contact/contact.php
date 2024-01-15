<section class="swiper-slide kl-section-contact">
    <div class="kl-container-fluid kl-max-w-540-mobile">
        <div class="kl-contact-content kl-color-white">
            <div class="kl-contact-content-left">
                <?php if( get_field('titre_bloc_contact') ): ?>
                    <div class="kl-contact-title">
                        <div class="kl-title-section kl-text-100 pb-2">
                            <?php the_field('titre_bloc_contact') ?>
                        </div>
                    </div>
                <?php endif ?>
                <ul class="kl-contact-links list-unstyled kl-text-18">
                    <?php if (get_field('email_contact', 'options')) : ?>
                        <li>
                            <a href="mailto:<?php the_field('email_contact', 'options') ?>"><?php the_field('email_contact', 'options') ?></a>
                        </li>
                    <?php endif ?>
                    <?php if (get_field('telephone_contact', 'options')) : ?>
                        <li>
                            <a href="tel:<?php the_field('telephone_contact', 'options') ?>"><?php the_field('telephone_contact', 'options') ?></a>
                        </li>
                    <?php endif ?>
                    <?php if (get_field('adresse_contact', 'options')) : ?>
                        <li>
                            <address><?php the_field('adresse_contact', 'options') ?></address>
                        </li>
                    <?php endif ?>
                </ul>
                <ul class="kl-social-list d-none d-md-flex mb-0">
                    <?php if (get_field('instagram_url', 'options')) : ?>
                        <li>
                            <a href="<?php the_field('instagram_url', 'options') ?>" target="_blank">
                                <svg id="Icon_awesome-instagram" data-name="Icon awesome-instagram" xmlns="http://www.w3.org/2000/svg" width="18.265" height="18.261" viewBox="0 0 18.265 18.261">
                                    <path id="Icon_awesome-instagram-2" data-name="Icon awesome-instagram" d="M9.129,6.686a4.682,4.682,0,1,0,4.682,4.682A4.674,4.674,0,0,0,9.129,6.686Zm0,7.726a3.044,3.044,0,1,1,3.044-3.044A3.049,3.049,0,0,1,9.129,14.412Zm5.965-7.917A1.092,1.092,0,1,1,14,5.4,1.089,1.089,0,0,1,15.094,6.495ZM18.2,7.6A5.4,5.4,0,0,0,16.72,3.777,5.44,5.44,0,0,0,12.894,2.3c-1.508-.086-6.026-.086-7.534,0A5.432,5.432,0,0,0,1.534,3.773,5.422,5.422,0,0,0,.059,7.6c-.086,1.508-.086,6.026,0,7.534a5.4,5.4,0,0,0,1.475,3.826A5.447,5.447,0,0,0,5.36,20.434c1.508.086,6.026.086,7.534,0a5.4,5.4,0,0,0,3.826-1.475A5.44,5.44,0,0,0,18.2,15.133c.086-1.508.086-6.022,0-7.53Zm-1.948,9.148a3.082,3.082,0,0,1-1.736,1.736c-1.2.477-4.054.367-5.383.367s-4.185.106-5.383-.367a3.082,3.082,0,0,1-1.736-1.736c-.477-1.2-.367-4.054-.367-5.383s-.106-4.185.367-5.383A3.082,3.082,0,0,1,3.746,4.25c1.2-.477,4.054-.367,5.383-.367s4.185-.106,5.383.367a3.082,3.082,0,0,1,1.736,1.736c.477,1.2.367,4.054.367,5.383S16.724,15.553,16.248,16.751Z" transform="translate(0.005 -2.238)" fill="#fff"/>
                                </svg>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (get_field('linkedin_url', 'options')) : ?>
                        <li>
                            <a href="<?php the_field('linkedin_url', 'options') ?>" target="_blank">
                                <svg id="Icon_awesome-linkedin" data-name="Icon awesome-linkedin" xmlns="http://www.w3.org/2000/svg" width="18.261" height="18.261" viewBox="0 0 18.261 18.261">
                                    <path id="Icon_awesome-linkedin-2" data-name="Icon awesome-linkedin" d="M16.956,2.25H1.3A1.31,1.31,0,0,0,0,3.567V19.194a1.31,1.31,0,0,0,1.3,1.317H16.956a1.313,1.313,0,0,0,1.3-1.317V3.567A1.313,1.313,0,0,0,16.956,2.25ZM5.519,17.9H2.812V9.187H5.523V17.9ZM4.166,8A1.569,1.569,0,1,1,5.735,6.428,1.57,1.57,0,0,1,4.166,8Zm11.5,9.9H12.958V13.663c0-1.011-.02-2.311-1.406-2.311-1.41,0-1.626,1.1-1.626,2.238V17.9H7.219V9.187h2.6v1.19h.037a2.851,2.851,0,0,1,2.564-1.406c2.739,0,3.249,1.806,3.249,4.153Z" transform="translate(0 -2.25)" fill="#fff"/>
                                </svg>
                            </a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
            <?php 
                $formContact = do_shortcode('[contact-form-7 id="94" title="Contact"]');
                if ($formContact) :
            ?>
                <div class="kl-contact-content-right">
                    <?php echo $formContact ?>
                </div>
            <?php endif; ?>
        </div>
        <?php 
            $image = get_field('image_bloc_contact');
            if( $image): 
                $image_id = $image['ID'];
                $image_alt = $image['alt']; 
        ?>
            <div class="kl-contact-img d-none d-md-block me-md-3">
                <?php echo wp_get_attachment_image($image_id, '', false, array ('class' => 'kl-img-cover', 'alt' => $image_alt)); ?>
            </div>
        <?php endif ?>
    </div>
</section>