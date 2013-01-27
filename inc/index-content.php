<script>
	Galleria.loadTheme('<?php bloginfo('template_url'); ?>/js/galleria.classic.js');

	Galleria.run('#galleria');
</script>

<section class="middle">
	<?php
		if (have_posts()){
			the_post();
	?>
	<div class="container">
		<div class="slideshow ltr">
			<div class="content"> 
		        <div id="galleria">
	        		<?php
						$slide_attach= array(
							'numberposts' => '-1',
							'orderby '=> 'menu_order',  
							'order'=> 'ASC',  
							'post_mime_type' => 'image', 
							'post_parent' => $post->ID, 
							'post_status' => null, 
							'post_type' => 'attachment'
						);

						$images= get_children($slide_attach);

						if ($images){

							foreach ($images as $img) {
								
								$img_img= wp_get_attachment_image($img->ID,'large');
								$img_src= wp_get_attachment_image_src($img->ID,'large');

								echo "
									<a href=\"$img_src[0]\">
										<img src=\"$img_src[0]\" data-big=\"$img_src[0]\" />
									</a>
									 ";
							}
						}
					?> 		           
		        </div>
		    </div>
		</div>
		<div class="text">
			<div class="hline"></div>
			<p>
				پیام مورد نظر پیام مورد نظر پیام مورد نظر پیام مورد نظر پیام مورد نظر پیام مورد نظر پیام مورد نظر پیام مورد نظر پیام مورد نظر پیام مورد نظر پیام مورد نظر پیام مورد نظر
			</p>
			<div class="hline"></div>
		</div>
		<div class="products">
			<div class="first">
				<div class="frame">
					<a href="#"><img src="./images/others/frame1.jpg" alt="" /></a>
				</div>
				<div class="desc">
					<div class="title"><h2>بارکد خوان</h2></div>
					<div class="txt">
						<p>
							توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی
						</p>
					</div>
					<div class="link">
						<p><a href="#">...بیشتر</a></p>
					</div>
				</div>
			</div>
			<div class="second">
				<div class="frame">
					<a href="#"><img src="./images/others/frame2.jpg" alt="" /></a>
				</div>
				<div class="desc">
					<div class="title"><h2>چاپگر بارکد</h2></div>
					<div class="txt">
						<p>
							توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی
						</p>
					</div>
					<div class="link">
						<p><a href="#">...بیشتر</a></p>
					</div>
				</div>
			</div>
			<div class="third">
				<div class="frame">
					<a href="#"><img src="./images/others/frame3.jpg" alt="" /></a>
				</div>
				<div class="desc">
					<div class="title"><h2>نرم افزار</h2></div>
					<div class="txt">
						<p>
							توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی
						</p>
					</div>
					<div class="link">
						<p><a href="#">...بیشتر</a></p>
					</div>
				</div>
			</div>
			<div class="forth">
				<div class="frame">
					<a href="#"><img src="./images/others/frame4.jpg" alt="" /></a>
				</div>
				<div class="desc">
					<div class="title"><h2>مواد مصرفی</h2></div>
					<div class="txt">
						<p>
							توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی توضیحات اضافی
						</p>
					</div>
					<div class="link">
						<p><a href="#">...بیشتر</a></p>
					</div>
				</div>
			</div>
			<div class="badboy"></div>
		</div>
		<div class="partner">
			<div class="hline"></div>
			<div class="first">
				<a href="http://www.zebra.com/gb/en.html" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/others/Zebra-Logo.png" alt="zebra"></a>
			</div>
			<div class="second">
				<a href="http://www.datalogic.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/others/datalogic-Logo.png" alt="datalogic"></a>
			</div>
			<div class="third">
				<a href="http://www.motorolasolutions.com/US-EN/Home" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/others/symbol_logo.png" alt="symbol"></a>
			</div>
			<div class="forth">
				<a href="http://honeywell.com/Pages/Home.aspx" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/others/honeywell-logo.png" alt="honeywell"></a>
			</div>
			<div class="fifth">
				<a href="http://www.metrologic.com.au" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/others/metrologic-logo.png" alt="metrologic"></a>
			</div>
			<div class="badboy"></div>
		</div>
	</div>
	<?php
		}
	?>
</section>