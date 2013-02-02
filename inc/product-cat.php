<div id="cat">
	<div class="vline"></div>
	<h2>گروه بندی محصولات</h2>
	<nav>
		<?php
			wp_nav_menu( array(
				'theme_location'  => 'catproduct',
			    'container'       => false, 
			    'container_class' => '', 
			    'menu_class'      => '', 
			    'before'          => '',
			    'after'           => '',
			    'link_before'     => '',
			    'link_after'      => '',
			    'items_wrap'      => '<menu>%3$s</menu>'
			));
		?>
	</nav>
	<div class="hline"></div>
	<div class="badboy"></div>
</div>