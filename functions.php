<?php
	
	add_theme_support('menus');

	register_nav_menu('topheadermenu',"Top header menu");

	register_nav_menu('mainmenu',"Main menu");

	register_nav_menu('footermenu',"Footer menu");

	register_nav_menu('titlemenu',"Title of each page");

	register_nav_menu('articlemenu',"Article menu");

	register_nav_menu('catproduct',"Product category");

//////////////////////////// Article page ////////////////////////////////
	add_theme_support('post-thumbnails');

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
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => get_bloginfo('template_url') . '/images/articleicon.png',
		'supports' => array('title','editor','thumbnail','excerpt','comments'),
	);

		register_post_type('article', $args);
	}

	add_shortcode('article', 'all_article');

	function all_article(){
		$article = new WP_Query(array(
		'post_type' => 'article'
	));

		$html = "<div class='one-article'>";

		while($article->have_posts()){
			$article->the_post();

			$title   = get_the_title();
			$content = get_the_content();

			$html 	.= "<div class='detail-article'>
							<div class='tit'><h2> $title </h2></div>
							<div class='hline'></div>
							<div class='text'>
								$content
							</div>
						</div>";
		}

		$html 	.= "</div>";
					
		return $html;
	}

//////////////////////////// Product page ////////////////////////////////
	add_theme_support('post-thumbnails');

	add_action('init','product_init');

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
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => get_bloginfo('template_url') . '/images/producticon.png',
		'supports' => array('title','editor','thumbnail','excerpt','comments'),
	);

		register_post_type('product', $args);
	}

	add_shortcode('product', 'all_product');

	function all_product(){
		$product = new WP_Query(array(
		'post_type' => 'product'
	));

		$html = "<div class='all-products'>
					<div class='product'>";

		while($product->have_posts()){
			$product->the_post();

			$img     = get_the_post_thumbnail();
			$link    = get_permalink();
			$title   = get_the_title();
			$content = get_the_content();

			$html 	.= "<li>
							<a href=\"$link\">
								$img
								<h2 class='product-name'> $content </h2>
							</a>
						</li>";
		}

		$html 	.= "	</div>
					</div>";
					
		return $html;
	}