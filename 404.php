<?php get_header(); ?>

	<!-- Begin page content -->
	<div class="container">     
		<div class="row">
			<div id="main" class="col-lg-8 col-md-8">
				<h1 class="page-title" itemprop="headline"><?php _e( "Uh-oh, y'all...", 'twentythirteen' ); ?></h1>
					<section class="text-justify post_content clearfix" itemprop="articleBody">
					<h3>It looks like our website is actin' up.</h3>
					
					<p>We're going to look into what went wrong here, but in the mean time, you can <a href="http://tcuphikaps.com/contact">drop us a line</a> with any questions, or search for what you were looking for using the search box below.</p>
					
					<p>
						<form class="hidden-sm hidden-xs" role="form" action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline">
							<fieldset>
								<div class="input-group">
									<input type="text" name="s" id="search" placeholder="<?php _e("Looking for something?","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
									<span class="input-group-btn">
										<button type="submit" class="btn btn-default"><?php _e('<i class="fa fa-search fa-fw"></i>',"wpbootstrap"); ?></button>
									</span>
								</div>
							</fieldset>
						</form>
					</p>
					
					<p><small>Chances are, though, Alex Shelly broke the site.</small></p>
					</section>
			</div>	
	
<?php include(TEMPLATEPATH."/sidebar-sidebar2.php");?>
<?php get_footer();?>