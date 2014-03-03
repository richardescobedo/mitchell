
			<div class="col-xs-12 col-sm-12 col-md-4">
			
				<?php get_search_form(); ?>
				<br />
				
				<div class="panel panel-default clearfix">
					<div class="panel-heading"><h3 class="panel-title"><span>Get in Touch</span></h3></div>
						<div class="panel-body">
							<div class="btn-group-vertical btn-block">
								<a class="btn btn-primary btn-block" href="https://www.facebook.com/groups/64416576792/" type="button"><i class="fa fa-facebook fa-fw"></i> Beta Theta on Facebook</a>
								<a class="btn btn-primary btn-block" href="http://www.linkedin.com/groupInvitation?groupID=156115&sharedKey=1584AC73A27B" type="button"><i class="fa fa-linkedin fa-fw"></i> Beta Theta on LinkedIn</a>
							</div>
						</div>
				</div>
					
				<div class="panel panel-default clearfix">
					<div class="panel-heading"><h3 class="panel-title"><span>Alumni Central</span></h3></div>
						<div class="panel-body">
							<p>The Beta Theta Alumni Association hosts events for alumni each semester, so to be sure you're notified, make sure your contact information is always up to date.</p> 
							<div class="btn-group-vertical btn-block">
								<a class="btn btn-default btn-block" href="<?php echo get_site_url('','alumni/update-contact-information',''); ?>" type="button">Update your contact information</a>
								<a class="btn btn-default btn-block" href="<?php echo get_site_url('','alumni',''); ?>" type="button">Give back to Beta Theta</a>
							</div>
						</div>
				</div>
					
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
					
					<br />
						

				
			</div>
			
		</div>

	</div>