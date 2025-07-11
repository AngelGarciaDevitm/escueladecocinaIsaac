<?php


add_action( 'cmb2_admin_init', 'edc_opciones_theme' );
/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function edc_opciones_theme() {

	/**
	 * Registers options page menu item and form.
	 */
	$cmb_options = new_cmb2_box( array(
		'id'           => 'edc_theme_opciones',
		'title'        => esc_html__( 'Escuela de cocina Ajustes', 'cmb2' ),
		'object_types' => array( 'options-page' ),

		/*
		 * The following parameters are specific to the options-page box
		 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
		 */

		'option_key'      => 'edc_theme_options', // The option key and admin menu page slug.
		'icon_url'        => 'dashicons-edit', // Menu icon. Only applicable if 'parent_slug' is left empty.
		) );

	/**
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'Color del sitio primario', 'cmb2' ),
		'desc'    => esc_html__( 'Añada un color Primario para el sitio web (enlaces, botones, textos)', 'cmb2' ),
		'id'      => 'color_primario',
		'type'    => 'colorpicker',
		'default' => '#ffffff',
	) );

    $cmb_options->add_field( array(
		'name'    => esc_html__( 'Color del sitio secundario', 'cmb2' ),
		'desc'    => esc_html__( 'Añada un color Secundario para el sitio web (enlaces, botones, textos)', 'cmb2' ),
		'id'      => 'color_secundario',
		'type'    => 'colorpicker',
		'default' => '#ffffff',
	) );

    $cmb_options->add_field( array(
		'name'    => esc_html__( 'Logotipo' ),
		'desc'    => esc_html__( 'Cargue una imagen para el logotipo', 'cmb2' ),
		'id'      => 'logotipo',
		'type'    => 'file',
	) );

    $cmb_options->add_field( array(
		'name'    => esc_html__( 'Separador' ),
		'desc'    => esc_html__( 'Cargue una imagen para el separador', 'cmb2' ),
		'id'      => 'separador',
		'type'    => 'file',
	) );
}