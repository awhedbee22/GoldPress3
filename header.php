<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--><html class="no-js" lang="en">
<!--<![endif]-->

<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<meta charset="utf-8">
		<meta name="Author" content="State of California & Department of Developmental Services" />
		<meta name="Keywords" content="California, government" />
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- http://t.co/dKP3o1e -->
		<meta name="HandheldFriendly" content="True">
		<!-- for Blackberry, AvantGo -->
		<meta name="MobileOptimized" content="320">

		<!-- selectivizr.com, emulates CSS3 pseudo-classes and attribute selectors in Internet Explorer 6-8 -->
		<!--[if (lt IE 9) & (!IEMobile)]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/libs/selectivizr-min.js"></script>
		<![endif]-->

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Asap+Condensed:400,600|Source+Sans+Pro:400,700" rel="stylesheet">

		<!-- Activate ClearType for Mobile IE -->
		<!--[if IE]>
		<meta http-equiv="cleartype" content="on">
		<![endif]-->
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/libs/html5shiv.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/libs/respond.min.js"></script>
		<![endif]-->
		<!-- Include Google Analytics -->
		


		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header role="banner" id="header" class="global-header fixed">
				<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>

				<!-- Include Utility Header -->
				<?php get_template_part( 'partials/utility', 'header' ); ?>
				<!-- Settings Bar -->
				<?php get_template_part( 'partials/settings', 'bar' ); ?>
				<!-- Include Branding -->
				<?php get_template_part( 'partials/branding' ); ?>
				<!-- Include Mobile Controls -->
				<?php get_template_part( 'partials/mobile', 'controls' ); ?>

				<div class="navigation-search">
					<!-- Include Navigation -->
					<?php get_template_part( 'partials/navigation' ); ?>

					<div id="head-search" class="search-container featured-search fade">
						<!-- Include Search -->
						<?php get_template_part( 'partials/search' ); ?>
					</div>

				</div>

				<div class="header-decoration"></div>
			</header>
			<!-- /header -->
