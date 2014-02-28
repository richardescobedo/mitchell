<?php get_header(); ?>
	
	<!-- Begin page content -->
	<div class="container">
	
		<div id="content" class="row">
			<div id="main" class="col-lg-8 col-md-8">
			
				<h1>Beta Theta News</h1>
				<?php /* Start the Loop */ if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<header>
						<div class="page-header"><h2 class="single-title" itemprop="headline"><?php the_title(); ?></h2></div>
					</header><!-- End of Article Header -->
						
					<p class="meta"><?php _e("Posted on", "wpbootstrap"); ?> <date datetime="<?php echo the_time('F, j, Y'); ?>" pubdate><?php the_date('F, j, Y'); ?></date> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <?php _e("in", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
				
					<section class="post-content text-justify clearfix">
						<?php the_content(); ?>
						
						<?php wp_link_pages(); ?>
					</section> 
					
					<!-- End of Article Section -->
					<footer>
						<p class="tags"><?php the_tags('',' ',''); ?></p>
						<?php edit_post_link( '<button class="btn btn-primary btn-xs"><strong>Edit this post</strong></button>', '', '', $id ); ?>
					</footer>
				</article><!-- End of Article -->
									
					
					
			
				<?php endwhile; ?>
				
		
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
		

<?php include(TEMPLATEPATH."/sidebar-sidebar2.php");?>
<?php get_footer();?>