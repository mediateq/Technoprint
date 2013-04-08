<?php 
	get_template_part('./inc/header');
?>

<section class="not-found">
	<div class="container">
		<!-- start Title of each page -->
		<div id="title-pages">
			<div id="top-pic"></div>
			<div id="main-pic">
				<div id="title">
					<h2>صفحه یافت نشد</h2>
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
		<div class="notfound-404">
			<div class="detail">
				<div class="tit"><p>صفحه مورد نظر یافت نشد</p></div>
				<div class="text"><p>صفحه ای که شما به دنبال آن می باشید متاسفانه یافت نشد. برخی از لینک هایی که ممکن است برای شما مفید واقع شوند:</p></div>
				<div class="menu">
					<nav>
						<menu>
							<li><a href="./">صفحه اصلی</a></li>
							<li><a href="http://localhost/Technoprint/محصولات/">محصولات</a></li>
							<li><a href="http://localhost/Technoprint/تماس-با-ما/">تماس با ما</a></li>
						</menu>
					</nav>
				</div>
			</div>
			<div class="pic"></div>
		</div>
	</div>
</section>

<?php get_template_part('./inc/footer') ?>