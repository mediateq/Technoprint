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
						<a href="#">
							<img src="./images/others/pro1.png" alt="" />
							<h2 class="product-name">اسکنر</h2>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="./images/others/pro2.png" alt="" />
							<h2 class="product-name">پرینتر</h2>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="./images/others/pro3.png" alt="" />
							<h2 class="product-name">موس</h2>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="./images/others/pro4.png" alt="" />
							<h2 class="product-name">دوربین</h2>
						</a>
					</li>

					<li>
						<a href="#">
							<img src="./images/others/pro1.png" alt="" />
							<h2 class="product-name">اسکنر</h2>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="./images/others/pro2.png" alt="" />
							<h2 class="product-name">پرینتر</h2>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="./images/others/pro3.png" alt="" />
							<h2 class="product-name">موس</h2>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="./images/others/pro4.png" alt="" />
							<h2 class="product-name">دوربین</h2>
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