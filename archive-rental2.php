<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
	<?php endif; ?>



	<div class="container row">
		<div class="row">
			<div class="col-sm-4">
				<h2>Categories</h2>

<?php 

// $terms = get_terms('rentals', array(
//     'post_type' => 'rental',
//     'fields' => 'all',
//     'orderby' => 'date',
//     'order' => 'ASC'

// ));
//  $term_list .= '<a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '">' . $term->name . '</a>';
//         if ( $count != $i ) {
//             $term_list .= ' &middot; ';
//         }
//         else {
//             $term_list .= '</p>';
//         }
//     }
//     echo $term_list;
// }

 

$taxonomy = 'rentals';
$terms = get_terms($taxonomy); // Get all terms of a taxonomy

if ( $terms && !is_wp_error( $terms ) ) :
?>
    <ul>
        <?php foreach ( $terms as $term ) { ?>
            <li><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
        <?php } ?>
    </ul>
<?php endif;?>

 


<!-- https://wordpress.stackexchange.com/questions/238210/how-to-display-child-categories-of-current-categorys-parent-category
 -->

     <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
          	 
			

 
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>



			</div>	
			<div class="col-sm-8">
				some text
			</div>	
		</div>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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
				get_template_part( 'template-parts/post/content', get_post_format() ); ?>

<ul class="nav nav-tabs">
<li class="active"><?php 
			if(get_field(brand)) :	
			echo "<p><strong>Brand:</strong> ";
			 the_field(brand); 
			 echo "</p>";
			 endif;
			 if(get_field(model)) :	
			echo "<p><strong>Model:</strong> ";
			 the_field(model); 
			 echo "</p>";
			 endif; ?></li>
<li></li>
</ul>
			
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
  <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
</ul>

			<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>HOME</h3>
    <p>Some content.</p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>






<?php
			endwhile;

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
