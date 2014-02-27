<?php get_header(); ?>

	<!-- Begin page content -->
	<div class="container">     
		<div class="row">
			<div class="col-lg-8">
				<h1 class="page-title" itemprop="headline"><?php _e( "Uh-oh, y'all...", 'twentythirteen' ); ?></h1>
					<section class="text-justify post_content clearfix" itemprop="articleBody">
					<h3>It looks like our website is actin' up.</h3>
					
					<p>We're going to look into what went wrong here, but in the mean time, you can <a href="http://tcuphikaps.com/contact">drop us a line</a> with any questions, or search for what you were looking for using the search box below.</p>
					
					<?php get_search_form(); ?>
					
					</section>
			</div>	
	
<?php get_sidebar();?>
<?php get_footer();?>