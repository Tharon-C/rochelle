<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' /> 
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="<?php bloginfo('description'); ?>">

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
		<div class="wrapper clear">
			<!-- color behind header -->

		
			<div class="header-bkg color-1"></div>
		

			<!-- /color behind header -->
			<!-- header -->
			<header class="header clear" role="banner">
             <!-- logo -->
				    <div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="flex logo-img">
						</a>
                    </div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav clear" role="navigation">
    
                        <div class="clear">    
                  
                           
                            <?php  add_custom_nav_menu('menu-1'); ?>
                 </div>
					</nav>
					<div class="cart clear">  
                  <?php dynamic_sidebar('side-nav-t'); ?>                             
                </div>
					        <?php dynamic_sidebar('side-nav-b'); ?>
					<!-- /nav -->
      		<?php get_footer(); ?>
      		
      		</header>
			<!-- /header -->
