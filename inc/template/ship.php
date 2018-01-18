<?php

// Register Custom Post Type ship
// Post Type Key: ship
if (!function_exists('create_ship_cpt')):
function create_ship_cpt() {

	$labels = array(
		'name' => __( 'Order', 'Post Type General Name', 'textdomain' ),
		'singular_name' => __( 'Order', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => __( 'Order', 'textdomain' ),
		'name_admin_bar' => __( 'Order', 'textdomain' ),
		'archives' => __( 'Order Archives', 'textdomain' ),
		'attributes' => __( 'Order Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Order:', 'textdomain' ),
		'all_items' => __( 'All Order', 'textdomain' ),
		'add_new_item' => __( 'Add Order', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Order', 'textdomain' ),
		'edit_item' => __( 'Edit Order', 'textdomain' ),
		'new_item' => __( 'New Order', 'textdomain' ),
		'update_item' => __( 'Update Order', 'textdomain' ),
		'view_item' => __( 'View Order', 'textdomain' ),
		'view_items' => __( 'View Order', 'textdomain' ),
		'search_items' => __( 'Search Order', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Order', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Order', 'textdomain' ),
		'items_list' => __( 'Shipway list', 'textdomain' ),
		'items_list_navigation' => __( 'Order list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Order list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Order', 'textdomain' ),
		'description' => __( 'Address to get Order', 'textdomain' ),
		'labels' => $labels,
        'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<?xml version="1.0" encoding="utf-8"?>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path fill ="#ff9700" d="M491.729,112.971L259.261,0.745c-2.061-0.994-4.461-0.994-6.521,0L20.271,112.971c-2.592,1.251-4.239,3.876-4.239,6.754 v272.549c0,2.878,1.647,5.503,4.239,6.754l232.468,112.226c1.03,0.497,2.146,0.746,3.261,0.746s2.23-0.249,3.261-0.746 l232.468-112.226c2.592-1.251,4.239-3.876,4.239-6.754V119.726C495.968,116.846,494.32,114.223,491.729,112.971z M256,15.828 l215.217,103.897l-62.387,30.118c-0.395-0.301-0.812-0.579-1.27-0.8L193.805,45.853L256,15.828z M176.867,54.333l214.904,103.746 l-44.015,21.249L132.941,75.624L176.867,54.333z M396.799,172.307v78.546l-41.113,19.848v-78.546L396.799,172.307z M480.968,387.568L263.5,492.55V236.658l51.873-25.042c3.73-1.801,5.294-6.284,3.493-10.015 c-1.801-3.729-6.284-5.295-10.015-3.493L256,223.623l-20.796-10.04c-3.731-1.803-8.214-0.237-10.015,3.493 c-1.801,3.73-0.237,8.214,3.493,10.015l19.818,9.567V492.55L31.032,387.566V131.674l165.6,79.945 c1.051,0.508,2.162,0.748,3.255,0.748c2.788,0,5.466-1.562,6.759-4.241c1.801-3.73,0.237-8.214-3.493-10.015l-162.37-78.386 l74.505-35.968L340.582,192.52c0.033,0.046,0.07,0.087,0.104,0.132v89.999c0,2.581,1.327,4.98,3.513,6.353 c1.214,0.762,2.599,1.147,3.988,1.147c1.112,0,2.227-0.247,3.26-0.746l56.113-27.089c2.592-1.251,4.239-3.875,4.239-6.754v-90.495 l69.169-33.392V387.568z"/> </g> </g> <g> <g> <path d="M92.926,358.479L58.811,342.01c-3.732-1.803-8.214-0.237-10.015,3.493c-1.801,3.73-0.237,8.214,3.493,10.015 l34.115,16.469c1.051,0.508,2.162,0.748,3.255,0.748c2.788,0,5.466-1.562,6.759-4.241 C98.22,364.763,96.656,360.281,92.926,358.479z"/> </g> </g> <g> <g> <path d="M124.323,338.042l-65.465-31.604c-3.731-1.801-8.214-0.237-10.015,3.494c-1.8,3.73-0.236,8.214,3.494,10.015 l65.465,31.604c1.051,0.507,2.162,0.748,3.255,0.748c2.788,0,5.466-1.562,6.759-4.241 C129.617,344.326,128.053,339.842,124.323,338.042z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>'),
		'supports' => array('revisions', ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 25,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'ship', $args );

}
add_action( 'init', 'create_ship_cpt', 0 );
endif;

if (!function_exists('ship_menus_columns_head')):
// ADD NEW COLUMN
    function ship_menus_columns_head($defaults)
    {
        $defaults['ten_ship']     = 'Name';
        $defaults['dia_chi_ship'] = 'Mobi';
        $defaults['so_dien_thoai_ship'] = 'Address';
        $defaults['shipby'] = 'Ship by';
        $defaults['note'] = 'Note';
        $defaults['gia_ship'] = 'Giá';
        $defaults['don_hang_ship'] = 'Đơn hàng';
        return $defaults;
    }
endif;
add_filter('manage_edit-ship_columns', 'ship_menus_columns_head');

add_action( 'manage_posts_custom_column' , 'ship_menus_columns_content', 10, 2 );

function ship_menus_columns_content( $column, $post_id ) {
	switch ( $column ) {
		case 'ten_ship':
			echo get_post_meta( $post_id, 'name-cart', true ); 
			break;
		case 'dia_chi_ship':
			echo get_post_meta( $post_id, 'mobi-cart', true ); 
			break;
		case 'so_dien_thoai_ship':
			echo get_post_meta( $post_id, 'address-cart', true ).' '.get_post_meta( $post_id, 'ward-cart', true ).' '.get_post_meta( $post_id, 'county-cart', true ).' '.get_post_meta( $post_id, 'city-cart', true ); 
			break;	
		case 'note':
			echo get_post_meta( $post_id, 'note-cart', true ); 
			break;	
		case 'shipby':
			echo get_post_meta( $post_id, 'shipby-cart', true ); 
			break;	
		case 'gia_ship':
			echo get_post_meta( $post_id, 'price_ship_metabox', true ); 
			break;	
		case 'don_hang_ship':
			echo  str_replace("brraryyay" ,"<br/><br/>",get_post_meta( $post_id, 'production_metabox', true )); 
			break;	
		}
}

function remove_post_columns($columns) {
  unset($columns['title']);

  return $columns;
}
add_filter('manage_posts_columns', 'remove_post_columns');


class shipMetabox {
	private $screen = array(
		'ship',
	);
	private $meta_fields = array(
		array(
			'label' => 'Name',
			'id' => 'name-cart',
			'type' => 'text',
		),
		array(
			'label' => 'Sdt',
			'id' => 'mobi-cart',
			'type' => 'text',
		),
		array(
			'label' => 'City',
			'id' => 'city-cart',
			'type' => 'text',
		),
		array(
			'label' => 'County',
			'id' => 'county-cart',
			'type' => 'text',
		),
		array(
			'label' => 'Ward',
			'id' => 'ward-cart',
			'type' => 'text',
		),
		array(
			'label' => 'Address',
			'id' => 'address-cart',
			'type' => 'text',
		),
		array(
			'label' => 'Ship by',
			'id' => 'shipby-cart',
			'type' => 'text',
		),			
		array(
			'label' => 'Note',
			'id' => 'note-cart',
			'type' => 'textarea',
		),
	);
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_fields' ) );
	}
	public function add_meta_boxes() {
		foreach ( $this->screen as $single_screen ) {
			add_meta_box(
				'ship',
				__( 'ship', 'textdomain' ),
				array( $this, 'meta_box_callback' ),
				$single_screen,
				'normal',
				'high'
			);
		}
	}
	public function meta_box_callback( $post ) {
		wp_nonce_field( 'ship_data', 'ship_nonce' );
		$this->field_generator( $post );
	}
	public function field_generator( $post ) {
		$output = '';
		foreach ( $this->meta_fields as $meta_field ) {
			$label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
			$meta_value = get_post_meta( $post->ID, $meta_field['id'], true );
			if ( empty( $meta_value ) ) {
				$meta_value = ''; }
			switch ( $meta_field['type'] ) {
				case 'textarea':
					$input = sprintf(
						'<textarea style="width: 100%%" id="%s" name="%s" rows="5">%s</textarea>',
						$meta_field['id'],
						$meta_field['id'],
						$meta_value
					);
					break;
				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
						$meta_field['id'],
						$meta_field['id'],
						$meta_field['type'],
						$meta_value
					);
			}
			$output .= $this->format_rows( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}
	public function format_rows( $label, $input ) {
		return '<tr><th>'.$label.'</th><td>'.$input.'</td></tr>';
	}
	public function save_fields( $post_id ) {
		if ( ! isset( $_POST['ship_nonce'] ) )
			return $post_id;
		$nonce = $_POST['ship_nonce'];
		if ( !wp_verify_nonce( $nonce, 'ship_data' ) )
			return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;
		foreach ( $this->meta_fields as $meta_field ) {
			if ( isset( $_POST[ $meta_field['id'] ] ) ) {
				switch ( $meta_field['type'] ) {
					case 'email':
						$_POST[ $meta_field['id'] ] = sanitize_email( $_POST[ $meta_field['id'] ] );
						break;
					case 'text':
						$_POST[ $meta_field['id'] ] = sanitize_text_field( $_POST[ $meta_field['id'] ] );
						break;
				}
				update_post_meta( $post_id, $meta_field['id'], $_POST[ $meta_field['id'] ] );
			} else if ( $meta_field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, $meta_field['id'], '0' );
			}
		}
	}
}
if (class_exists('shipMetabox')) {
	new shipMetabox;
};

class cartpriceMetabox {
	private $screen = array(
		'ship',
	);
	private $meta_fields = array(
		array(
			'label' => 'Giá',
			'id' => 'price_ship_metabox',
			'type' => 'text',
		),
	);
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_fields' ) );
	}
	public function add_meta_boxes() {
		foreach ( $this->screen as $single_screen ) {
			add_meta_box(
				'cartprice',
				__( 'Giá', 'textdomain' ),
				array( $this, 'meta_box_callback' ),
				$single_screen,
				'side',
				'high'
			);
		}
	}
	public function meta_box_callback( $post ) {
		wp_nonce_field( 'cartprice_data', 'cartprice_nonce' );
		$this->field_generator( $post );
	}
	public function field_generator( $post ) {
		$output = '';
		foreach ( $this->meta_fields as $meta_field ) {
			$label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
			$meta_value = get_post_meta( $post->ID, $meta_field['id'], true );
			if ( empty( $meta_value ) ) {
				$meta_value = ''; }
			switch ( $meta_field['type'] ) {
				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
						$meta_field['id'],
						$meta_field['id'],
						$meta_field['type'],
						$meta_value
					);
			}
			$output .= $this->format_rows( $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}
	public function format_rows(  $input ) {
		return '<tr><td>'.$input.'</td></tr>';
	}
	public function save_fields( $post_id ) {
		if ( ! isset( $_POST['cartprice_nonce'] ) )
			return $post_id;
		$nonce = $_POST['cartprice_nonce'];
		if ( !wp_verify_nonce( $nonce, 'cartprice_data' ) )
			return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;
		foreach ( $this->meta_fields as $meta_field ) {
			if ( isset( $_POST[ $meta_field['id'] ] ) ) {
				switch ( $meta_field['type'] ) {
					case 'email':
						$_POST[ $meta_field['id'] ] = sanitize_email( $_POST[ $meta_field['id'] ] );
						break;
					case 'text':
						$_POST[ $meta_field['id'] ] = sanitize_text_field( $_POST[ $meta_field['id'] ] );
						break;
				}
				update_post_meta( $post_id, $meta_field['id'], $_POST[ $meta_field['id'] ] );
			} else if ( $meta_field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, $meta_field['id'], '0' );
			}
		}
	}
}
if (class_exists('cartpriceMetabox')) {
	new cartpriceMetabox;
};

