<?php 
	get_template_part('./inc/header'); 
?>

<section class="sub-products">
	<div class="container">
		<!-- start Title of each page -->
		<?php get_template_part('./inc/title'); ?>
		<!-- end Title of each page -->
		<div class="one-produce">
				<div class="produce">
					<div class="pic">
						<?php
							$img_large = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
						?>
						<a rel='lightbox[group1]' href='<?php echo "$img_large[0]" ?>' ><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="detail">
						<div class="tit"><h2><?php the_title(); ?></h2></div>
						<div class="price"><p>قیمت: <b><?php echo get_post_meta(get_the_ID(),'product_price',true); ?> تومان</b></p></div>
						<div class="detail-text">
							<ul>
								<li>جزئیات</li>
							</ul>
							<div class="text">
								<h2>توضیحات محصول</h2>
								<p><?php the_content(); ?></p>
							</div>
						</div>
					</div>
					<div class="badboy"></div>
				</div>
				<!-- Start Categories of product -->
				<?php get_template_part('./inc/product-cat'); ?>
				<!-- End Categories of product -->
				<div class="badboy"></div>
		</div>
	</div>
</section>

<?php get_template_part('./inc/footer') ?>