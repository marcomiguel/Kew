<?php

$prefix = 'kew_';
global $meta_boxes;
$meta_boxes = array();


// Detalles Arboles Ancestrales
$meta_boxes[] = array(
    'title'    => 'Arboles Ancestrales',
    'pages'    => array( 'arboles' ),
    'fields' => array(    
        array(
            'name' => 'Edad Aproximada',
            'id'   => 'cf_edad',
            'type' => 'text',
            'desc' => 'Por ejemplo: 33 años',

        ), 
        array(
            'name' => 'Circunferencia del tronco (CAP)',
            'id'   => 'cf_circunferencia',
            'type' => 'text',
            'desc' => 'Por ejemplo: 2 metros',

        ),
		array(
            'name' => 'Altura del Arbol',
            'id'   => 'cf_altura',
            'type' => 'text',
            'desc' => 'Por ejemplo: 18 metros',

        ),
		array(
            'name' => 'Ancho (cobertura vegetal) ',
            'id'   => 'cf_ancho',
            'type' => 'text',
            'desc' => 'Por ejemplo: 2 metros',

        ),
		 array(
            'name' => 'Localidad',
            'id'   => 'cf_localidad',
            'type' => 'text',
            'desc' => 'Lugar donde fue visto por última vez.',
        ),
		 array(
            'name'     => 'Tipo de Relicto',
            'id'       => "cf_relicto_asociado",
            'type'     => 'select',
            'desc' => 'Escoge la opción que corresponda.',
            'options'  => array(
                'asociado' => 'Relicto Asociado',
                'aislado' => 'Relicto Aislado',
            ),
        ),
		array(
            'name' => 'Información de Relicto Asociado',
            'id'   => 'cf_info_relicto_asociado',
            'type' => 'text',
            'desc' => 'Si escogió Relicto Asociado, ingrese aqui la información',
        ),
		array(
            'name' => 'Link',
            'id'   => 'cf_link_relicto_asociado',
            'type' => 'text',
            'desc' => 'Si escogió Relicto Asociado, ingrese aqui el Link',
        ),
               
    )
);



// Detalles Bosques y Tierras de niños
$meta_boxes[] = array(
    'title'    => 'Bosques y tierras de niños',
    'pages'    => array( 'bosques' ),
    'fields' => array(  
		array(
            'name' => 'Superficie total (m2)',
            'id'   => 'cf_superficie',
            'type' => 'text',
            'desc' => 'Por ejemplo: 99.51',

        ), 
		array(
            'name' => 'Localidad',
            'id'   => 'cf_localidad',
            'type' => 'text',
            'desc' => 'Lugar donde fue visto por última vez.',
        ),
        array(
            'name' => 'Coordenadas',
            'id'   => 'cf_coordenadas',
            'type' => 'text',
            'desc' => 'Por ejemplo: -12.064003, -77.048225',

        ), 
        array(
            'name' => 'Niños Involucrados',
            'id'   => 'cf_ninos_involucrados',
            'type' => 'text',
            'desc' => '',

        ),
		array(
            'name' => 'Docentes Involucrados',
            'id'   => 'cf_docentes_involucrados',
            'type' => 'text',
            'desc' => '',

        ),
		array(
            'name' => 'Tiempo de TiNi',
            'id'   => 'cf_tiempo_tini',
            'type' => 'text',
            'desc' => '',

        )               
    )
);


// Detalles de huertas Nativas
$meta_boxes[] = array(
    'title'    => 'Detalles de Huertas Nativas',
    'pages'    => array( 'huertas' ),
    'fields' => array(    
        array(
            'name' => 'Superficie total (ha)',
            'id'   => 'cf_superficie',
            'type' => 'text',
            'desc' => 'Por ejemplo: 99.51',

        ), 
        array(
            'name' => 'Altitud (m.s.n.m.)',
            'id'   => 'cf_altitud',
            'type' => 'text',
            'desc' => 'Por ejemplo: entre 350 y 400',

        ),
		array(
            'name' => 'Año de Inicio',
            'id'   => 'cf_year_inicio',
            'type' => 'text',
            'desc' => 'Año en que se inició.',
        ),
		array(
            'name' => 'Localidad',
            'id'   => 'cf_localidad',
            'type' => 'text',
            'desc' => 'Lugar donde fue visto por última vez.',
        ),
               
    )
);

