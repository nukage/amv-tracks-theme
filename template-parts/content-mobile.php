<?php
/**
 * Template part for displaying page content on the homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */
?>    <!-- Page Content -->
   
<section class="sectionhero">
  <div class="sectionoverlay">
    <div class="col-xl-6 offset-xl-3 pl-md-5 pr-md-5 sectionherotext">
    <h1>PREPPED &amp; STAFFED TO ENSURE YOUR SUCCESS</h1>
   <!--   <h2 >AMV’s Mobile Division houses a wide range of options offering the most advanced capabilities and equipment available. From single live shots to large-scale multi camera productions – AMV can custom spec any unit or carry-pack to meet your needs.</h2> -->
    <h4>Coast-to-Coast Production Coverage</h4>
       <a role="button" class="btn btn-outline-secondary custom-btn wow fadeInUp animated page-scroll splashbtn" href="#contactform"   style="visibility: visible; animation-name: fadeInRight;">CONTACT US</a>
    <div class="pb-xl-5"></div>
</div>
    <div class="sectionherooverlay" id="scrollhere">
          <h3>Mobile Production</h3>
       
    </div>
  </div>
</section>
<section class="mobile-products container-fluid">
<div class="row">
<div class="col-sm-12 col-md-3 col-lg-2">
 <section class="mobile-filter widget">
       <ul class="row">
         <?php amv_list_taxonomies('mputype', 'Type') ?>
         <?php amv_list_taxonomies('videoformat', 'Video Format') ?>
         <?php amv_list_taxonomies('bodystyle', 'Body Style') ?>
         <?php amv_list_taxonomies('numberofcameras', 'Number of Cameras') ?>
       </ul>
    </section><!-- .filter .widget -->
    <div class='hidden-sm-down'>
 

       <section class='sidebarcontactinfo'>
    <h4>Inquiries</h4>
      <ul> 
     
      
      
      <li>
        <ul>
        <li><a target="_blank" href="mailto:contact@amvchelsea.com">contact@amvchelsea.com</a></li>
          <li><a target="_blank" href="tel:2127271234">(212)727-1234</a> o</li>
          <li><a target="_blank" href="tel:2122556644">(212)255-6644</a> f</li>
        </ul>
      </li></ul>
    </section>
    </div>
  </div>
<div class="col-sm-12 col-md-9 col-lg-10">   
  <div id="noresults" class="invisible col-sm-6 offset-2"><p>There are no results for this combination of filters, try selecting different options or click below to clear the filters. </p>
  <button role="button" class="btn btn-primary custom-btn" id="clearfilters" href="#">Clear Filters</button></div>
  <div class="row no-gutters isotope-container">
<?php
 $query = new WP_query(
 
  array(
        'post_type' => array('mobile'),
        'post_status' => 'publish',
        'meta_key'      => 'wpcf-order',
        'orderby'     => 'meta_value_num',
        'order' => 'ASC',
        'posts_per_page' => '-1'
      )
    );
 $posts = $query->posts;

                foreach ($posts as $post) {  ?>
 
<?php $allClasses = get_post_class();   ?>  
 <div class="col-6 col-sm-4 col-md-3   product  <?php foreach ($allClasses as $class) { echo $class . " "; } ?>">
          <div class="">
           <a href="<?php echo get_permalink($post);?>" title="<?php echo the_title();?>"  >
                  <?php echo get_the_post_thumbnail($post, 'amv-isotope-image' , array( 'class' => 'img-responsive' ));?>
                  <div class="caption"><?php echo the_title() ?></div>
                  <span class="description">
                  <h5><?php echo the_title();?></h5>
                    <?php the_excerpt() ?>
                  </span>
            </a>
          </div>
        </div>
    <?php
} 
?>
  </div>
  </div>
  </div>
</section>
<section class="featured-pages">
  <div class="other-services">
    <div class="container">
      <h4 class="">Other Services Available</h4>
    </div>
    
  </div>
  <div class="container">
    <div class="row">
      
      <div class="col-4">

        <?php 
        $postID = 95;
        
        get_featured_section('FeaturedSection1', $postID); ?>
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
<?php dynamic_contact($postID) ?>
    <!-- Page Content -->
   <!--end page content -->
        <?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'allmobilevideo-theme' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

