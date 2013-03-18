<?php 
	get_template_part('./inc/header');
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
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
		</div>
	</div>
</section>

<?php get_template_part('./inc/footer') ?>