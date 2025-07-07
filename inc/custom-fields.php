<?php

/**
 * Metaboxes para el Homepage
 */

 add_action( 'cmb2_admin_init', 'edc_campos_homepage' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function edc_campos_homepage() {
    $prefix = 'edc_homepage_';
    
    $id_home = get_option('page_on_front');

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$edc_campos_homepage = new_cmb2_box( array(
		'id'           => 'homepage',
		'title'        => esc_html__( 'Campos Homepage', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), // Specific post IDs to display this metabox
	) );

	$edc_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto Superior 1', 'cmb2' ),
		'desc'    => esc_html__( 'Texto para la parte superior del sitio web', 'cmb2' ),
		'id'      => $prefix . 'texto_superior_1',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	$edc_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen Hero 1', 'cmb2' ),
		'desc' => esc_html__( 'Primera imagen para la parte superior', 'cmb2' ),
		'id'   => $prefix . 'imagen_superior_1',
		'type' => 'file',
	) );

	$edc_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto Superior 2', 'cmb2' ),
		'desc'    => esc_html__( 'Texto para la parte superior del sitio web', 'cmb2' ),
		'id'      => $prefix . 'texto_superior_2',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	$edc_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen Hero 2', 'cmb2' ),
		'desc' => esc_html__( 'Segunda imagen para la parte superior', 'cmb2' ),
		'id'   => $prefix . 'imagen_superior_2',
		'type' => 'file',
	) );

	//Campos de licenciatura
	$edc_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto licenciatura', 'cmb2' ),
		'desc'    => esc_html__( 'Añada el texto para la licenciatura', 'cmb2' ),
		'id'      => $prefix . 'texto_licenciatura',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	$edc_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen Fondo Licenciatura', 'cmb2' ),
		'desc' => esc_html__( 'Imagen de fondo para la licenciatura', 'cmb2' ),
		'id'   => $prefix . 'imagen_licenciatura',
		'type' => 'file',
	) );
    }  



add_action( 'cmb2_admin_init', 'edc_seccion_nosotros' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function edc_seccion_nosotros() {
	$prefix = 'edc_group_';

	/**
	 * Repeatable Field Groups
	 */
	$edc_iconos = new_cmb2_box( array(
		'id'           => 'yourprefix_group_metabox',
		'title'        => esc_html__( 'Iconos con descripción', 'cmb2' ),
		'object_types' => array( 'page' ),
		'context'	   => 'normal',
		'priority'     => 'high',
		'show_names'   => 'true',
		'show_on'      => array(
			'key'      => 'page-template',
			'value'    => 'page-iconos.php'
		)
	) );

	$edc_iconos->add_field( array(
		'name' => esc_html__( 'Titulo Sección', 'cmb2' ),
		'desc' => esc_html__( 'Añada un titulo para la seccion', 'cmb2' ),
		'id'   => $prefix . 'titulo_iconos',
		'type' => 'text',
	) );

	// $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
	$group_field_id = $edc_iconos->add_field( array(
		'id'          => $prefix . 'nosotros',
		'type'        => 'group',
		'description' => esc_html__( 'Agregue opciones segun sea necesario', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Caracteristica {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar otro grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
		),
	) );

	$edc_iconos->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Titulo', 'cmb2' ),
		'id'         => 'titulo_icono',
		'type'       => 'text',
	) );

	$edc_iconos->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Descripción', 'cmb2' ),
		'description' => esc_html__( 'Agregue una descripción a esta caracteristica', 'cmb2' ),
		'id'          => 'desc_icono',
		'type'        => 'textarea_small',
	) );

	$edc_iconos->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Icono', 'cmb2' ),
		'id'   => 'imagen_icono',
		'type' => 'file',
	) );

}

/**
 * Blog
 */
add_action( 'cmb2_admin_init', 'edc_campos_blog' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function edc_campos_blog() {
    $prefix = 'edc_blog_';
    
    $id_blog = get_option('page_for_posts');

	$edc_campos_blog = new_cmb2_box( array(
		'id'           => $prefix . 'blog',
		'title'        => esc_html__( 'Campos Blog', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_blog ),
		), // Specific post IDs to display this metabox
	) );

	$edc_campos_blog->add_field( array(
		'name' => esc_html__( 'Slogan Blog', 'cmb2' ),
		'desc' => esc_html__( 'Añada una descripción a la pagina web', 'cmb2' ),
		'id'   => $prefix . 'slogan_blog',
		'type' => 'text',
	) );
}

//Añade campos al post type de Clases
add_action( 'cmb2_admin_init', 'edc_campos_clases' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function edc_campos_clases() {
	$prefix = 'edc_cursos_';

	/**
	 * Repeatable Field Groups
	 */
	$edc_campos_cursos = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Informacion de clases y cursos', 'cmb2' ),
		'object_types' => array( 'clases_cocina' ),
		'context'	   => 'normal',
		'priority'     => 'high',
		'show_names'   => 'true',
	) );

	$edc_campos_cursos->add_field( array(
		'name' => esc_html__( 'Subtitulo del curso', 'cmb2' ),
		'desc' => esc_html__( 'Añada un subtitulo para el curso', 'cmb2' ),
		'id'   => $prefix . 'subtitulo',
		'type' => 'text',
	) );

	//Horas y dias

	$edc_campos_cursos->add_field( array(
		'name'     => esc_html__( 'Informacion sobre la fecha y horarios del curso', 'cmb2' ),
		'desc'     => esc_html__( 'Añada informacion relacionada a fechas, dias y horas para el curso', 'cmb2' ),
		'id'       => $prefix . 'info',
		'type'     => 'title',
	) );
 
	$edc_campos_cursos->add_field( array(
		'name' => esc_html__( 'Indicaciones de los dias', 'cmb2' ),
		'desc' => esc_html__( 'Añada las indicaciones de los dias eje: Todos los sabados', 'cmb2' ),
		'id'   => $prefix . 'indicaciones',
		'type' => 'text',
	) );

	$edc_campos_cursos->add_field( array(
		'name' => esc_html__( 'Fecha de inicio de curso', 'cmb2' ),
		'desc' => esc_html__( 'Añada la fecha de inicio de Curso', 'cmb2' ),
		'id'   => $prefix . 'fecha_inicio_curso',
		'type' => 'text_date',
		// 'date_format' => 'Y-m-d',
	) );

}