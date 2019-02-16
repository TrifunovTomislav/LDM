<!doctype html>

<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<?php wp_head(); ?>
			</head>
	<body <?php body_class(); ?>>
			<!-- header -->
			<header class="header" role="banner">
					<!-- nav -->
					<nav>
                    	
                        <div id="site-navigation" class="main-navigation" role="navigation">
                        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        	<img src="<?php echo get_template_directory_uri(); ?>/images/01-Logo.png" id="nav-logo" />
                            </a>
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                         </div> 
                         <a id="simple-menu" href="#sidr"><i class="menu-icon" id="menu-icon"></i></a>
                       		<div id="sidr">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                            </div>
					</nav>
					<!-- /nav -->
                    
			<div class="clear"></div>
			</header>
            
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-mobile.png" id="mobile-logo" />
			<!-- /header -->
