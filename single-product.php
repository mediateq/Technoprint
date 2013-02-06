<?php 
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
						<li>
							<?php $url = get_permalink(); ?>
							<a href="<?php $url ?>">
								<?php the_post_thumbnail(); ?>
								<h2 class="product-name"><?php the_title(); ?></h2>
								<p><?php the_content(); ?></p>
								<p class="price">قیمت: <b><?php echo get_post_meta(get_the_ID(),'product_price',true); ?>تومان</b></p>
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