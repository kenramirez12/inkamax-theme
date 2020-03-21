<?php
// Puntos de distribucion
function productos() {

	$labels = array(
		'name'                  => 'Productos',
		'singular_name'         => 'Producto'
	);
	$args = array(
		'label'                 => 'Productos',
		'labels'                => $labels,
		'supports'              => array('title', 'excerpt', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'menu_icon'             => 'dashicons-images-alt',
		'capability_type'       => 'page',
	);
	register_post_type( 'productos', $args );

}
add_action( 'init', 'productos', 0 );

// Recetas
function recetas() {

	$labels = array(
		'name'                  => 'Recetas',
		'singular_name'         => 'Receta'
	);
	$args = array(
		'label'                 => 'Recetas',
		'labels'                => $labels,
		'supports'              => array('title', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'menu_icon'             => 'dashicons-lightbulb',
		'capability_type'       => 'page',
	);
	register_post_type( 'recetas', $args );

}
add_action( 'init', 'recetas', 0 );

// Puntos de distribucion
function locales() {

	$labels = array(
		'name'                  => 'Puntos de distribución',
		'singular_name'         => 'Punto de distribución'
	);
	$args = array(
		'label'                 => 'Puntos de distribución',
		'labels'                => $labels,
		'supports'              => array('title', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'menu_icon'             => 'dashicons-admin-multisite',
		'capability_type'       => 'page',
	);
	register_post_type( 'distribucion', $args );

}
add_action( 'init', 'locales', 0 );