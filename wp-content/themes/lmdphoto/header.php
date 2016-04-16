<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lmdphoto
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-1.12.2.min.js"   integrity="sha256-lZFHibXzMHo3GGeehn1hudTAP3Sc0uKXBXAzHX1sjtk="   crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<div id="page" class="site">
    
    <?php
	if (is_page('home')) {
	    echo '<div class="loading-div"></div>';
	}
    ?>
    
    <div id="nav-wrapper">      
        <header id="masthead" class="site-header" role="banner">                  
                <div class="site-branding">
                    <?php
                    if ( is_front_page() && is_home() ) : ?>
                        <h1>
                            <a href="/" rel="home" class="site-title">LMD Photography</a>
                        </h1>
                    <?php else : ?>
                        <p>
                            <a href="/" rel="home" class="site-title">LMD Photography</a>
                        </p>
                    <?php
                    endif;
                    ?>
                    <a href="#" class="mobile-open">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/menu.png" />
                    </a> 			
                </div>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                    <a href="#" class="mobile-close">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/close.png" />
                    </a>
                </nav>          
        </header>
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="site-info">
                <p>&copy; 2016 | LMD Photography</p>
            </div>
	    </footer>
    </div>
    
    <div id="content-wrapper" class="site-content">
        
