<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <title><?php
/*
* Print the <title> tag based on what is being viewed.
*/
global $page, $paged;
 
wp_title( '|', true, 'right' );
 
// Add the blog name.
bloginfo( 'name' );
 
// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
echo " | $site_description";
 
// Add a page number if necessary:
if ( $paged >= 2 || $page >= 2 )
echo ' | ' . sprintf( __( 'Page %s', 'shape' ), max( $paged, $page ) );
 
?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>
  	
  	<!--Apple Touch Icon--!>
  	<link rel="apple-touch-icon" href="<?php echo get_bloginfo('template_directory');?>/library/i/apple-touch-icon.png">
	
  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>
  
  	<!-- Superheader -->
  	<div id="super-header" class="hidden-xs">
  		<div class="container">
  		<a class="pks-wordmark-logo" href="<?php echo get_site_url(); ?>">Phi Kappa Sigma Beta Theta Chapter at TCU</a>
  		</div>
  		
  	</div>
  	<!-- Navigation -->
	<nav id="navbar" class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				<i class="fa fa-bars fa-fw fw-icon-white"></i>
        	</button>
        	
        	<a class="visible-xs navbar-brand display-block navbar-btn" href="<?php echo site_url(); ?>">Phi Kappa Sigma | Beta Theta</a>
			</div>
			
			<div class="navbar-collapse collapse navHeaderCollapse">
				<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
				
				<div class="navbar-text pull-right">
        		<i>Stellis aequus durando.</i>
        		</div>
        		
        	</div>
        	
		</div>
	</nav>
	<!-- End Nav -->
	<?php if (function_exists('bootstrap_breadcrumbs')) bootstrap_breadcrumbs(); ?>