// Detalles del relicto
$meta_boxes[] = array(
    'title'    => 'Detalles del relicto',
    'pages'    => array( 'relicto' ),
    'fields' => array(    
        array(
            'name' => 'Superficie total (ha)',
            'id'   => 'cf_superficie',
            'type' => 'text',
            'desc' => 'Por ejemplo: 99.51',

        ), 
        array(
            'name' => 'Altitud (m.s.n.m.)',
            'id'   => 'cf_altitud',
            'type' => 'text',
            'desc' => 'Por ejemplo: entre 350 y 400',

        ), 
               
    )
);

// Galerías de foto para Biodiversidad
$meta_boxes[] = array(
    'title'    => 'Galería de fotos',
    'pages'    => array( 'relicto', 'fauna', 'cultivadas' ,'flora', 'vegetacion' ),
    'fields' => array(    
    // WYSIWYG/RICH TEXT EDITOR
    array(
        'name' => __( 'Galería de fotos', 'rwmb' ),
        'id'   => "cf_galeria",
        'type' => 'wysiwyg',
        // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
        'raw'  => true,
        //'std'  => __( '', 'rwmb' ),

        // Editor settings, see wp_editor() function: look4wp.com/wp_editor
        'options' => array(
            'textarea_rows' => 4,
            'teeny'         => true,
            'media_buttons' => true,
        ),
    ),
    )
);

// Galerías de foto para Almácigos y viveros
$meta_boxes[] = array(
    'title'    => 'Galería de fotos',
    'pages'    => array( 'page' ),
    'fields' => array(    
        // WYSIWYG/RICH TEXT EDITOR
        array(
            'name' => __( 'Galería de fotos', 'rwmb' ),
            'id'   => "cf_galeria",
            'type' => 'wysiwyg',
            // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
            'raw'  => true,
            //'std'  => __( '', 'rwmb' ),

            // Editor settings, see wp_editor() function: look4wp.com/wp_editor
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
                'media_buttons' => true,
            ),
        ),
    ),
    'only_on'    => array(
        'id'       => array( 200 )//,
        // 'slug'  => array( 'news', 'blog' ),
        //'template' => array( 'page-restauracion.php' )//,
        //'parent'   => array( 10 )
    ),
);

// Grados de Amenaza Peru
$meta_boxes[] = array(
    'title'    => 'Perú',
    'pages'    => array( 'page' ),
    'fields' => array(    
        // INTRODUCCION
        array(
            'name' => __( 'Introducción', 'rwmb' ),
            'id'   => "ga_peru_intro",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),    
        // CR
        array(
            'name' => __( 'CR - Peligro Crítico', 'rwmb' ),
            'id'   => "ga_peru_cr",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),     
        // EN
        array(
            'name' => __( 'EN - En Peligro', 'rwmb' ),
            'id'   => "ga_peru_en",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),     
        // VU
        array(
            'name' => __( 'VU - Vulnerable', 'rwmb' ),
            'id'   => "ga_peru_vu",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),     
        // NT
        array(
            'name' => __( 'NT - Casi Amenazado', 'rwmb' ),
            'id'   => "ga_peru_nt",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ), 
        // FUENTES
        array(
            'name' => __( 'Fuente', 'rwmb' ),
            'id'   => "ga_peru_fuente",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),
    ),
    'only_on'    => array(
        'id'       => array( 355 )
    ),
);

// Grados de Amenaza IUCN
$meta_boxes[] = array(
    'title'    => 'IUCN',
    'pages'    => array( 'page' ),
    'fields' => array(    
        // INTRODUCCION
        array(
            'name' => __( 'Introducción', 'rwmb' ),
            'id'   => "ga_iucn_intro",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),     
        // EX
        array(
            'name' => __( 'EX - Extinto', 'rwmb' ),
            'id'   => "ga_iucn_ex",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),      
        // EW
        array(
            'name' => __( 'EW - Extinto en estado silvestre', 'rwmb' ),
            'id'   => "ga_iucn_ew",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),  
        // CR
        array(
            'name' => __( 'CR - En Peligro Crítico', 'rwmb' ),
            'id'   => "ga_iucn_cr",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),     
        // EN
        array(
            'name' => __( 'EN - En Peligro', 'rwmb' ),
            'id'   => "ga_iucn_en",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),     
        // VU
        array(
            'name' => __( 'VU - Vulnerable', 'rwmb' ),
            'id'   => "ga_iucn_vu",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),     
        // NT
        array(
            'name' => __( 'NT - Casi Amenazado', 'rwmb' ),
            'id'   => "ga_iucn_nt",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ), 
        array(
            'name' => __( 'LC - Preocupación Menor', 'rwmb' ),
            'id'   => "ga_iucn_lc",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ), 
        // FUENTES
        array(
            'name' => __( 'Fuente', 'rwmb' ),
            'id'   => "ga_iucn_fuente",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),
    ),
    'only_on'    => array(
        'id'       => array( 355 )
    ),
);

