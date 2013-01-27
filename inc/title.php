<div id="title-pages">
	<div id="top-pic"></div>
	<div id="main-pic">
		<?php 
			if (have_posts()){
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
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'titlemenu',
					    'container'       => false, 
					    'container_class' => '', 
					    'menu_class'      => '', 
					    'before'          => '',
					    'after'           => '',
					    'link_before'     => '<p>',
					    'link_after'      => '</p>',
					    'items_wrap'      => '<menu>%3$s</menu>'
					));
				?>
			</nav>
		</div>
		<div class="badboy"></div>
		<?php
			}
		?>
	</div>
	<div id="bot-pic"></div>
</div>