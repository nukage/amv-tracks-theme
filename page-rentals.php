<?php
/**
 * The template for displaying rental pages
 * Template Name: Rentals
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
			 

get_header(); 
    $cate = get_queried_object();
$cateID = $cate->term_id;
 ?>


	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php 
$args=array(
  'name' => 'rentals'
);
$output = 'objects'; // or names
$taxonomies=get_taxonomies($args,$output); 
if  ($taxonomies) {
  foreach ($taxonomies  as $taxonomy ) {
    echo '<p>' . $taxonomy->name . '</p>';
  };
  
}
else {
  	echo "<p>Didnt work</p>";
  };
?>


<?php

$taxonomies = get_taxonomies(); 
foreach ( $taxonomies as $taxonomy ) {
    echo '<p>' . $taxonomy . '</p>';
}


$args=array(
  none, rentals
);

echo get_the_term_list( null , 'rentals', '<p>', '</p><p>', '</p>');


 echo $cateID;
if (is_page()){
	echo 'THIS IS RENTALS HOME';
	 get_template_part( 'template-parts/content', 'rentalcategories' );
}

elseif (get_term_children( $cateID, 'rentals' )){
	echo 'THIS IS SUBCATEGORY INDEX';
	 get_template_part( 'template-parts/content', 'rentalcategories' );
?>

<?php
    $cate = get_queried_object();
    if ($cate->term_id){
      $cateID = $cate->term_id;
    }
    else{
      $cateID = 0;
    }

echo '<h1>'.$cateID.'</h1>';
    $args = array(
    	'taxonomy' => 'rentals',
    	'parent' => $cateID,
    	  'hierarchical' => 0,
 
      // 'orderby' => 'id',
      'hide_empty'=> 0,
      // 'child_of' => 5, //Child From Boxes Category 
  );
  $categories = get_terms($args);

  ?>

<div class="row">
 <?php 
  foreach ($categories as $cat) { ?>
 <div class="card col-sm-4">
 <?php
  	if (function_exists('z_taxonomy_image')) {
  		 
  		
  	 
  			$attr = array(
  			'class' => 'img-responsive, card-img-top',
  			);
  		z_taxonomy_image($cat->term_id, 'full', $attr);
  		 
 
 
  	};?>
  		 
       
        <?php echo '<h4 class="valignmiddle uppercase text-center card-title "><a href="'.get_site_url().'/rentals/'.$cat->slug.'">'.$cat->name.'<img src="'.$cat->term_icon.'" alt=""  class="alignleft"/>'.'<br />'.'<span class="solutions">'.$cat->description.'</span>'.'</a></h4>';
        //echo '<br />';
        $args2= array("orderby"=>'name', "category" => $cat->cat_ID); // Get Post from each Sub-Category
        $posts_in_category = get_posts($args2);
        foreach($posts_in_category as $current_post) {
            echo '<span>';
            ?>
            <li type='none' style='list-style-type: none !important;'><a href="<?=$current_post->guid;?>"><?='+ '.$current_post->post_title;?></a></li>
            <?php
            echo '</span>';
        }?>
      </div><!--card-->
  <?php  }
?>
</div><!--row-->


<?php 

}
 
else{
	echo 'THIS IS A PRODUCT INDEX';


};
?>
		<?php
		if ( have_posts() ) : ?>
			<div class="row">
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
</div>
<div class="row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
				

<div class="col-sm-4">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php allmobilevideo_theme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

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
		<?php allmobilevideo_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
</div>
				


			<?php endwhile; ?>
</div>
			<?php the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
 ?>
