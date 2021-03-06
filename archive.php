<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */

get_header(); ?>

<header>
	<section class="news-top">
		<div class="container">
		<h1>Archives</h1>
			<?php the_archive_title( '<h2 class="page-title">', '</h2>' );
				 ?>
		</div>
	</section>
</header>
<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<section class="news-main-content">
							<div class="container">
								<div class="row">
									<div class="col-md-9">
										<div class="row">


		<?php
		if ( have_posts() ) : ?>
 
	 

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>





</div>
</div>
<div class="col-md-3">
<?php
 get_sidebar(); ?>



</div>
</div>
</div>
</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php
 
get_footer();















