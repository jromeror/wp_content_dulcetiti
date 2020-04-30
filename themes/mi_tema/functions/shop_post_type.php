<?php

// Register Shop Post Type
function shop_post_type() {

	$labels = array(
		'name'                  => _x( 'shops', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'shop', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Shops', 'text_domain' ),
		'name_admin_bar'        => __( 'Shop', 'text_domain' ),
		'archives'              => __( 'Archivos de shop', 'text_domain' ),
		'attributes'            => __( 'Atributos del shop', 'text_domain' ),
		'parent_item_colon'     => __( 'Shop principal', 'text_domain' ),
		'all_items'             => __( 'Todos los shops', 'text_domain' ),
		'add_new_item'          => __( 'Agrega un nuevo shop', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo shop', 'text_domain' ),
		'edit_item'             => __( 'Editar shop', 'text_domain' ),
		'update_item'           => __( 'Actualizar shop', 'text_domain' ),
		'view_item'             => __( 'Ver shop', 'text_domain' ),
		'view_items'            => __( 'Ver shops', 'text_domain' ),
		'search_items'          => __( 'Buscar shop', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el shop', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este shop', 'text_domain' ),
		'items_list'            => __( 'Lista de shop', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de shop', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de shop', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'shop', 'text_domain' ),
		'description'           => __( 'Post dedicado a desafio bicicleta', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'shop', $args );

}
add_action( 'init', 'shop_post_type', 0 );

?>