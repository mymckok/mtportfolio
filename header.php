<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package mtportofolio
 */

wp_enqueue_script(
	'frontend-script',
	get_stylesheet_directory_uri() . '/js/frontend.js',
	array( 'jquery' )
);

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<!--<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->
		</div>

		<div class="wbo-menu-bottom">
        <nav class="wbo-menu-pages">
			<ul class="menu">
			<ul><?php wp_list_pages('title_li=&number=1'); ?></ul>
			</ul>
        </nav>
        
        <div class="site-search">
			<aside id="search-2" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>
		</div>

		<div class="wbo-menu-right">
        <nav class="wbo-menu-sns">
			<?php mtportofolio_list_sns(); ?>
        </nav>

        
        </div>
	    	    
	</header><!-- #masthead -->

	<div id="content" class="site-content">
