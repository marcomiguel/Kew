<?php

add_action( 'init', 'register_cpt_arboles' );

function register_cpt_arboles() {

    $labels = array( 
        'name' => _x( 'Arboles Ancestrales', 'arboles' ),
        'singular_name' => _x( 'Arboles Ancestrales', 'arboles' ),
        'add_new' => _x( 'Añadir Arbol', 'arboles' ),
        'add_new_item' => _x( 'Añadir Arbol', 'arboles' ),
        'edit_item' => _x( 'Editar Arbol', 'arboles' ),
        'new_item' => _x( 'Nuevo Arbol', 'arboles' ),
        'view_item' => _x( 'Ver Arboles', 'arboles' ),
        'search_items' => _x( 'Buscar Arbol', 'arboles' ),
        'not_found' => _x( 'No se encontraron Arboles.', 'arboles' ),
        'not_found_in_trash' => _x( 'No se encontraron arboles.', 'arboles' ),
        'parent_item_colon' => _x( 'Parent Arboles:', 'arboles' ),
        'menu_name' => _x( 'Arboles Ancestrales', 'arboles' ),
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

    register_post_type( 'arboles', $args );
}

?>