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
		'name' => esc_html__( 'Un texto', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => 'yourprefix_about_text',
		'type' => 'text',
	) );

    }