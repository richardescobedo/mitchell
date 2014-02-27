<?php 
/**
 * Search
 */
 
 get_header(); ?>
	
	<!-- Begin Post Content -->
	<div class="container">
		<div class="row">
			<div class="col-lg-8 text-justify">
			
			
			<h1><span><?php _e("Search Results for","wpbootstrap"); ?>:</span> <?php echo esc_attr(get_search_query()); ?></h1>
			
			
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
<?php /* Create an HTML5 article section with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
				<header>
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
						<div class="page-header">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						</div>
						
						<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("in", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
				</header> <!-- end article header -->
					
				<section class="post_content clearfix">
					<?php the_excerpt('<span class="read-more">' . __("Read more on","wpbootstrap") . ' "'.the_title('', '', false).'" &raquo;</span>'); ?>
				</section> <!-- end article section -->
						
				<p class="tags"><?php the_tags(''); ?></p>
					
				<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
					
			</article>
			<?php endwhile; ?>
			<br />
			<?php posts_nav_link(); ?>
			<br /><br />
			</div>
		

<?php get_sidebar();?>
<?php get_footer();?>