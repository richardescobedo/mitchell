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
						<header>
							<h1><?php _e("Sorry, y'all, something went wrong.", "wpbootstrap"); ?></h1>
						</header>
					
						<section class="post_content">
							<p><?php _e('<p>Either what you are looking for has gone missing or Alex Shelly did something that broke our website. In either event, we are looking into it.</p> <p>If you have a question, please <a href="http://tcuphikaps.com/contact">contact us</a>.</p>', "wpbootstrap"); ?></p>
						</section>
					</article>
				
				<?php endif; ?>
			</div>
		

<?php get_sidebar();?>
<?php get_footer();?>