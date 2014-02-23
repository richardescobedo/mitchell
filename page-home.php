<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

	<!-- Jumbotron -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 hidden-xs">
			<div class="jumbotron">

				<h1>Men of Honor Since 1850</h1>
				<img src="<?php echo get_bloginfo('template_directory');?>/library/i/home-shield.png" style="margin-left: 15px;" class="pull-right img-responsive" />
				<p>Welcome to the Beta Theta Chapter of Phi Kappa Sigma at Texas Christian University. We are a diverse group of young men bound together by common values: trust, honor, respect, knowledge, wisdom, responsibility and integrity.</p>
				<p>The fraternity has provided us with memories and experiences that resonate through our lives. We take great pride in the history and accomplishments of Beta Theta over the past 50-plus years.</p> 
				<p>If you are an alumnus, we encourage you to return. If you are new to TCU, we welcome you to visit our house and see why we are Men of Honor.</p>
				<button type="button" class="btn btn-primary btn-lg">Learn about Phi Kappa Sigma <i class="fa fa-angle-right"></i></button>
				

			</div>
			</div>


<?php get_sidebar();?>
<?php get_footer();?>