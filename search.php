<?php get_header(); ?>
	
	<!-- Begin page content -->
	<div class="container">
	
		<div id="content" class="row">
			<div id="main" class="col-lg-8 col-md-8">
			
				<div class="page-header"><h1><span><?php _e("Search Results for","wpbootstrap"); ?>:</span> <?php echo esc_attr(get_search_query()); ?></h1></div>
			
				<?php /* Start the Loop */ if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<header>
						<div class="page-header"><h2 class="page-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
					</header><!-- End of Article Header -->
						
					<p class="meta"><?php _e("Posted on", "wpbootstrap"); ?> <date datetime="<?php echo the_time('F, j, Y'); ?>" pubdate><?php the_date('F, j, Y'); ?></date> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <?php _e("in", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
				
					<section class="post-content text-justify clearfix">
						<?php the_excerpt( __('<br /><br /><button type="button" class="btn btn-primary btn-xs"> Read More<i class="fa fa-angle-double-right fa-fw"></i></button>')); ?>
					</section> 
					
					<!-- End of Article Section -->
					<footer>
						<p class="tags"><?php the_tags('',' ',''); ?></p>
						<?php edit_post_link( '<button class="btn btn-primary btn-xs"><strong>Edit this post</strong></button>', '', '', $id ); ?>
					</footer>
				</article><!-- End of Article -->
									
					
					
			
				<?php endwhile; ?>
				
				<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
				
					<?php page_navi(); // use the page navi function ?>
					
				<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="pager">
								<li class="previous"><?php next_posts_link(_e('<i class="fa fa-long-arrow-left"></i> Older Entries', "wpbootstrap")) ?></li>
								<li class="next"><?php previous_posts_link(_e('Newer Entries <i class="fa fa-long-arrow-right"></i>', "wpbootstrap")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
				
							<h3><?php _e("Sorry about that.", "wpbootstrap"); ?></h3>
						
					
						<section class="post_content">
							<p><?php _e('<p>We could not find anything that matched your search terms.</p> <p>If you have a question, please <a href="http://tcuphikaps.com/contact">contact us</a>.</p>', "wpbootstrap"); ?></p>
						</section>
					</article>
				
				<?php endif; ?>
			</div>
		

<?php include(TEMPLATEPATH."/sidebar-sidebar2.php");?>
<?php get_footer();?>