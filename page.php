<?php get_header(); ?>

	<!-- Begin page content -->
	<div class="container">
	
	<?php /* Start the Loop */ if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     
		<div class="row">
			<div id="main" class="col-lg-8 col-md-8">
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<header>
						<div class="page-header"><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1></div>
					</header>
					
					<section class="post_content text-justify clearfix" itemprop="articleBody">
					<?php the_content(); ?>
					</section> 
					
					<!-- End article -->
					<?php edit_post_link( '<button class="btn btn-primary btn-lg pull-right"><strong>Edit this page</strong></button>', '', '', $id ); ?>
					
				</article>
				
				<?php endwhile; else: ?>
					
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