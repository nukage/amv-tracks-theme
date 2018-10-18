<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */

?>



<div class="col-md-6">
 
 


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card">
	<?php if (has_post_thumbnail):  ?>
     
 <a href="<?php echo get_permalink(); ?>">
       <?php the_post_thumbnail( 'amv-slider-image', [ 'class' => 'card-img-top wp-post-image', 'title' => 'Featured image'] ); ?>

       </a>
        <?php endif;?>
         <div class="card-block">
	<header class="entry-header">

		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title card-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
		<?php //echo get_the_date(); ?>
		</div><!-- .entry-meta -->
		<div class="card-text excerpt">
			<p><?php  

echo(get_the_excerpt());
		// the_excerpt(); 

		?></p></div>
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			excerpt('30')

			 
		?>
	</div><!-- .entry-content -->
</div><!-- .card-block-->
	 </div><!-- .card-->
</article><!-- #post-## -->

</div>