// Grados de Amenaza CITES
$meta_boxes[] = array(
    'title'    => 'CITES',
    'pages'    => array( 'page' ),
    'fields' => array(    
        // INTRODUCCION
        array(
            'name' => __( 'Introducción', 'rwmb' ),
            'id'   => "ga_cites_intro",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),    
        // I
        array(
            'name' => __( 'Apéndice I', 'rwmb' ),
            'id'   => "ga_cites_i",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),     
        // II
        array(
            'name' => __( 'Apéndice II', 'rwmb' ),
            'id'   => "ga_cites_ii",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),     
        // III
        array(
            'name' => __( 'Apéndice III', 'rwmb' ),
            'id'   => "ga_cites_iii",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ), 
        // FUENTES
        array(
            'name' => __( 'Fuente', 'rwmb' ),
            'id'   => "ga_cites_fuente",
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
            ),
        ),
    ),
    'only_on'    => array(
        'id'       => array( 355 )
    ),
);

// Ubicación/acceso
$meta_boxes[] = array(
    'title'    => 'Ubicación/acceso',
    'pages'    => array( 'relicto' ),
    'fields' => array(    
        array(
            'name' => 'Localización',
            'id'   => 'cf_localizacion',
            'type' => 'textarea',
            'desc' => 'Por ejemplo: Departamento de Ica, Provincia de Ica, Distrito de Santiago, Caserío de San Pedro',

        ), 
        array(
            'name' => 'Ubicación GPS del punto céntrico',
            'id'   => 'cf_gps',
            'type' => 'wysiwyg',
            // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
            'raw'  => false,
            //'std'  => __( '', 'rwmb' ),
            'desc' => 'Por ejemplo: Este : 419222.11 / Norte: 8436895.49',
            // Editor settings, see wp_editor() function: look4wp.com/wp_editor
            'options' => array(
                'textarea_rows' => 4,
                'teeny'         => true,
                'media_buttons' => false,
            ),

        ), 
        array(
            'name' => 'Centro poblado/ciudad más cercano',
            'id'   => 'cf_ciudad',
            'type' => 'textarea',
            'desc' => 'Por ejemplo: Este : a 950 metros en línea recta del caserío San Pedro, a 5.5 km en línea recta de la ciudad de Ica.',

        ), 
        array(
            'name' => 'Como acceder desde la Panamericana Sur',
            'id'   => 'cf_acceso',
            'type' => 'textarea',
            'desc' => 'Por ejemplo: Este : 8.36 km. de recorrido, desde la Panamericana Sur, ingresando a la altura del Mercado Santo Domingo, pasando por Cachiche hasta la comunidad de San Pedro.',

        ),  
        array(
            'name' => 'Contacto',
            'id'   => 'cf_contacto',
            'type' => 'text',
            'desc' => 'Por ejemplo: Guillermo Hernández - 956656623',
        ),
        array(
            'name' => 'Mapa 3D',
            'id'   => 'cf_mapa3d',
            'type' => 'url',
            'desc' => 'Por ejemplo: http://www.kew.org/gis/kml/agro/',

        ),             
    )
);

