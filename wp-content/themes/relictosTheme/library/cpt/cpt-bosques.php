<?php

add_action( 'init', 'register_cpt_bosques' );

function register_cpt_bosques() {

    $labels = array( 
        'name' => _x( 'Bosques y Tierras de Niños', 'bosques' ),
        'singular_name' => _x( 'Bosques y Tierras de Niños', 'bosques' ),
        'add_new' => _x( 'Añadir Bosque', 'bosques' ),
        'add_new_item' => _x( 'Añadir Bosque', 'bosques' ),
        'edit_item' => _x( 'Editar Bosque', 'bosques' ),
        'new_item' => _x( 'Nuevo Bosque', 'bosques' ),
        'view_item' => _x( 'Ver Bosque', 'bosques' ),
        'search_items' => _x( 'Buscar Bosque', 'bosques' ),
        'not_found' => _x( 'No se encontraron Bosques.', 'bosques' ),
        'not_found_in_trash' => _x( 'No se encontraron Bosques.', 'bosques' ),
        'parent_item_colon' => _x( 'Parent Bosques:', 'bosques' ),
        'menu_name' => _x( 'Bosques y Tierras de Niños', 'bosques' ),
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

    register_post_type( 'bosques', $args );
}

?>