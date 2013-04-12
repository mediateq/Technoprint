<?php 
	get_template_part('./inc/header');
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

<section class="products">
	<div class="container">
		<!-- start Title of each page -->
		<div id="title-pages">
			<div id="top-pic"></div>
			<div id="main-pic">
				<div id="title">
					<h2><?php echo apply_filters( 'the_title', $term->name ); ?></h2>
				</div>
				<div id="search">
					<gcse:searchbox-only></gcse:searchbox-only>
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
				<ul>
					<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						global $wp_query;
						query_posts( array_merge( $wp_query->query, array( 'posts_per_page' => 20 ) ) );

						while(have_posts()){
							the_post();
					?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
								<h2 class='product-name'><?php the_title(); ?></h2>
							</a>
						</li>
					<?php 
						}
					?>
				</ul>
			</div>
			<!-- Start Categories of product -->
			<?php get_template_part('./inc/product-cat'); ?>
			<!-- End Categories of product -->
			<div class="badboy"></div>
			<div class='pagelink'>
				<?php 
					global $wp_query;
					$big = 999999999;
					$args = array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages,
								'prev_text'    => ('«'),
								'next_text'    => ('»')
							);
					echo paginate_links( $args );
					wp_reset_query();
				?>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('./inc/footer') ?>