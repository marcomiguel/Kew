<?php

add_action( 'init', 'register_cpt_objeto' );

function register_cpt_objeto() {

    $labels = array( 
        'name' => _x( 'Objetos de Conservación', 'objeto' ),
        'singular_name' => _x( 'Objeto de Conservación', 'objeto' ),
        'add_new' => _x( 'Añadir objeto', 'objeto' ),
        'add_new_item' => _x( 'Añadir objeto', 'objeto' ),
        'edit_item' => _x( 'Editar objeto', 'objeto' ),
        'new_item' => _x( 'Nuevo objeto', 'objeto' ),
        'view_item' => _x( 'Ver Objeto de Conservación', 'objeto' ),
        'search_items' => _x( 'Buscar Objetos de Conservación', 'objeto' ),
        'not_found' => _x( 'No se encontraron Objetos de Conservación.', 'objeto' ),
        'not_found_in_trash' => _x( 'No se encontraron Objetos de Conservación.', 'objeto' ),
        'parent_item_colon' => _x( 'Parent Objetos de Conservación:', 'objeto' ),
        'menu_name' => _x( 'Objetos de Conservación', 'objeto' ),
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

    register_post_type( 'objeto', $args );
}

?>