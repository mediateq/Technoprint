<?php 
	/*
		Template Name: Product
	*/
	get_template_part('./inc/header'); 
?>

<section class="products">
	<div class="container">
		<!-- start Title of each page -->
		<?php get_template_part('./inc/title'); ?>
		<!-- end Title of each page -->
		<div class="all-products">
			<div class="product">
				<ul>
					<?php
						query_posts( 'post_type=product&posts_per_page=20&paged=' . $paged);
						while(have_posts()){
							the_post();
					?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
							<h2 class='product-name'> <?php the_title(); ?> </h2>
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