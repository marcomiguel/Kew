<?php

add_action( 'init', 'register_cpt_fauna' );

function register_cpt_fauna() {

    $labels = array( 
        'name' => _x( 'Fauna', 'fauna' ),
        'singular_name' => _x( 'Fauna', 'fauna' ),
        'add_new' => _x( 'Añadir fauna', 'fauna' ),
        'add_new_item' => _x( 'Añadir fauna', 'fauna' ),
        'edit_item' => _x( 'Editar fauna', 'fauna' ),
        'new_item' => _x( 'Nuevo fauna', 'fauna' ),
        'view_item' => _x( 'Ver fauna', 'fauna' ),
        'search_items' => _x( 'Buscar fauna', 'fauna' ),
        'not_found' => _x( 'No se encontró fauna.', 'fauna' ),
        'not_found_in_trash' => _x( 'No se encontró fauna.', 'fauna' ),
        'parent_item_colon' => _x( 'Parent fauna:', 'fauna' ),
        'menu_name' => _x( 'Fauna', 'fauna' ),
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

    register_post_type( 'fauna', $args );
}

?>