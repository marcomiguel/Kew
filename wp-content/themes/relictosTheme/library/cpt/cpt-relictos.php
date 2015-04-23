<?php

add_action( 'init', 'register_cpt_relicto' );

function register_cpt_relicto() {

    $labels = array( 
        'name' => _x( 'Relictos', 'relicto' ),
        'singular_name' => _x( 'Relicto', 'relicto' ),
        'add_new' => _x( 'Añadir relicto', 'relicto' ),
        'add_new_item' => _x( 'Añadir relicto', 'relicto' ),
        'edit_item' => _x( 'Editar relicto', 'relicto' ),
        'new_item' => _x( 'Nuevo relicto', 'relicto' ),
        'view_item' => _x( 'Ver relicto', 'relicto' ),
        'search_items' => _x( 'Buscar relictos', 'relicto' ),
        'not_found' => _x( 'No se encontraron relictos.', 'relicto' ),
        'not_found_in_trash' => _x( 'No se encontraron relictos.', 'relicto' ),
        'parent_item_colon' => _x( 'Parent Relictos:', 'relicto' ),
        'menu_name' => _x( 'Relictos', 'relicto' ),
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

    register_post_type( 'relicto', $args );
}

?>