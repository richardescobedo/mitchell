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
	
	<!-- Begin Post Content -->
	<div class="container">
		<div class="row">
			<div class="col-lg-8 text-justify">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
<?php /* Create an HTML5 article section with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
				<header>
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
						<div class="page-header">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						</div>
						
						<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
				</header> <!-- end article header -->
					
				<section class="post_content clearfix">
					<?php the_content( __("Read more &raquo;") ); ?>
				</section> <!-- end article section -->
						
						
				<p class="tags"><?php the_tags(); ?></p>
					
				<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
					
			</article>
			<?php endwhile; ?>
			</div>
		

<?php get_sidebar();?>
<?php get_footer();?>