// Grado de Amenaza
$meta_boxes[] = array(
    'title'    => 'Grados de Amenaza',
    'pages'    => array( 'vegetacion', 'cultivadas' , 'flora', 'fauna' ),
    'fields' => array(
        array(
            'name'     => __( 'Grado de Amenaza Peru', 'amenaza' ),
            'id'       => "cf_amenaza_peru",
            'type'     => 'radio',
            'desc' => 'Escoge la opción que corresponda.',
            'options'  => array(
                'Peligro Crítico' => __( 'CR', 'amenaza' ),
                'En Peligro' => __( 'EN', 'amenaza' ),
                'Vulnerable' => __( 'VU', 'amenaza' ),
                'Casi Amenazado' => __( 'NT', 'amenaza' ),
                'Ninguno' => __( 'ninguno', 'amenaza' ),
            ),
        ),  // Amenaza peru
        array(
            'name'     => __( 'Grado de Amenaza IUCN', 'amenaza' ),
            'id'       => "cf_amenaza_iucn",
            'type'     => 'radio',
            'desc' => 'Escoge la opción que corresponda.',
            // Array of 'value' => 'Label' pairs for select box
            'options'  => array(
                'Extinct' => __( 'EX', 'amenaza' ),
                'Extinct in the Wild' => __( 'EW', 'amenaza' ),
                'Critically Endangered' => __( 'CR', 'amenaza' ),
                'Endangered' => __( 'EN', 'amenaza' ),
                'Vulnerable' => __( 'VU', 'amenaza' ),
                'Near Threatened' => __( 'NT', 'amenaza' ),
                'Least Concern' => __( 'LC', 'amenaza' ),
                'Ninguno' => __( 'ninguno', 'amenaza' ),
            ),
        ),  // Amenaza IUCN
        array(
            'name' => __( 'Grado de Amenaza CITES', 'amenaza' ),
            'id'   => "cf_amenaza_cites",
            'type' => 'radio',
            'desc' => 'Escoge la opción que corresponda.',
            // Array of 'value' => 'Label' pairs for select box
            'options'  => array(
                'Apéndice I'   => __( 'I', 'amenaza' ),
                'Apéndice II'  => __( 'II', 'amenaza' ),
                'Apéndice III' => __( 'III', 'amenaza' ),
                'Ninguno'      => __( 'ninguno', 'amenaza' ),
            ),
        ),  // Amenaza CITES       
    )
);

// Biodiversidad - Flora
$meta_boxes[] = array(
    'title'    => 'Detalles de Flora',
    'pages'    => array( 'flora', 'cultivadas'  ),
    'fields' => array(
        array(
            'name' => 'Endémico',
            'id'   => 'cf_endemico',
            'type' => 'text',
            'desc' => '',

        ), 
        array(
            'name' => 'Familia',
            'id'   => 'cf_familia',
            'type' => 'text',
            'desc' => '',

        ), 
        array(
            'name' => 'Nombre local',
            'id'   => 'cf_local',
            'type' => 'text',
            'desc' => '',

        ), 
        array(
            'name' => 'Distribución',
            'id'   => 'cf_distribucion',
            'type' => 'text',
            'desc' => '',

        ), 
        array(
            'name' => 'Hábitat',
            'id'   => 'cf_habitat',
            'type' => 'textarea',
            'desc' => '',

        ), 
        array(
            'name' => 'Servicios Ecológicos',
            'id'   => 'cf_servicios',
            'type' => 'textarea',
            'desc' => '',

        ), 
        array(
            'name' => 'Usos',
            'id'   => 'cf_usos',
            'type' => 'textarea',
            'desc' => '',

        ),             
    )
);

// Biodiversidad - Fauna
$meta_boxes[] = array(
    'title'    => 'Detalles de Fauna',
    'pages'    => array( 'fauna' ),
    'fields' => array(
        array(
            'name' => 'Endémico',
            'id'   => 'cf_endemico',
            'type' => 'text',
            'desc' => '',

        ), 
        array(
            'name' => 'Familia',
            'id'   => 'cf_familia',
            'type' => 'text',
            'desc' => '',

        ),
        array(
            'name' => 'Nombre local',
            'id'   => 'cf_local',
            'type' => 'text',
            'desc' => '',

        ), 
        array(
            'name' => 'Nombre en Inglés',
            'id'   => 'cf_nombre_ingles',
            'type' => 'text',
            'desc' => '',

        ), 
        array(
            'name' => 'Distribución',
            'id'   => 'cf_distribucion',
            'type' => 'text',
            'desc' => '',

        ), 
        array(
            'name' => 'Hábitat',
            'id'   => 'cf_habitat',
            'type' => 'textarea',
            'desc' => '',

        ), 
        array(
            'name' => 'Función ecológica',
            'id'   => 'cf_funcion',
            'type' => 'textarea',
            'desc' => '',

        ), 
        array(
            'name' => 'Alimentación',
            'id'   => 'cf_alimentacion',
            'type' => 'textarea',
            'desc' => '',

        ),             
    )
);

