<?php get_header(); ?>
	
	<!-- Begin page content -->
	<div class="container">
	
		<div id="content" class="row">
			<div id="main" class="col-lg-8">
			
				<?php /* Start the Loop */ if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<header>
						<div class="page-header"><h2 class="page-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
					</header><!-- End of Article Header -->
						
					<p class="meta"><?php _e("Posted at", "wpbootstrap"); ?> <time datetime="<?php echo the_time('F-j-y'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <?php _e("in", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
				
					<section class="post-content text-justify clearfix">
						<?php the_content( __('<br /><br /><button type="button" class="btn btn-primary btn-xs"> Read More<i class="fa fa-angle-double-right fa-fw"></i></button>')); ?>
					</section> 
					
					<!-- End of Article Section -->
					<footer>
						<p class="tags"><?php the_tags('',' ',''); ?></p>
						<a href="<?php echo get_edit_post_link( $id, $context ); ?>"><button class="btn btn-primary btn-xs"><strong>Edit this post</strong></button></a>
					</footer>
				</article><!-- End of Article -->
									
					
					
			
				<?php endwhile; ?>
				
					
				<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
					
			</article>
			<?php endwhile; ?>
			</div>
		

<?php get_sidebar();?>
<?php get_footer();?>