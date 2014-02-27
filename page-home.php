<?php
/*
Template Name: Homepage
*/
?>
<?php define('WP_USE_THEMES', false); get_header(); ?>

	<!-- Jumbotron -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 hidden-xs">
			<div class="jumbotron">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				
				<?php the_content(); ?>
				
				

			</div>
				<?php edit_post_link( '<button class="btn btn-primary btn-xs"><strong>Edit the homepage</strong></button>', '', '', $id ); ?>
			</div>
				
				<?php endwhile; ?>
				
			<!-- Mobile Welcome -->
			<div class="col-xs-12 col-sm-12 col-md-8 visible-xs">
				<div class="jumbotron">
					<div class="container">
						<img src="<?php echo get_bloginfo('template_directory');?>/library/i/shield.png" class="center-block" />
						<br />
							<div class="btn-group-vertical center-block">
							<a href="http://tcuphikaps.com/about" type="button" class="center-block btn btn-primary btn-lg">Learn about us <i class="fa fa-angle-right"></i> </a>	
							<a href="http://tcuphikaps.com/recruitment type="button" class="center-block btn btn-primary btn-lg">Become a Phi Kap <i class="fa fa-angle-right"></i> </a>
							</div>		
					</div>		
				</div>
			</div>
				
<?php get_sidebar();?>
<?php get_footer();?>