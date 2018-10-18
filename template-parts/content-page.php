
<section class="page-default-top">
	<div class="container">
<?php 	the_title( '<h1>', '</h1>' ); ?>
	</div>
</section>
<section class="page-default">
<div class="container">
<div class="row">
<div class="col-md-9">
<?php if (has_post_thumbnail):
        
        the_post_thumbnail( 'pr-slider-image', [  'title' => 'Featured image'] ); 
        endif;?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'allmobilevideo-theme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'allmobilevideo-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php 
		allmobilevideo_theme_entry_footer(); 
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
</div>
<div class="col-md-3">
<?php
 get_sidebar(); ?>

</div>
</div>
</div>

</section>
