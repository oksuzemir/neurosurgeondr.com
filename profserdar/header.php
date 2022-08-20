<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/style.css" />
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/fawicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png" rel="apple-touch-icon-precomposed">
	</head>
	<body>
		<main class="main-content">
		<div class="top-nav">
				<div class="konten">
					<div class="top-nav-left">
						<a href=""><i class="fa fa-phone"></i>05304729907</a>

						<span> <i class="fa fa-clock-o"></i> <?php pll_e('Monday/Friday:9-18'); ?></span>
					</div>
					<div class="top-nav-right">
						<a rel="nofollow" target="_blank" href="https://www.facebook.com/DrBakiAlbayrak/"><i class="fa fa-facebook-square"></i></a>
						<a rel="nofollow" target="_blank" href="https://www.instagram.com/prof.dr.serdarbakialbayrak/"><i class="fa fa-instagram"></i></a>
						<a rel="nofollow" target="_blank" href="https://api.whatsapp.com/send?phone=905304729907"><i class="fa fa-whatsapp"></i></a>
						<!-- <a href=""><i class="fa fa-language"></i></a> -->

					</div>
				</div>
			</div>
			<div class="bot-nav">
				<div class="konten">
					<div class="logo">
						<a href="<?php pll_e('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
					</div>
					<nav class="mobile-menu">
						<?php html5blank_nav(); ?>
					</nav>
					<div class="search-button">
						<i class="fa fa-search"></i>
					</div>
					<div id="burger-menu">
						<span></span>
					</div>
				</div>
			</div>


