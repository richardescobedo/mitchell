
			<div class="col-xs-12 col-sm-12 col-md-4">
			
				<?php get_search_form(); ?>
				<br />
				<div class="panel panel-default clearfix">
				 <?php /*Panels loop begins*/?> 
					<div class="panel-heading"><h3 class="panel-title"><span>Beta Theta Bulletin</span></h3></div>
						<div class="panel-body">
							<?php $the_query = new WP_Query( 'showposts=3' );?>
							<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
						
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<header><a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a></header>
						
								<section class="text-justify"><?php global $more; $more = 0; ?><?php the_content('<br /><br /><button type="button" class="btn btn-primary btn-xs"> Read More<i class="fa fa-angle-double-right fa-fw"></i></button>'); ?></section>
								
								<?php if( $the_query->current_post < $the_query->post_count-1 ) echo '<hr />'; ?>
								
							</article>
							<?php endwhile;?>
						</div>
				</div>
				
				<div class="panel panel-default clearfix">					
					<a href="http://www.pks.org/pdf/PKSMC13.pdf"><img src="<?php echo get_bloginfo('template_directory');?>/library/i/maltese-cross-spring-13.png" class="display-block img-responsive" /></a>
					<div class="panel-banner">Maltese Cross – Spring '13</div>
				</div>
				<br />
				
			</div>
			
		</div>

	</div>