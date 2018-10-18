<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package allmobilevideo-theme
 */

get_header(); ?>
<header>
	<section class="news-top">
		<div class="container">
		<h1>404 not found</h1>
		<h2><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'allmobilevideo-theme' ); ?></h2>
			 
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

					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'allmobilevideo-theme' ); ?></p>

					<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );

						// Only show the widget if site has multiple categories.
			 
					?>


 
 
  
 



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
