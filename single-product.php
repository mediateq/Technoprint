<?php 
	/*
		Template Name: product
	*/
	get_template_part('./inc/header') 
?>

<section class="products">
	<div class="container">
		<!-- start Title of each page -->
		<?php get_template_part('./inc/title'); ?>
		<!-- end Title of each page -->
		<div class="all-products">
			<div class="product">
				<p>محصولات</p>
				<ul>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
							<h2 class="product-name"><?php the_content(); ?></h2>
						</a>
					</li>
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