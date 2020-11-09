<?php get_header(); ?>

<body>
    <div class="blog-masthead fixed-top page-header d-flex align-items-end">
        <div class="container">
            <nav class="blog-nav">
                <a class="blog-nav-item active" href="<?php echo get_bloginfo('wpurl');?>">Home</a>
                <?php wp_list_pages( '&title_li=' ); ?>
            </nav>
        </div>
    </div>

    <div class="container">
        <!-- <div class="blog-header">
            <h1 class="blog-title"><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
            <p class="lead blog-description"><?php echo get_bloginfo('description') ?></p>
        </div> -->
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