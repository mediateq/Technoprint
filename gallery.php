<?php 
	/*
		Template Name: gallery
	*/
	get_template_part('./inc/header'); 
?>

<section class="gallery">
	<div class="container">
		<!-- start Title of each page -->
		<?php get_template_part('./inc/title'); ?>
		<!-- end Title of each page -->
		<div class="gallery-pic">
			<ul>
				<?php
					$gall_attach= array(
								'numberposts' => '-1',
								'orderby '=> 'menu_order',  
								'order'=> 'DESC',  
								'post_mime_type' => 'image', 
								'post_parent' => $post->ID, 
								'post_status' => null, 
								'post_type' => 'attachment'
					);

					$images= get_children($gall_attach);

					if ($images){

						foreach ($images as $img) {

							echo "<li>
								 	 <div class='pic'>";

								$img_med  = wp_get_attachment_image($img->ID,'medium');
								$img_larg = wp_get_attachment_image_src($img->ID,'large');
								
								echo "	<a rel='lightbox[group1]' href=\"$img_larg[0]\" title=\"$img->post_content\"> $img_med";
								echo "		<div class='effe'></div> 
									  	</a>
									  </div>";
								echo "<div class='tit'><h2> $img->post_content </h2></div>";
							
							echo "</li>";
						}						

					}
					else echo "<p class='no-image'>تصویری در گالری موجود نمی باشد</p>";
				?>
			</ul>
			<div class="badboy"></div>
		</div>
	</div>
</section>

<?php get_template_part('./inc/footer'); ?>