// Biodiversidad - Fauna - Última observación
$meta_boxes[] = array(
    'title'    => 'Última observación',
    'pages'    => array( 'fauna' ),
    'fields' => array(
        array(
            'name' => 'Fecha',
            'id'   => 'cf_fecha',
            'type' => 'date',
            'desc' => 'Fecha de último avistamiento',
            // jQuery date picker options. See here http://api.jqueryui.com/datepicker
            'js_options' => array(
                'appendText'      => __( '(dd-mm-yyyy)', 'rwmb' ),
                'dateFormat'      => __( 'dd-mm-yy', 'rwmb' ),
                'changeMonth'     => true,
                'changeYear'      => true,
                'showButtonPanel' => true,
            ),

        ),
        array(
            'name' => 'Localidad',
            'id'   => 'cf_localidad',
            'type' => 'text',
            'desc' => 'Lugar donde fue visto por última vez.',
        ),
        array(
            'name' => 'Condición',
            'id'   => 'cf_condicion',
            'type' => 'textarea',
            'desc' => 'Condición en la que se encontraba en último avistamiento.',

        ),            
    )
);

// Marco Legal
$meta_boxes[] = array(
    'title'    => 'Detalles de Ley',
    'pages'    => array( 'leyes' ),
    'fields' => array(
        array(
            'name' => 'Documento',
            'id'   => 'documento',
            'type' => 'file',
            'size' => 4,
            'desc' => 'Subir el docuemnto para descargas',
        ),
        array(
            'name' => 'Link',
            'id'   => 'link',
            'type' => 'url',
            'size' => 50,
            'desc' => 'Por ejemplo "http://www.relictos.org/enlace"',

        ),         
    )
);

// Documentos
$meta_boxes[] = array(
    'title'    => 'Detalles del documento',
    'pages'    => array( 'documento' ),
    'fields' => array(
        array(
            'name' => 'Documento',
            'id'   => 'documento',
            'type' => 'file',
            'size' => 10,
            'desc' => 'Subir el documento para descargas',
        ),        
    )
);


/** * Register meta boxes */
function rw_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) ) {
		foreach ( $meta_boxes as $meta_box ) {
			if ( isset( $meta_box['only_on'] ) && ! rw_maybe_include( $meta_box['only_on'] ) ) {
				continue;
			}

			new RW_Meta_Box( $meta_box );
		}
	}
}
add_action( 'admin_init', 'rw_register_meta_boxes' );

/** * Check if meta boxes is included */
function rw_maybe_include( $conditions ) {
	// Include in back-end only
	if ( ! defined( 'WP_ADMIN' ) || ! WP_ADMIN ) {
		return false;
	}

	// Always include for ajax
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return true;
	}

	if ( isset( $_GET['post'] ) ) {
		$post_id = $_GET['post'];
	}
	elseif ( isset( $_POST['post_ID'] ) ) {
		$post_id = $_POST['post_ID'];
	}
	else {
		$post_id = false;
	}

	$post_id = (int) $post_id;
	$post    = get_post( $post_id );

	foreach ( $conditions as $cond => $v ) {
		// Catch non-arrays too
		if ( ! is_array( $v ) ) {
			$v = array( $v );
		}

		switch ( $cond ) {
			case 'id':
				if ( in_array( $post_id, $v ) ) {
					return true;
				}
			break;
			case 'parent':
				$post_parent = $post->post_parent;
				if ( in_array( $post_parent, $v ) ) {
					return true;
				}
			break;
			case 'slug':
				$post_slug = $post->post_name;
				if ( in_array( $post_slug, $v ) ) {
					return true;
				}
			break;
			case 'template':
				$template = get_post_meta( $post_id, '_wp_page_template', true );
				if ( in_array( $template, $v ) ) {
					return true;
				}
			break;
		}
	}

	// If no condition matched
	return false;
}

?>