<?php 
	/*
		Template Name: article
	*/
	get_template_part('./inc/header') 
?>

<section class="articles">
	<div class="container">
		<!-- start Title of each page -->
		<?php get_template_part('./inc/title'); ?>
		<!-- end Title of each page -->
		<div class="one-article">
			<div class="sidebar-menu">
				<nav>
					<?php
						wp_nav_menu( array(
							'theme_location'  => 'articlemenu',
						    'container'       => false, 
						    'container_class' => '', 
						    'menu_class'      => '', 
						    'before'          => '',
						    'after'           => '',
						    'link_before'     => '<p>',
						    'link_after'      => '</p><span></span>',
						    'items_wrap'      => '<menu>%3$s</menu>'
						));
					?>
					<div class="badboy"></div>
				</nav>
			</div>
			<?php 
				if (have_posts()) {
					the_post();
			?>
			<div class='detail-article'>
				<div class='tit'><h2> <?php the_title(); ?> </h2></div>
				<div class='hline'></div>
				<div class='text'>
					<p>
						<?php the_content(); ?>
					</p>
				</div>
			</div>
			<?php 
				}
			?>
			<div class="badboy"></div>
		</div>
	</div>
</section>

<?php get_template_part('./inc/footer') ?>