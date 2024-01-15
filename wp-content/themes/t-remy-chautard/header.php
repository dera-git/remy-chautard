<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="kl-header">
        <nav class="kl-navbar navbar">
            <div class="container-fluid kl-max-w-540-mobile">
                <div class="kl-navbar-left kl-navbar-part">
                    <a class="kl-navbar-brand navbar-brand py-0 ms-0" href="<?php bloginfo('url') ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/logos/Avatar - Orange.svg" alt="Rémy Chautard">
                    </a>
                    <a class="d-none d-md-inline-block text-uppercase" href="<?php bloginfo('url') ?>">Accueil</a>
                    <span class="d-md-none kl-text-12 text-uppercase">Rémy Chautard</span>
                </div>
                <div class="kl-navbar-center kl-navbar-part d-none d-md-flex">
                    <?php if (get_field('telephone_contact', 'options')) : ?>
                        <a href="tel:<?php the_field('telephone_contact', 'options') ?>"><?php the_field('telephone_contact', 'options') ?></a>
                    <?php endif ?>
                    <?php if (get_field('email_contact', 'options')) : ?>
                        <a href="mailto:<?php the_field('email_contact', 'options') ?>"><?php the_field('email_contact', 'options') ?></a>
                    <?php endif ?>
                </div>
                <div class="kl-navbar-right kl-navbar-part">
                    <span class="d-none d-md-inline-block mx-3 text-uppercase">MENU</span>                       
                    <button class="kl-navbar-toggler navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/icones/Menu Burger.svg" alt="menu burger">
                    </button>
                </div>
            </div>
        </nav>
        
        <div class="kl-navbar-collapse collapse navbar-collapse" id="navbarMenu">
            <div class="kl-wrapper-menu">
                <div class="kl-wrapper-close-menu d-none d-md-block">
                    <button class="kl-close-menu">
                        <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" width="25.578" height="25.567" viewBox="0 0 25.578 25.567">
                            <g id="FERMER" transform="translate(2.121 2.122)">
                                <line id="Ligne_17" data-name="Ligne 17" x2="21.337" y2="21.323" fill="none" stroke="#fff" stroke-width="6"/>
                                <line id="Ligne_18" data-name="Ligne 18" x1="21.337" y2="21.323" fill="none" stroke="#fff" stroke-width="6"/>
                            </g>
                        </svg>
                    </button>
                </div>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'principal',
                        'container' => false,
                        'menu_class' => 'kl-menu',
                        'fallback_cb' => '__return_false',
                        'depth' => 2,
                        //'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                ?>

                <ul class="kl-social-list order-md-1">
                    <?php if (get_field('instagram_url', 'options')) : ?>
                        <li>
                            <a href="<?php the_field('instagram_url', 'options') ?>" target="_blank">
                                <svg id="id_menu_icon_awesome-instagram" data-name="Icon awesome-instagram" xmlns="http://www.w3.org/2000/svg" width="18.265" height="18.261" viewBox="0 0 18.265 18.261">
                                    <path id="Icon_awesome-instagram-2" data-name="Icon awesome-instagram" d="M9.129,6.686a4.682,4.682,0,1,0,4.682,4.682A4.674,4.674,0,0,0,9.129,6.686Zm0,7.726a3.044,3.044,0,1,1,3.044-3.044A3.049,3.049,0,0,1,9.129,14.412Zm5.965-7.917A1.092,1.092,0,1,1,14,5.4,1.089,1.089,0,0,1,15.094,6.495ZM18.2,7.6A5.4,5.4,0,0,0,16.72,3.777,5.44,5.44,0,0,0,12.894,2.3c-1.508-.086-6.026-.086-7.534,0A5.432,5.432,0,0,0,1.534,3.773,5.422,5.422,0,0,0,.059,7.6c-.086,1.508-.086,6.026,0,7.534a5.4,5.4,0,0,0,1.475,3.826A5.447,5.447,0,0,0,5.36,20.434c1.508.086,6.026.086,7.534,0a5.4,5.4,0,0,0,3.826-1.475A5.44,5.44,0,0,0,18.2,15.133c.086-1.508.086-6.022,0-7.53Zm-1.948,9.148a3.082,3.082,0,0,1-1.736,1.736c-1.2.477-4.054.367-5.383.367s-4.185.106-5.383-.367a3.082,3.082,0,0,1-1.736-1.736c-.477-1.2-.367-4.054-.367-5.383s-.106-4.185.367-5.383A3.082,3.082,0,0,1,3.746,4.25c1.2-.477,4.054-.367,5.383-.367s4.185-.106,5.383.367a3.082,3.082,0,0,1,1.736,1.736c.477,1.2.367,4.054.367,5.383S16.724,15.553,16.248,16.751Z" transform="translate(0.005 -2.238)" fill="#FF581A"/>
                                </svg>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (get_field('linkedin_url', 'options')) : ?>
                        <li>
                            <a href="<?php the_field('linkedin_url', 'options') ?>" target="_blank">
                                <svg id="id_menu_icon_awesome-linkedin" data-name="Icon awesome-linkedin" xmlns="http://www.w3.org/2000/svg" width="18.261" height="18.261" viewBox="0 0 18.261 18.261">
                                    <path id="Icon_awesome-linkedin-2" data-name="Icon awesome-linkedin" d="M16.956,2.25H1.3A1.31,1.31,0,0,0,0,3.567V19.194a1.31,1.31,0,0,0,1.3,1.317H16.956a1.313,1.313,0,0,0,1.3-1.317V3.567A1.313,1.313,0,0,0,16.956,2.25ZM5.519,17.9H2.812V9.187H5.523V17.9ZM4.166,8A1.569,1.569,0,1,1,5.735,6.428,1.57,1.57,0,0,1,4.166,8Zm11.5,9.9H12.958V13.663c0-1.011-.02-2.311-1.406-2.311-1.41,0-1.626,1.1-1.626,2.238V17.9H7.219V9.187h2.6v1.19h.037a2.851,2.851,0,0,1,2.564-1.406c2.739,0,3.249,1.806,3.249,4.153Z" transform="translate(0 -2.25)" fill="#FF581A"/>
                                </svg>
                            </a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </header>
    <?php if(!is_404()) : ?>
        <div class="kl-breadcrumb-line d-none d-md-block">
            <span class="kl-breadcrumb-line-progress"></span>
        </div>
    <?php endif; ?>

    <div class="kl-swiper-container">
        <div class="swiper-wrapper">
            <?php if(!is_singular('post') && !is_404()) : ?>
                <div class="kl-scroll d-none d-md-block">
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
            <?php endif; ?>
