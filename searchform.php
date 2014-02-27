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