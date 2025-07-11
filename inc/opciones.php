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
		'default' => '#f46669',
	) );

    $cmb_options->add_field( array(
		'name'    => esc_html__( 'Color del sitio secundario', 'cmb2' ),
		'desc'    => esc_html__( 'Añada un color Secundario para el sitio web (enlaces, botones, textos)', 'cmb2' ),
		'id'      => 'color_secundario',
		'type'    => 'colorpicker',
		'default' => '#c7c57d',
	) );

    $cmb_options->add_field( array(
		'name'    => esc_html__( 'Logotipo', 'cmb2'),
		'desc'    => esc_html__( 'Cargue una imagen para el logotipo', 'cmb2' ),
		'id'      => 'logotipo',
		'type'    => 'file',
	) );

    $cmb_options->add_field( array(
		'name'    => esc_html__( 'Separador', 'cmb2'),
		'desc'    => esc_html__( 'Cargue una imagen para el separador', 'cmb2' ),
		'id'      => 'separador',
		'type'    => 'file',
	) );

    $cmb_options->add_field( array(
		'name'    => esc_html__( 'Clases para Mostrar en la pagina Principal','cmb2'),
		'desc'    => esc_html__( 'Añada una cantidad de imagenes para mostrar en la pagina principal', 'cmb2' ),
		'id'      => 'numeros_clases',
		'type'    => 'text',
	) );
}

/* Dinamic Colors and dividers images */
add_action('wp_footer', 'edc_theme_options_styles');
function edc_theme_options_styles(){
	$options = get_option('edc_theme_options');

	$primaryColor = $options['color_primario'];
	//$primaryColorHover = $options['primary_color_hover'];
	$secondaryColor = $options['color_secundario'];
	$dividerImage = $options['separador'];
	//$negativeDividerImage = $options['negative_divider_image'];

	/* If the user haven't changed the divider image, the template will use the default divider image */
	if(!isset($dividerImage)){
		$dividerImage = get_template_directory_uri() . '/img/separador.png';
	}

	if(!isset($primaryColor)){
		$primaryColor = "#f46669";
	}
	
	if(!isset($secondaryColor)){
		$secondaryColor = "#a1a045";
	}

	/* Registering the new inline styles */
	wp_register_style('custom-theme-options', false);
	wp_enqueue_style('custom-theme-options');

	$customCss = "
		/* BG Primary color */
		.btn-primary,
		.bg-primary,
		.list-group-item-primary,
		.comment-respond .submit,
		.page-link:hover {
			background-color: {$primaryColor}!important;
		}
		/* BG Secondary color */
		.bg-secondary,
		.badge-secondary,
		.list-group-item-secondary,
		aside .card-footer {
			background-color: {$secondaryColor}!important;
		}
		/* Primary Color */
		.header .nav-link:hover,
		.header .current_page_item .nav-link,
		aside .card-subtitle,
		.post-preview a,
		.post-content .post-meta span,
		.comment-respond a,
		.comment-list .comment-body .reply a,
		.card-subtitle,
		.instructor,
		.page-link,
		.page-item a,
		.footer .nav-link:hover,
		.footer .nav-link.active {
			color: {$primaryColor}!important;
		}
		/* Border bottom colors */
		.header .current_page_item .nav-link {
			border-bottom: 2px solid {$primaryColor}!important;
		}
		.footer {
			border-bottom: 10px solid {$primaryColor}!important;
		}
		/* Border top colors */
		.footer .container {
			border-top: 1px solid {$primaryColor}!important;
		}
		/* Border left colors */
		blockquote.subtitle {
			border-left: 2px solid {$primaryColor}!important;
		}
		/* Border color */
		.btn-primary {
			border-color: {$primaryColor}!important;
		}
		
		/* Divider Images */
		.separador::after{
			background-image: url({$dividerImage})!important;
		}

	";
	wp_add_inline_style('custom-theme-options',  $customCss);
}