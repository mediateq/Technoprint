<!doctype html>
<html>
<head>
	
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); wp_title(); ?></title>

	<script>
	  (function() {
	    var cx = '002646456999169240394:epcygcydjuu';
	    var gcse = document.createElement('script');
	    gcse.type = 'text/javascript';
	    gcse.async = true;
	    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
	        '//www.google.com/cse/cse.js?cx=' + cx;
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(gcse, s);
	  })();
	</script>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/1styles.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/flexslider.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lightbox.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/zepto.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/lightbox.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
	
    <!--[if lt IE 9]>
		<script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
	<![endif]-->

	<link rel="Shortcut Icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />

</head>
<body>
	<header>
		<!-- Top Header -->
		<a id="myAnchor"></a>
		<div class="top-header">
			<div class="container">
				<div class="menu">
					<nav>
						<?php
							wp_nav_menu( array(
								'theme_location'  => 'topheadermenu',
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
						<div class="badboy"></div>
					</nav>
				</div>
				<div class="left">
					<div class="tel">
						<p>
							Tel: +98(511) 767 7671
						</p>
					</div>
				</div>
				<div class="badboy"></div>
			</div>
		</div>
		<!-- Main Header -->
		<div class="main-header">
			<div class="ray">
				<div class="container">
					<div class="menu">
						<nav>
							<?php
								wp_nav_menu( array(
									'theme_location'  => 'mainmenu',
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
							<div class="badboy"></div>
						</nav>
					</div>
					<div class="logo ltr">
						<a href="./"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="techno print" /><h2><span class="techno">Techno </span><span class="print"> Print</span></h2></a>
					</div>
					<div class="badboy"></div>
				</div>
			</div>
		</div>
	</header>
	<div class="shadow-top"></div>