class cartproductionMetabox {
	private $screen = array(
		'ship',
	);
	private $meta_fields = array(
		array(
			'label' => 'sản phẩm',
			'id' => 'production_metabox',
			'type' => 'text',
		),
	);
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_fields' ) );
	}
	public function add_meta_boxes() {
		foreach ( $this->screen as $single_screen ) {
			add_meta_box(
				'cartproduction',
				__( 'Sản phẩm', 'textdomain' ),
				array( $this, 'meta_box_callback' ),
				$single_screen,
				'side',
				'high'
			);
		}
	}
	public function meta_box_callback( $post ) {
		wp_nonce_field( 'cartproduction_data', 'cartproduction_nonce' );
		$this->field_generator( $post );
	}
	public function field_generator( $post ) {
		$output = '';
		foreach ( $this->meta_fields as $meta_field ) {
			$meta_value = get_post_meta( $post->ID, $meta_field['id'], true );
			if ( empty( $meta_value ) ) {
				$meta_value = ""; }
			$output .= $meta_value;
		}
		echo '<table class="form-table"><tbody>' . str_replace("brraryyay" ,"<br/><br/>",$output) . '</tbody></table>';
	}
	public function format_rows( $label, $input ) {
		return '<tr><th>'.$label.'</th><td>'.$input.'</td></tr>';
	}
	public function save_fields( $post_id ) {
		if ( ! isset( $_POST['cartproduction_nonce'] ) )
			return $post_id;
		$nonce = $_POST['cartproduction_nonce'];
		if ( !wp_verify_nonce( $nonce, 'cartproduction_data' ) )
			return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;
		foreach ( $this->meta_fields as $meta_field ) {
			if ( isset( $_POST[ $meta_field['id'] ] ) ) {
				switch ( $meta_field['type'] ) {
					case 'email':
						$_POST[ $meta_field['id'] ] = sanitize_email( $_POST[ $meta_field['id'] ] );
						break;
					case 'text':
						$_POST[ $meta_field['id'] ] = sanitize_text_field( $_POST[ $meta_field['id'] ] );
						break;
				}
				update_post_meta( $post_id, $meta_field['id'], $_POST[ $meta_field['id'] ] );
			} else if ( $meta_field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, $meta_field['id'], '0' );
			}
		}
	}
}
if (class_exists('cartproductionMetabox')) {
	new cartproductionMetabox;
};

