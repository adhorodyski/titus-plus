<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- wrapper -->
        		<div class="wrapper">

        			<!-- header -->
        			<header class="header" role="banner">

        					<!-- primary nav -->
        			        <div class="header-inner header-inner__primary">

        			            <nav class="nav container" role="navigation">
                                    <?php wp_nav_menu(
                                        array("theme_location" => "primary-menu", "container_class" => "menu-container menu-container__primary" )
                                    ); ?>
                                    <a href="/index.php/kontakt" class="contact-us">Kontakt</a>
                                    <button class="hamburger-menu close">
                                        <span class="hamburger-menu__icon"></span>
                                    </button>
                                </nav>

        			        </div>
        					<!-- /nav -->

        					<!-- secondary nav -->
        			        <div class="header-inner header-inner__secondary">

        			            <nav class="nav container" role="navigation">
        			                <a class="logo" href="/index.php">
        			                    <img class="logo__image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" />
        			                </a>
                                    <?php wp_nav_menu(
                                        array("theme_location" => "secondary-menu", "container_class" => "menu-container menu-container__secondary" )
                                    ); ?>
                                    <button class="hamburger-menu open">
                                        <span class="hamburger-menu__icon"></span>
                                    </button>
                                </nav>

        			        </div>
        					<!-- /nav -->

        			</header>
        			<!-- /header -->
