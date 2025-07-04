<?php

// Register Custom Post Type
function edc_posttype_clases() {

	$labels = array(
		'name'                  => _x( 'Clases Cocina', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Clase Cocina', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Clases de cocina', 'text_domain' ),
		'name_admin_bar'        => __( 'Clases de cocina', 'text_domain' ),
		'archives'              => __( 'Clase cocina Archives', 'text_domain' ),
		'attributes'            => __( 'Clase cocina Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Clase cocina:', 'text_domain' ),
		'all_items'             => __( 'All Clases cocina', 'text_domain' ),
		'add_new_item'          => __( 'Add New Clase cocina', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Clase cocina', 'text_domain' ),
		'edit_item'             => __( 'Edit Clase cocina', 'text_domain' ),
		'update_item'           => __( 'Update Clase cocina', 'text_domain' ),
		'view_item'             => __( 'View Clase cocina', 'text_domain' ),
		'view_items'            => __( 'View Clases cocina', 'text_domain' ),
		'search_items'          => __( 'Search Clase cocina', 'text_domain' ),
		'not_found'             => __( 'No se encontraron clases', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Clases cocina list', 'text_domain' ),
		'items_list_navigation' => __( 'Clases cocina list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => $labels,
		'description'           => __( 'Clase cocina Descripcion', 'text_domain' ),
        'rewrite'               => array( 'slug' => 'clases-cocina'),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'clases_cocina', $args );

}
add_action( 'init', 'edc_posttype_clases' );
/**
* Agregando el post type chefs instructores
*/
  function edc_posttype_chefs_instructores() {
    $labels = array(
        'name'                  => _x('Chefs / Instructores', 'edc'),
        'singular_name'         => _x('Chef / Instructor', 'edc'),
        'menu_name'             => _x('Chefs / instructores', 'Admin Menu text', 'edc'),
        'name_admin_bar'        => _x('Chefs / instructores', 'Add new on Toobal', 'edc'),
        'add_new'               => __('Agregar','edc'),
        'add_new_item'          => __('Agregar Nuevo Chef','edc'),
        'new_item'              => __('Nueva Chef','edc'),
        'edit_item'             => __('Editar Chef','edc'),
        'view_item'             => __('Ver Chef','edc'),
        'all_items'             => __('Todas los Chef','edc'),
        'search_items'          => __('Buscar Chefs','edc'),
        'parent_item_colon'     => __('Padre Chefs','edc'),
        'not_found'             => __('No se encontranron Chefs.','edc'),
        'not_found_in_trash'    => __('No se encontrar chefs en la Papelera','edc'),
        'featured_image'        => _x('Imagen Destacada', 'Overrides the "Featured Image" phrase for this post type. Added in 4.3','edc'),
        'set_featured_image'    => _x('Agregar imagen Destacada', 'Overrides the  "Set featured image" phrase for this post type. Added in 4.3', 'edc'),
        'remove_featured_image' => _x('Borrar imagen destacada', 'Overrides the "Remove featured image" phrase for this post type. Added in 4.3', 'edc'),
        'use_featured_image'    => _x('Usar imagen destacada', 'Overrides the "use as featured image" phrase for this post type. Added in 4.3', 'edc'),
        'archives'              => _x('Archive de Chefs', 'The post type archivelabel used in nav menus. default "Post Archives. Added in 4.4','edc'),
        'insert_into_item'      => _x('Insetar en Chefs', 'Overrides the "Insert into post"/"Insert into page" phrase (used when inserting media into a post). Added in 4.4', 'edc'),
        'uploaded_to_this_item' => _x('Cargadas En Chefs', 'Overrides the "Uploaded to this post"/"Uploaded to this page" phrase (used when viewing media attached to a post). Added in 4.4', 'edc'),
        'filter_items_list'     => _x('Filtrar Lista de Chefs', 'Screen reader text for the filter Links heading on the post type listing screen. Defult "Filter post list"/"Filter pages list". Added in 4.4', 'edc'),
        'items_list_navigation' => _x('Chefs  navegación', 'Screen reader text for the pagination heading on the post type listing sreen. Defult "Posts list navigation"/"Pages list navigation". Added 4.4','edc'),
        'items_list'            => _x('Chefs  Lista', 'Screen reader text for the items list heading on the post type listing screen. Default "Post list"/"Pages list. Added 4.4','edc'),
 
    );
    $args = array(
        'labels'               => $labels,
        'public'               => true,
        'publicly_queryable'   => true,
        'show_ui'              => true,
        'show_in_menu'         => true,
        'query_var'            => true,
        'rewrite'              => array ( 'slug' => 'chefs-instructores'),
        'capability_type'      => 'post',
        'has_archive'          => true,
        'menu_icon'            => 'dashicons-admin-users',
        //true como paginas (pueden tener hijos), false como posts (no tienen hijos)
        'hierarchical'         => false,
        'menu_position'        => 7,
        'supports'             => array( 'title', 'editor', 'thumbnail'),
        'show_in_rest'         => true,
        'rest_base'            => 'chefs-instructores' 
    );
 
    register_post_type( 'chefs', $args);
}
 
  add_action('init', 'edc_posttype_chefs_instructores' );