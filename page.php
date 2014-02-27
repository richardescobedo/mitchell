<?php get_header(); ?>

	<!-- Begin page content -->
	<div class="container">
	
	<?php /* Start the Loop */ if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     
		<div class="row">
			<div class="col-lg-8 text-justify">
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<header>
						<div class="page-header"><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1></div>
					</header>
					
					<section class="post_content clearfix" itemprop="articleBody">
					<?php the_content(); ?>
					</section> 
					
					<!-- End article -->
	
					<a href="<?php echo get_edit_post_link( $id, $context ); ?>"><button class="btn btn-primary btn-lg pull-right"><strong>Edit this page</strong></button></a>
					
				</article>
				
				<?php endwhile; else: ?>
					
					<article id="post-not-found">
	
<?php get_sidebar();?>
<?php get_footer();?>