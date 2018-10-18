<?php
/**
 * The template for displaying nosidebar
 * Template Name: No Sidebar
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
			 

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				?>

<section class="page-default-top">
	<div class="container">
<?php 	the_title( '<h1>', '</h1>' ); ?>
	</div>
</section>
<section class="page-default">
<div class="container">

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

</section>

				<?php

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php 
		$postID = $post->ID;
		$featuredSection =  get_post_meta($postID, 'FeaturedSection1', true); 
		$featuredSectionId  = get_page_by_path($featuredSection,  OBJECT,  'page' );
		 
 

if ($featuredSectionId){


		 ?>


<section class="featured-pages">
	<div class="other-services">
		<div class="container">
			<h4 class="">Our Services</h4>
		</div>

		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-4">
				<?php 
					
				get_featured_section('FeaturedSection1', $postID);  ?>
			</div>
			<div class="col-4">
				<?php get_featured_section('FeaturedSection2', $postID); ?>
			</div>
			<div class="col-4">
				<?php get_featured_section('FeaturedSection3', $postID); ?>
			</div>
		</div>
	</div>
	
</section>
<?php
 };
get_footer();
