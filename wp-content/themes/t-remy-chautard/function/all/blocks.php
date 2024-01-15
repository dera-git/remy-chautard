<?php
function my_acf_init_block_types(){

    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(
            array(
                'name'              => 'intro_home',
                'title'             => 'Intro home',
                'description'       => '',
                'render_template'   => 'function/blocks/homepage/intro.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('intro', 'home'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'presentation_home',
                'title'             => 'Présentation home',
                'description'       => '',
                'render_template'   => 'function/blocks/homepage/presentation.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('Présentation', 'home'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'contact_home',
                'title'             => 'Contact home',
                'description'       => '',
                'render_template'   => 'function/blocks/homepage/contact.php',
                'category'          => 'formatting',
                'icon'              => 'email',
                'keywords'          => array('Contact', 'home'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'a_propos',
                'title'             => 'A propos',
                'description'       => '',
                'render_template'   => 'function/blocks/a-propos/a-propos.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('A propos', 'about'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'contact',
                'title'             => 'Contact',
                'description'       => '',
                'render_template'   => 'function/blocks/contact/contact.php',
                'category'          => 'formatting',
                'icon'              => 'email',
                'keywords'          => array('Contact'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'block-intro-page',
                'title'             => 'Section intro page',
                'description'       => '',
                'render_template'   => 'function/blocks/block-intro-page.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('block-intro-page', 'block_intro_page'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'grid-image',
                'title'             => 'Image grid',
                'description'       => '',
                'render_template'   => 'function/blocks/grid-image.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('grid-image', 'grid_image'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'grid-image-02',
                'title'             => 'Image grid(modèle 02)',
                'description'       => '',
                'render_template'   => 'function/blocks/grid-image-02.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('grid-image-02', 'grid_image_02'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'grid-image-03',
                'title'             => 'Image grid(modèle 03)',
                'description'       => '',
                'render_template'   => 'function/blocks/grid-image-03.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('grid-image-03', 'grid_image_03'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'block_intro_page_small',
                'title'             => 'Section intro page small',
                'description'       => '',
                'render_template'   => 'function/blocks/block-intro-page-small.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('block-intro-page-small', 'block_intro_page_small'),
            )
        );

    }

}
add_action('acf/init', 'my_acf_init_block_types');
