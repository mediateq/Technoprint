<?php 
	/*
		Template Name: 404
	*/
	get_template_part('./inc/header'); 
?>

<section class="not-found">
	<div class="container">
		<!-- start Title of each page -->
		<?php get_template_part('./inc/title-pages'); ?>
		<!-- end Title of each page -->
		<div class="notfound-404">
			<div class="detail">
				<div class="tit"><p>صفحه مورد نظر یافت نشد</p></div>
				<div class="text"><p>صفحه ای که شما به دنبال آن می باشید متاسفانه یافت نشد. برخی از لینک هایی که ممکن است برای شما مفید واقع شوند:</p></div>
				<div class="menu">
					<nav>
						<menu>
							<li><a href="#">صفحه اصلی</a></li>
							<li><a href="#">نقشه سایت</a></li>
							<li><a href="#">تماس با ما</a></li>
						</menu>
					</nav>
				</div>
			</div>
			<div class="pic"></div>
		</div>
	</div>
</section>

<?php get_template_part('./inc/footer') ?>