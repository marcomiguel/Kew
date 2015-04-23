<?php

add_action( 'init', 'register_cpt_flora' );

function register_cpt_flora() {

    $labels = array( 
        'name' => _x( 'Flora', 'flora' ),
        'singular_name' => _x( 'Flora', 'flora' ),
        'add_new' => _x( 'Añadir flora', 'flora' ),
        'add_new_item' => _x( 'Añadir flora', 'flora' ),
        'edit_item' => _x( 'Editar flora', 'flora' ),
        'new_item' => _x( 'Nuevo flora', 'flora' ),
        'view_item' => _x( 'Ver flora', 'flora' ),
        'search_items' => _x( 'Buscar flora', 'flora' ),
        'not_found' => _x( 'No se encontró flora.', 'flora' ),
        'not_found_in_trash' => _x( 'No se encontró flora.', 'flora' ),
        'parent_item_colon' => _x( 'Parent flora:', 'flora' ),
        'menu_name' => _x( 'Flora', 'flora' ),
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

    register_post_type( 'flora', $args );
}

?>