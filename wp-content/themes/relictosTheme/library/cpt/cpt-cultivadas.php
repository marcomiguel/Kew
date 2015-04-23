<?php

add_action( 'init', 'register_cpt_cultivadas' );

function register_cpt_cultivadas() {

    $labels = array( 
        'name' => _x( 'Especies Cultivadas', 'cultivadas' ),
        'singular_name' => _x( 'Especies Cultivadas', 'cultivadas' ),
        'add_new' => _x( 'Añadir Especies Cultivadas', 'cultivadas' ),
        'add_new_item' => _x( 'Añadir Especies Cultivadas', 'cultivadas' ),
        'edit_item' => _x( 'Editar Especies Cultivadas', 'cultivadas' ),
        'new_item' => _x( 'Nueva Especies Cultivadas', 'cultivadas' ),
        'view_item' => _x( 'Ver Especies Cultivadas', 'cultivadas' ),
        'search_items' => _x( 'Buscar Especies Cultivadas', 'cultivadas' ),
        'not_found' => _x( 'No se encontró Especies Cultivadas.', 'cultivadas' ),
        'not_found_in_trash' => _x( 'No se encontró Especies Cultivadas.', 'cultivadas' ),
        'parent_item_colon' => _x( 'Parent cultivadas:', 'cultivadas' ),
        'menu_name' => _x( 'Especies Cultivadas', 'cultivadas' ),
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

    register_post_type( 'cultivadas', $args );
}

?>