// Create Shortcode cart_insert_data
// Use the shortcode: [cart_insert_data]
function process_user_generated_post() {
	if ( ! check_ajax_referer( 'user-submitted-question', 'security' ) ) {
		wp_send_json_error( 'Security Check failed' );
	}
	$cart_data = array(
		'post_status' 				=> 'draft',
		'post_type' 				=> 'ship',
		'meta_input' 				=> array(
			'name-cart' 			=> sanitize_text_field( $_POST[ 'data' ][ 'name' ] ),
			'mobi-cart' 			=> sanitize_text_field( $_POST[ 'data' ][ 'mobi' ] ),
			'city-cart' 			=> sanitize_text_field( $_POST[ 'data' ][ 'city' ] ),
			'county-cart' 			=> sanitize_text_field( $_POST[ 'data' ][ 'county' ] ),
			'ward-cart' 			=> sanitize_text_field( $_POST[ 'data' ][ 'ward' ] ),
			'address-cart' 			=> sanitize_text_field( $_POST[ 'data' ][ 'address' ] ),
			'note-cart' 			=> sanitize_text_field( $_POST[ 'data' ][ 'note' ] ),
			'shipby-cart' 			=> sanitize_text_field( $_POST[ 'data' ][ 'shipby' ] ),
			'price_ship_metabox'	=> sanitize_text_field( $_POST[ 'data' ][ 'price' ] ).' VND',
			'production_metabox'	=> sanitize_text_field( $_POST[ 'data' ][ 'cartitem' ] ),
		),
	);
	$post_id = wp_insert_post( $cart_data, true );


	wp_send_json_success( $post_id );
}
add_action( 'wp_ajax_process_user_generated_post', 'process_user_generated_post' );
add_action( 'wp_ajax_nopriv_process_user_generated_post', 'process_user_generated_post' );
?>
