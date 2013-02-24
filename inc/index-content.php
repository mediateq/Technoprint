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
			
			<?php the_content(); ?>
			
			<div class="hline"></div>
		</div>
		<div class="products">
			<div class="first">
				<div class="frame">
					<a href="http://technoprints.ir/?products=%D8%A7%D8%B3%DA%A9%D9%86%D8%B1"><img src="<?php bloginfo('template_url'); ?>/images/scanners.png" alt="barcode scanner" /></a>
				</div>
				<div class="desc">
					<div class="title"><h2>بارکد خوان</h2></div>
					<div class="txt">
						<ul>
                            <li><p>بارکدخوان های بیسیم</p></li>
                            <li><p>بارکدخوان های چند پرتو</p></li>
                            <li><p>بارکدخوان های دوبعدی</p></li>
                           <li><p>دستگاه جمع آوری داده (هندهلد)</p></li>
                        </ul>
					</div>
					<div class="link">
						<p><a href="http://technoprints.ir/?products=%D8%A7%D8%B3%DA%A9%D9%86%D8%B1">بیشتر...</a></p>
					</div>
				</div>
			</div>
			<div class="second">
				<div class="frame">
					<a href="http://technoprints.ir/?products=%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1"><img src="<?php bloginfo('template_url'); ?>/images/printer.png" alt="barcode printer" /></a>
				</div>
				<div class="desc">
					<div class="title"><h2>چاپگر بارکد</h2></div>
					<div class="txt">
						<ul>
                            <li><p>چاپگرهای لیبل</p></li>
                            <li><p>چاپگرهای کارت</p></li>
                            <li><p>چاپگرهای صدور فیش</p></li>
                        </ul>
					</div>
					<div class="link">
						<p><a href="http://technoprints.ir/?products=%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1">بیشتر...</a></p>
					</div>
				</div>
			</div>
			<div class="third">
				<div class="frame">
					<a href="http://technoprints.ir/?products=%D9%86%D8%B1%D9%85-%D8%A7%D9%81%D8%B2%D8%A7%D8%B1"><img src="<?php bloginfo('template_url'); ?>/images/application.png" alt="barcode software" /></a>
				</div>
				<div class="desc">
					<div class="title"><h2>نرم افزار</h2></div>
					<div class="txt">
						<ul>
                            <li><p>نرم افزارهای حسابداری</p></li>
                            <li><p>نرم افزارهای توزین و لیبلینگ کالا</p></li>
                            <li><p>نرم افزارهای ردیابی کالا</p></li>
                            <li><p>نرم افزارهای کنترل خط تولید</p></li>
                            <li><p>نرم افزارهای مدیریت انبار</p></li>
                        </ul>
					</div>
					<div class="link">
						<p><a href="http://technoprints.ir/?products=%D9%86%D8%B1%D9%85-%D8%A7%D9%81%D8%B2%D8%A7%D8%B1">بیشتر...</a></p>
					</div>
				</div>
			</div>
			<div class="forth">
				<div class="frame">
					<a href="http://technoprints.ir/?products=%D9%85%D9%88%D8%A7%D8%AF-%D9%85%D8%B5%D8%B1%D9%81%DB%8C"><img src="<?php bloginfo('template_url'); ?>/images/Consumables.png" alt="barcode material" /></a>
				</div>
				<div class="desc">
					<div class="title"><h2>مواد مصرفی</h2></div>
					<div class="txt">
						<ul>                       
                            <li><p>انواع برچسب های بارکد</p></li>
                            <li><p>انواع ریبون ها</p></li>
                            <li><p>انواع کاغذهای حرارتی</p></li>
                        </ul>
					</div>
					<div class="link">
						<p><a href="http://technoprints.ir/?products=%D9%85%D9%88%D8%A7%D8%AF-%D9%85%D8%B5%D8%B1%D9%81%DB%8C">بیشتر...</a></p>
					</div>
				</div>
			</div>
			<div class="badboy"></div>
		</div>
		<div class="partner">
			<div class="hline"></div>
			<div class="first">
				<a href="http://www.zebra.com/gb/en.html" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/Zebra-Logo.png" alt="zebra"></a>
			</div>
			<div class="second">
				<a href="http://www.datalogic.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/datalogic.png" alt="datalogic"></a>
			</div>
			<div class="third">
				<a href="http://www.motorolasolutions.com/US-EN/Home" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/symbol_logo.png" alt="symbol"></a>
			</div>
			<div class="forth">
				<a href="http://honeywell.com/Pages/Home.aspx" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/honeywell-logo.png" alt="honeywell"></a>
			</div>
			<div class="fifth">
				<a href="http://www.metrologic.com.au" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/metrologic-logo.png" alt="metrologic"></a>
			</div>
			<div class="badboy"></div>
		</div>
	</div>
	<?php
		}
	?>
</section>