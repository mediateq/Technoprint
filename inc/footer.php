	<footer>
		<!-- Main Footer -->
		<div class="main-footer">
			<div class="container">
				<div class="first">
					<div class="tit">
						<h2>مطالب مرتبط</h2>
					</div>
					<?php $args = array(
					    'numberposts' => 2,
					    'offset' => 0,
					    'category' => 0,
					    'orderby' => 'post_date',
					    'order' => 'DESC',
					    'include' => '',
					    'exclude' => '',
					    'meta_key' => '',
					    'meta_value' =>'',
					    'post_type' => 'article',
					    'post_status' => 'draft, publish, future, pending, private',
					    'suppress_filters' => true 
					    ); 

						$recent_posts = wp_get_recent_posts( $args );

						foreach( $recent_posts as $recent ){

							$url     = get_permalink($recent["ID"]);
							$title   = $recent["post_title"];
							$pict    = get_the_post_thumbnail($recent["ID"], "medium");

							echo "<div class='title'>
	                               	<h2> $title </h2>
								  </div>
								  <div class='text'>
									<a href=\"$url\"><p>متن مقاله اول متن مقاله اول متن مقاله اول متن مقاله اول متن مقاله اول</p></a>
								  </div>";
						}
					?>
				</div>
				<div class="second">
					<div class="tit">
						<h2>لینک های مفید</h2>
					</div>
					<div class="click-here">
						<a href="#" title="">
							<img src="<?php bloginfo('template_url'); ?>/images/footer-useful-link.png" alt="" />
						</a>
						<p>لینک های مفید خود را در این قسمت قرار داده تا کاربر...</p>
					</div>
					<div class="badboy"></div>
					<div class="click-here">
						<a href="#" title="">
							<img src="<?php bloginfo('template_url'); ?>/images/footer-useful-link.png" alt="" />
						</a>
						<p>لینک های مفید خود را در این قسمت قرار داده تا کاربر...</p>
					</div>
					<div class="badboy"></div>
					<div class="click-here">
						<a href="#" title="">
							<img src="<?php bloginfo('template_url'); ?>/images/footer-useful-link.png" alt="" />
						</a>
						<p>لینک های مفید خود را در این قسمت قرار داده تا کاربر...</p>
					</div>
					<div class="badboy"></div>
				</div>
				<div class="third">
					<div class="tit">
						<h2>پیگیری ما</h2>
					</div>
					<ul>
						<li class="rss"><a href="#"></a></li>
						<li class="twitter"><a href="#"></a></li>
						<li class="facebook"><a href="#"></a></li>
						<li class="flickr"><a href="#"></a></li>
						<li class="youtube"><a href="#"></a></li>
					</ul>
				</div>
				<div class="forth">
					<div class="tit">
						<h2>پیوستن به ما</h2>
					</div>
					<form action="<?php bloginfo('template_url') ?>/mail.php" method="post" id="contact" target="ifrm">
						<p>* نام و نام خانوادگی</p>
						<input type="text" class="text" name="name" id="name" autocomplete="off" />
						<p>* ایمیل</p>
						<input type="text" type="text" class="text" name="email" id="email" autocomplete="off" />
						<p>پر کردن فیلدهای ستاره دار الزامیست</p>
						<button type="submit"><p>ارسال</p></button>
					</form>
					<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
					<div class="badboy"></div>
				</div>
				<div class="badboy"></div>
			</div>
		</div>
		<!-- Bot Footer -->
		<div class="bot-footer">
			<div class="container">
				<div class="top">
					<a href="#"><p>بالا</p></a>
					<div class="badboy"></div>
				</div>
				<div class="copyright">
					<p>
						کپی رایت 1391 - کلیه حقوق این سایت متعلق به تکنو پرینت می باشد.
					</p>
				</div>
				<div class="menu">
					<nav>
						<?php
							wp_nav_menu( array(
								'theme_location'  => 'footermenu',
							    'container'       => false, 
							    'container_class' => '', 
							    'menu_class'      => '', 
							    'before'          => '<p>',
							    'after'           => '</p>',
							    'link_before'     => '',
							    'link_after'      => '',
							    'items_wrap'      => '<menu>%3$s</menu>'
							));
						?>
						<div class="badboy"></div>
					</nav>
				</div>
				<div class="badboy"></div>
			</div>
		</div>
	</footer>
</body>
</html>