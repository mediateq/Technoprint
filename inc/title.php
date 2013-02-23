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
		<?php
			}
		?>
	</div>
	<div id="bot-pic"></div>
</div>