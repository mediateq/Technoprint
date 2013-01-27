<?php get_template_part('./inc/header') ?>

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
					<div class="search-box">
						<form action="">
							<input type="text" class="text" placeholder="جستجو" />
							<input type="submit" value="" class="submit" />
						</form>
					</div>
				</div>
				<div id="menu">
					<nav>
						<menu>
							<li><a href="#"><p>404</p></a><span></span></li>
							<li><a href="#"><p>صفحه اصلی</p></a><span></span></li>
						</menu>
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