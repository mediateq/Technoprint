<div id="title-pages">
	<div id="top-pic"></div>
	<div id="main-pic">
		<?php if (have_posts()) {
			the_post(); 
		?>
		<div id="title">
			<h2><?php the_title(); ?></h2>
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
		<?php
			}
		?>
	</div>
	<div id="bot-pic"></div>
</div>