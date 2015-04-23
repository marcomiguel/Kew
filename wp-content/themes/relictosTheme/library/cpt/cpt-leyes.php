<?php

add_action( 'init', 'register_cpt_leyes' );

function register_cpt_leyes() {

    $labels = array( 
        'name' => _x( 'Legal', 'legal' ),
        'singular_name' => _x( 'Legal', 'legal' ),
        'add_new' => _x( 'Añadir', 'legal' ),
        'add_new_item' => _x( 'Añadir ley', 'legal' ),
        'edit_item' => _x( 'Editar ley', 'legal' ),
        'new_item' => _x( 'Nueva ley', 'legal' ),
        'view_item' => _x( 'Ver ley', 'legal' ),
        'search_items' => _x( 'Buscar leyes', 'legal' ),
        'not_found' => _x( 'No se encontró ley.', 'legal' ),
        'not_found_in_trash' => _x( 'No se encontró ley.', 'legal' ),
        'parent_item_colon' => _x( 'Parent legal:', 'legal' ),
        'menu_name' => _x( 'Leyes', 'legal' ),
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

    register_post_type( 'leyes', $args );
}

add_action( 'init', 'create_leyes_taxonomies', 0 );
//create two taxonomies, genres and writers for the post type "book"
function create_leyes_taxonomies() 
{  
    
    // now let's add Tipos de leyes (these act like categories)
    register_taxonomy( 'tipo-de-ley', 
        array('leyes'), /* if you change the name of register_post_type( 'proyecto', then you have to change this */
        array('hierarchical' => true,    /* if this is false, it acts like tags */                
            'labels' => array(
                'name' => __( 'Tipos de leyes' ), /* name of the custom taxonomy */
                'singular_name' => __( 'Tipo de ley' ), /* single taxonomy name */
                'search_items' =>  __( 'Buscar Tipos de leyes' ), /* search title for taxomony */
                'all_items' => __( 'Todos los Tipos de leyes' ), /* all title for taxonomies */
                'parent_item' => __( 'Parent Tipo de ley' ), /* parent title for taxonomy */
                'parent_item_colon' => __( 'Parent Tipo de ley:' ), /* parent taxonomy title */
                'edit_item' => __( 'Editar Tipo de ley' ), /* edit custom taxonomy title */
                'update_item' => __( 'Actualizar Tipo de ley' ), /* update title for taxonomy */
                'add_new_item' => __( 'Agregar nuevo Tipo de ley' ), /* add new title for taxonomy */
                'new_item_name' => __( 'Nuevo título para Tipo de ley' ) /* name title for taxonomy */
            ),
            'show_ui' => true,
            'query_var' => true,
        )
    ); 
}

?>