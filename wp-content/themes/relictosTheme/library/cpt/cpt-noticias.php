<?php

add_action( 'init', 'register_cpt_noticia' );

function register_cpt_noticia() {

    $labels = array( 
        'name' => _x( 'Noticias', 'noticia' ),
        'singular_name' => _x( 'Noticia', 'noticia' ),
        'add_new' => _x( 'Añadir noticia', 'noticia' ),
        'add_new_item' => _x( 'Añadir noticia', 'noticia' ),
        'edit_item' => _x( 'Editar noticia', 'noticia' ),
        'new_item' => _x( 'Nueva noticia', 'noticia' ),
        'view_item' => _x( 'Ver noticia', 'noticia' ),
        'search_items' => _x( 'Buscar noticias', 'noticia' ),
        'not_found' => _x( 'No se encontraron noticias.', 'noticia' ),
        'not_found_in_trash' => _x( 'No se encontraron noticias.', 'noticia' ),
        'parent_item_colon' => _x( 'Parent Noticia:', 'noticia' ),
        'menu_name' => _x( 'Noticias', 'noticia' ),
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

    register_post_type( 'noticia', $args );
}

?>