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
				</nav>
				<div class="badboy"></div>
			</div>
			<div class="detail-article">
				<div class="tit"><h2>بارکد چیست؟</h2></div>
				<div class="hline"></div>
				<div class="text">
					<p>
						با توجه به افزایش روز افزون شرکتهای تولیدی و تنوع محصولات ، استفاده از بارکد جهت صادرات و ردیابی فرآیندهای تولید به یکی از ملزومات مبدل گشته است ،با استفاده از این تکنولوژی می توان سریالی اختصاصی جهت متمایز نمودن کالاها از یکدیگر اختصاص داد. استانداردهای مختلفی به منظور تولید و استفاده از بارکد وجود دارد ،‌ که معتبرترین آنها استاندارد EAN/UCC می باشد که 90 درصد تجارت جهانی را پوشش می دهد. در ایران نیز بنا به توسعه صادرات کالاهای غیر نفتی به بازار جهانی در سال 1374 سازمانی با عنوان (مرکز ملی شماره گذاری کالا و خدمات ) زیر نظر موسسه مطالعات و پژوهشهای بازرگانی تاسیس گردید ، سپس کشور ما به عضویت موسسه بین المللی EAN International درآمد و شایان ذکر است که شرکت زبراسیا نیز در سال 1385 به عنوان سرگروه شرکت های فعال در زمینه ارائه تجهیزات و خدمات مبتنی بر بارکد و همکار منتخب آن سازمان معرفی گردیده است.اغلب بارکدهای استفاده شده در کشورهای مختلف 12 یا 13 رقمی می باشند، که از این استانداردهای بارکد جهت صادرات و اطلاعات آن سازمان می باشد که به شرح ذیل می باشد:
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('./inc/footer') ?>