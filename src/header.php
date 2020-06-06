<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <?php wp_head();?>
    </head>
    <body </php body_class();?>
        <!-- wrapper -->
        		<div class="wrapper">

        			<!-- header -->
        			<header class="header" role="banner">

        					<!-- nav -->
        					<nav class="nav container" role="navigation">
        						<?php wp_nav_menu(); ?>
        						<a href="/index.php/kontakt" class="contact-us">Kontakt</a>
        					</nav>
        					<!-- /nav -->

        			</header>
        			<!-- /header -->
