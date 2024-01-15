<?php

// $custom_taxonomy = array(
//     'key_tax_1' => 'Name tax',
//     'key_tax_2' => 'Name tax 2',
//   );

// function tax_init(){
//     global $custom_taxonomy;
//     foreach ( $custom_taxonomy as $key => $custom_tax ) :
//         $labels = array(
//             'singular_name' => __($custom_tax, ' remy_chautart_lvx'),
//             'all_items' => __('Tous', 'remy_chautart_lvx'),
//             'edit_item' => __('Modifier', 'remy_chautart_lvx'),
//             'view_item' => __('Voir', 'remy_chautart_lvx'),
//             'update_item' => __('Mettre à jour', 'remy_chautart_lvx'),
//             'add_new_item' => __('Ajouter une nouvelle ' . $custom_tax, 'remy_chautart_lvx'),
//             'new_item_name' => __('Nouveau nom de ' . $custom_tax, 'remy_chautart_lvx'),
//             'search_items' => __('Rechercher', 'remy_chautart_lvx'),
//             'parent_item' => __($custom_tax . ' parent', 'remy_chautart_lvx'),
//             'parent_item_colon' => __($custom_tax . ' parent:', 'remy_chautart_lvx'),
//             'not_found' => __('Pas trouvé', 'remy_chautart_lvx'),
//         );

//         if( $key == 'key_tax_1' ):

//             register_taxonomy('tax_custom_name', ['custom_cpt'], [
//                 'label' => __('Name taxs', 'remy_chautart_lvx'),
//                 'hierarchical' => true,
//                 'rewrite' => ['slug' => 'ingredient'],
//                 'show_admin_column' => true,
//                 'show_in_rest' => true,
//                 'labels' => $labels,
//             ]);

//         elseif ($key == 'key_tax_2') :    
//             register_taxonomy('tax_custom_name_2', ['custom_cpt'], [
//                 'label' => __('Name tax 2', 'remy_chautart_lvx'),
//                 'hierarchical' => true,
//                 'rewrite' => ['slug' => 'name-tax-2'],
//                 'show_admin_column' => true,
//                 'show_in_rest' => true,
//                 'labels' => $labels,
//             ]);

//         endif;
//     endforeach;

// 	register_taxonomy_for_object_type('tax_custom_name', 'custom_cpt');
// 	register_taxonomy_for_object_type('tax_custom_name_2', 'custom_cpt');
 
// }