<?php 
	get_template_part('./inc/header');
?>

<section class="sub-products">
	<div class="container">
		<!-- start Title of each page -->
		<div id="title-pages">
			<div id="top-pic"></div>
			<div id="main-pic">
				<div id="title">
					<h2><?php echo apply_filters( 'the_title', $term->name ); ?></h2>
				</div>
				<div id="search">
					<div class="search-box">
						<form action="">
							<input type="text" class="text" placeholder="جستجو" />
							<input type="submit" value="" class="submit" />
						</form>
					</div>
				</div>
				<div id="menu">
					<nav>
						<?php
							wp_nav_menu( array(
								'theme_location'  => 'titlemenu',
								'menu'            => '', 
							    'container'       => false, 
							    'container_class' => '', 
							    'menu_class'      => '',
							    'echo'            => true, 
							    'fallback_cb'     => 'wp_page_menu',
							    'before'          => '',
							    'after'           => '',
							    'link_before'     => '<p>',
							    'link_after'      => '</p><span></span>',
							    'items_wrap'      => '<menu>%3$s</menu>',
							    'depth'           => 0,
							    'walker'          => ''
							));
						?>
					</nav>
				</div>
				<div class="badboy"></div>
			</div>
			<div id="bot-pic"></div>
		</div>
		<!-- end Title of each page -->
		<div class="all-products">
			<div class="product">
								
				<!-- Start Categories of product -->
				<?php get_template_part('./inc/product-cat'); ?>
				<!-- End Categories of product -->
				<div class="badboy"></div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('./inc/footer') ?>