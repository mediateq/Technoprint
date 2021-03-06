<?php
	
	add_theme_support('menus');

	add_theme_support('post-thumbnails');

	register_nav_menu('topheadermenu',"Top header menu");

	register_nav_menu('mainmenu',"Main menu");

	register_nav_menu('footermenu',"Footer menu");

	register_nav_menu('titlemenu',"Title of each page");

	register_nav_menu('articlemenu',"Article menu");

	register_nav_menu('catproduct',"Product category");

//////////////////////////// Article page ////////////////////////////////
	add_action('init','article_init');

	function article_init(){
		$labels = array(
		'name' => _x('مقالات','post type general name'),
		'singular_name' => _x('مقاله','post type singular name'),
		'add_new' => _x('اضافه نمودن مقاله' , 'Article'),
		'add_new_item' => __('اضافه نمودن مقاله'),
		'edit_item' => __('اصلاح مقاله'),
		'new_item' => __('مقاله جدبد'),
		'view_item' => __('مشاهده مقاله'),
		'search_items' => __('جستجوی مقاله'),
		'not_found' => __('هیچ مقاله ای یافت نشد'),
		'not_found_in_trash' => __('هیچ مقاله ای در زباله دان یافت نشد'),
		'parent_item_colon' => '',
		'menu_name' => 'مقالات'
	);
		$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => false,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 25,
		'menu_icon' => get_bloginfo('template_url') . '/images/articleicon.png',
		'supports' => array('title','editor','thumbnail','excerpt','comments'),
	);

		register_post_type('article', $args);
	}
//////////////////////////// Product page ////////////////////////////////
	add_action('init', 'product_init');

	function product_init(){
		$labels = array(
		'name' => _x('محصولات','post type general name'),
		'singular_name' => _x('محصول','post type singular name'),
		'add_new' => _x('اضافه نمودن محصول' , 'Product'),
		'add_new_item' => __('اضافه نمودن محصول'),
		'edit_item' => __('اصلاح محصول'),
		'new_item' => __('محصول جدبد'),
		'view_item' => __('مشاهده محصول'),
		'search_items' => __('جستجوی محصول'),
		'not_found' => __('هیچ محصولی یافت نشد'),
		'not_found_in_trash' => __('هیچ محصولی در زباله دان یافت نشد'),
		'parent_item_colon' => '',
		'menu_name' => 'محصولات'
	);
		$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => false,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 25,
		'menu_icon' => get_bloginfo('template_url') . '/images/producticon.png',
		'supports' => array('title','editor','thumbnail','excerpt'),
	);

		register_post_type('product', $args);
		
	}

	add_action('add_meta_boxes', 'product_add_custom_box');

	function product_add_custom_box(){
		add_meta_box('product_priceid', 'قیمت محصول', 'product_price_box', 'product', 'side');
	}

	function product_price_box(){
		$price = 0;
		if ( isset($_REQUEST['post']) ) {
			$price = get_post_meta((int)$_REQUEST['post'],'product_price',true);
		}
		echo "<label for='product_price_text'>قیمت محصول</label>";
		echo "<input id='product_price_text' class='widefat' name='product_price_text' size='20' type='text' value='$price' />";
	}

	add_action('save_post','product_save_meta');

	function product_save_meta($post_id){
		if ( is_admin() ) {
			if ( isset($_POST['product_price_text']) ) {
				update_post_meta($post_id,'product_price',$_POST['product_price_text']);
			}
		}
	}


	function add_custom_taxonomies() {
		register_taxonomy('products', 'product', array(
			'hierarchical' => true,
			'labels' => array(
				'name' => _x( 'دسته بندی محصولات', 'taxonomy general name' ),
				'singular_name' => _x( 'دسته بندی محصول', 'taxonomy singular name' ),
				'search_items' =>  __( 'جستجوی محصول' ),
				'all_items' => __( 'همه محصولات' ),
				'parent_item' => __( 'مادر محصولات' ),
				'parent_item_colon' => __( 'مادر محصولات:' ),
				'edit_item' => __( 'ویرایش محصول' ),
				'update_item' => __( 'بروزرسانی محصول' ),
				'add_new_item' => __( 'اضافه نمودن محصول' ),
				'new_item_name' => __( 'اسم محصول جدید' ),
				'menu_name' => __( 'دسته بندی محصولات' ),
			),
			'rewrite' => array(
			'slug' => 'products', 
			'with_front' => false, 
			'hierarchical' => true 
			),
		));
	}
	
	add_action( 'init', 'add_custom_taxonomies', 0 );
//////////////////////////// Pageination for taxonomy ////////////////////////////////
function my_modify_posts_per_page() {
    add_filter( 'option_posts_per_page', 'my_option_posts_per_page' );
}

function my_option_posts_per_page( $value ) {
    return 1;
}

add_action( 'init', 'my_modify_posts_per_page', 0);