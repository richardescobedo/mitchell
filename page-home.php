<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

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
			</div>


<?php get_sidebar();?>
<?php get_footer();?>