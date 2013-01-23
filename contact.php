<?php include('./inc/header.php') ?>

<section class="contact">
	<div class="container">
		<!-- start Title of each page -->
		<div id="title-pages">
			<div id="top-pic"></div>
			<div id="main-pic">
				<div id="title">
					<h2>تماس با ما</h2>
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
							<li><a href="#"><p>تماس با ما</p></a><span></span></li>
							<li><a href="#"><p>خانه</p></a><span></span></li>
						</menu>
					</nav>
				</div>
				<div class="badboy"></div>
			</div>
			<div id="bot-pic"></div>
		</div>
		<!-- end Title of each page -->
		<div class="form-detail">
			<div class="form">
				<div class="tit"><p>تماس با ما</p></div>
				<div class="text"><p>با تشکر از بازدید سایت شما می توانید از راه زیر با ما تماس حاصل فرمائید.</p></div>
				<form action="mail.php" id="contact" method="post" target="_blank">
					<p><span>*</span> نام و نام خانوادگی</p>
					<input type="text"  class="text" name="name" id="name" autocomplete="off" />
					<p><span>*</span> ایمیل</p>
					<input type="text" class="text" name="email" id="email" autocomplete="off" />
					<p><span>*</span> پیام</p>
					<textarea name="message" id="message" cols="25" rows="5" ></textarea>
					<p>پر کردن فیلدهای <span>ستاره دار</span> الزامیست.</p>
					<input type="submit" class="button" id="submit" name="submit" value="ارسال" />
				</form>
			<div class="badboy"></div>
			</div>
			<div class="detail">
				<div class="phone-pic">
					<div class="map">
						<iframe width="211" height="322" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=208152577024565193217.0004c1c95d80b1d14a8b2&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=36.313362,59.561949&amp;spn=0.011135,0.009012&amp;z=15&amp;output=embed"></iframe>
					</div>
				</div>
			</div>
			<div class="badboy"></div>
		</div>
	</div>
</section>

<?php include('./inc/footer.php') ?>