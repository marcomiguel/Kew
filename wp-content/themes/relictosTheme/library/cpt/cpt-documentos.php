<?php

add_action( 'init', 'register_cpt_documento' );

function register_cpt_documento() {

    $labels = array( 
        'name' => _x( 'Documentos', 'documento' ),
        'singular_name' => _x( 'Documento', 'documento' ),
        'add_new' => _x( 'Añadir documento', 'documento' ),
        'add_new_item' => _x( 'Añadir documento', 'documento' ),
        'edit_item' => _x( 'Editar documento', 'documento' ),
        'new_item' => _x( 'Nuevo documento', 'documento' ),
        'view_item' => _x( 'Ver Documento', 'documento' ),
        'search_items' => _x( 'Buscar Documentos', 'documento' ),
        'not_found' => _x( 'No se encontraron Documentos.', 'documento' ),
        'not_found_in_trash' => _x( 'No se encontraron Documentos.', 'documento' ),
        'parent_item_colon' => _x( 'Parent Documentos:', 'documento' ),
        'menu_name' => _x( 'Documentos', 'documento' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'thumbnail', 'excerpt' ),
        
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

    register_post_type( 'documento', $args );
}

add_action( 'init', 'create_documentos_taxonomies', 0 );
//create two taxonomies, genres and writers for the post type "book"
function create_documentos_taxonomies() 
{  
    
    // now let's add Tipos de documentos (these act like categories)
    register_taxonomy( 'tipo-de-documento', 
        array('documento'), /* if you change the name of register_post_type( 'proyecto', then you have to change this */
        array('hierarchical' => true,    /* if this is false, it acts like tags */                
            'labels' => array(
                'name' => __( 'Tipos de documentos' ), /* name of the custom taxonomy */
                'singular_name' => __( 'Tipo de documento' ), /* single taxonomy name */
                'search_items' =>  __( 'Buscar Tipos de documentos' ), /* search title for taxomony */
                'all_items' => __( 'Todos los Tipos de documentos' ), /* all title for taxonomies */
                'parent_item' => __( 'Parent Tipo de documento' ), /* parent title for taxonomy */
                'parent_item_colon' => __( 'Parent Tipo de documento:' ), /* parent taxonomy title */
                'edit_item' => __( 'Editar Tipo de documento' ), /* edit custom taxonomy title */
                'update_item' => __( 'Actualizar Tipo de documento' ), /* update title for taxonomy */
                'add_new_item' => __( 'Agregar nuevo Tipo de documento' ), /* add new title for taxonomy */
                'new_item_name' => __( 'Nuevo título para Tipo de documento' ) /* name title for taxonomy */
            ),
            'show_ui' => true,
            'query_var' => true,
        )
    ); 
}

?>