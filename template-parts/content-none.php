<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */

?>

<section class="no-results not-found"> 
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'allmobilevideo-theme' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'allmobilevideo-theme' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'allmobilevideo-theme' ); ?></p>

					<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );

						// Only show the widget if site has multiple categories.
			 
				 


		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'allmobilevideo-theme' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
