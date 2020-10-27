<?php get_header(); ?>
<div class="row">
    <div class="col-sm-8 blog-main">
        <?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
			endwhile;
			?>
        <?php
		if ( $link = get_next_posts_link() || $link = get_previous_posts_link() ) {
			echo '<nav>';
				echo '<ul class = "pager">';
					if ( $link = get_next_posts_link( 'Next' ) ) {
						echo '<li>'.$link.'</li>';
					};
					if ( $link = get_previous_posts_link( 'Previous' ) ) {
						echo '<li>'.$link.'</li>';
					};
					echo '</ul>';
					echo '</nav>';
		}
		?>
        <?php endif; ?>
    </div> <!-- /.blog-main -->
    <?php get_sidebar(); ?>
</div> <!-- /.row -->
<?php get_footer(); ?>