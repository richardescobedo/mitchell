<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shape
 * @since Shape 1.0
 */
 
get_header(); ?>

	<div class="container"><?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
     
		<div class="row">
			<div class="col-lg-8 text-justify">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
			
			<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
		</div>	


	<?php endwhile; ?>
	
<?php get_sidebar();?>
<?php get_footer();?>