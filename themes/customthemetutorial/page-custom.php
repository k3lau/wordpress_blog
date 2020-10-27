<?php get_header(); ?>
	<div class="row">
		<div class="col-sm-12">
			<?php
			$args =  array(
				'post_type' => 'my-custom-post',
				'orderby' => 'menu_order',
				'order' => 'ASC'
			);
            $custom_query = new WP_Query( $args );
			while ($custom_query->have_posts()) : $custom_query->the_post();
				// Contents of the custom Loop
			endwhile;
			?>
		</div> <!-- /.col -->
	</div> <!-- /.row -->
<?php get_footer(); ?>