<?php

add_action( 'init', 'register_cpt_vegetacion' );

function register_cpt_vegetacion() {

    $labels = array( 
        'name' => _x( 'Vegetacion', 'vegetacion' ),
        'singular_name' => _x( 'Vegetación', 'vegetacion' ),
        'add_new' => _x( 'Añadir vegetación', 'vegetacion' ),
        'add_new_item' => _x( 'Añadir vegetación', 'vegetacion' ),
        'edit_item' => _x( 'Editar vegetación', 'vegetacion' ),
        'new_item' => _x( 'Nuevo vegetación', 'vegetacion' ),
        'view_item' => _x( 'Ver vegetación', 'vegetacion' ),
        'search_items' => _x( 'Buscar vegetación', 'vegetacion' ),
        'not_found' => _x( 'No se encontraron vegetaciones.', 'vegetacion' ),
        'not_found_in_trash' => _x( 'No se encontraron vegetaciones.', 'vegetacion' ),
        'parent_item_colon' => _x( 'Parent vegetación:', 'vegetacion' ),
        'menu_name' => _x( 'Vegetación', 'vegetacion' ),
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

    register_post_type( 'vegetacion', $args );
}

?>