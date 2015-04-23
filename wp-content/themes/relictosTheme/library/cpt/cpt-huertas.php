<?php

add_action( 'init', 'register_cpt_huertas' );

function register_cpt_huertas() {

    $labels = array( 
        'name' => _x( 'Huertas Nativas', 'huertas' ),
        'singular_name' => _x( 'Huertas Nativas', 'huertas' ),
        'add_new' => _x( 'Añadir Huerta Nativa', 'huertas' ),
        'add_new_item' => _x( 'Añadir Huerta Nativa', 'huertas' ),
        'edit_item' => _x( 'Editar Huerta Nativa', 'huertas' ),
        'new_item' => _x( 'Nueva Huerta Nativa', 'huertas' ),
        'view_item' => _x( 'Ver Huertas Nativas', 'huertas' ),
        'search_items' => _x( 'Buscar Huertas Nativas', 'huertas' ),
        'not_found' => _x( 'No se encontraron Huertas Nativas.', 'huertas' ),
        'not_found_in_trash' => _x( 'No se encontraron Huertas Nativas.', 'huertas' ),
        'parent_item_colon' => _x( 'Parent Huertas:', 'huertas' ),
        'menu_name' => _x( 'Huertas Nativas', 'huertas' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'huertas', $args );
}

?>