<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type
function inhabitant_product() {

	$labels = array(
		'name'                  => 'Products',
		'singular_name'         => 'Product',
		'menu_name'             => 'Products',
		'name_admin_bar'        => 'Product',
		'archives'              => 'Product Archives',
		'attributes'            => 'Product Attributes',
		'parent_item_colon'     => 'Parent Parent:',
		'all_items'             => 'All Products',
		'add_new_item'          => 'Add New Products',
		'add_new'               => 'Add NewProduct',
		'new_item'              => 'New Product',
		'edit_item'             => 'Edit Product',
		'update_item'           => 'Update Product',
		'view_item'             => 'View Product',
		'view_items'            => 'View Products',
		'search_items'          => 'Search Product',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Product',
		'uploaded_to_this_item' => 'Uploaded to this product',
		'items_list'            => 'Products list',
		'items_list_navigation' => 'Products list navigation',
		'filter_items_list'     => 'Filter products list',
	);
	$args = array(
		'label'                 => 'Product',
		'description'           => 'Inhabitent Products',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
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
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'template_lock'         => 'all',
        'template'              => array(
            array( 'core/paragraph', array(
                'placeholder' => 'Description for the product',
            ) ),
        ),
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'inhabitant_product', 0 );

// Register Custom Post Type
function adventure() {

	$labels = array(
		'name'                  => 'Adventure Types',
		'singular_name'         => 'Adventure Type',
		'menu_name'             => 'Adventure Types',
		'name_admin_bar'        => 'AdventureType',
		'archives'              => 'Adventure Archives',
		'attributes'            => 'Adventure Attributes',
		'parent_item_colon'     => 'Parent Adventure:',
		'all_items'             => 'All Adventure',
		'add_new_item'          => 'Add New Adventure',
		'add_new'               => 'Add Adventure',
		'new_item'              => 'New Adventure',
		'edit_item'             => 'Edit Adventure',
		'update_item'           => 'Update Adventure',
		'view_item'             => 'View Adventure',
		'view_items'            => 'View Adventure',
		'search_items'          => 'Search Adventure',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Adventure',
		'uploaded_to_this_item' => 'Uploaded to this Adventure',
		'items_list'            => 'Adventure list',
		'items_list_navigation' => 'Adventure list navigation',
		'filter_items_list'     => 'Filter Adventure list',
	);
	$rewrite = array(
		'slug'                  => 'adventure',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Adventure Type',
		'description'           => 'Adventure Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'adventure', $args );

}
add_action( 'init', 'adventure', 0 );
