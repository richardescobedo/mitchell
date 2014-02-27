
			<div class="col-xs-12 col-sm-12 col-md-4 text-justify">
			
				<?php get_search_form(); ?>
				
				<hr />
				
				<img src="http://placehold.it/400x400&text=Maltese+Cross+Newsletter" class="display-block img-responsive img-rounded hidden-sm hidden-xs" />
				
				<div class="page-header"><h3><span>Beta Theta Bulletin</span></h3></div>

						<?php $the_query = new WP_Query( 'showposts=3' );?>
						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
						
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<header><a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a></header>
						
						<section><?php the_excerpt(__('(more…)')); echo string_limit_words($excerpt,2); ?></section>
						
						<?php if( $the_query->current_post < $the_query->post_count-1 ) echo '<hr />'; ?>
						
					</article>
						<?php endwhile;?>

			<br /><br />
			</div>
			
		</div>

	</div>