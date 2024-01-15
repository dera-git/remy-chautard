<?php

// CPT Produits
function codex_custom_init(){

    $labels_ent = array(
        'singular_name'      => __('Reportage entreprise', 'remy_chautart_lvx'),
        'add_new_item'       => __('Ajouter une nouvelle', 'remy_chautart_lvx'),
        'new_item'           => __('Ajouter une reportage entreprise', 'remy_chautart_lvx'),
        'view_item'          => __('Voir reportage entreprise', 'remy_chautart_lvx'),
        'not_found'          => __('Aucune reportage entreprise trouvée', 'remy_chautart_lvx'),
        'not_found_in_trash' => __('Aucune reportage entreprise trouvée dans la corbeille', 'remy_chautart_lvx'),
        'all_items'          => __('Tous les reportages entreprise', 'remy_chautart_lvx'),
        'insert_into_item'   => __('Insérer dans le reportage entreprise', 'remy_chautart_lvx')
    );
    register_post_type('reportage_entreprise', [
		'label'         => __('Reportages entreprise', 'remy_chautart_lvx'),
		'public'        => true,
		'menu_position' => 5,
        'has_archive' => true,
		'menu_icon'     => 'dashicons-camera',
		'supports'      => ['title', 'editor', 'thumbnail', 'revisions', 'excerpt'],
		'show_in_rest'  => true,
		'rewrite'       => ['slug' => 'reportage-entreprise'],
		'labels' => $labels_ent,		
	]);

    $labels_sport = array(
        'singular_name'      => __('Evènement sportif', 'remy_chautart_lvx'),
        'add_new_item'       => __('Ajouter une nouvelle', 'remy_chautart_lvx'),
        'new_item'           => __('Ajouter un evènement sportif', 'remy_chautart_lvx'),
        'view_item'          => __('Voir evènement sportif', 'remy_chautart_lvx'),
        'not_found'          => __('Aucun evènement sportif trouvée', 'remy_chautart_lvx'),
        'not_found_in_trash' => __('Aucun evènement sportif trouvée dans la corbeille', 'remy_chautart_lvx'),
        'all_items'          => __('Tous les evènements sportif', 'remy_chautart_lvx'),
        'insert_into_item'   => __('Insérer dans le evènement sportif', 'remy_chautart_lvx')
    );
    register_post_type('evenement_sportif', [
		'label'         => __('Evènements sportif', 'remy_chautart_lvx'),
		'public'        => true,
		'menu_position' => 5,
        'has_archive' => true,
        'has_archive' => true,
		'menu_icon'     => 'dashicons-image-filter',
		'supports'      => ['title', 'editor', 'thumbnail', 'revisions', 'excerpt'],
		'show_in_rest'  => true,
		'rewrite'       => ['slug' => 'evenement-sportif'],
        // 'taxonomies'    => ['tax_1', 'tax_2'],
		'labels' => $labels_sport,		
	]);
 
	// tax_init();
}
add_action('init', 'codex_custom_init');