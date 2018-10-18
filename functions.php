<?php
/**
 * allmobilevideo-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package allmobilevideo-theme
 */

if ( ! function_exists( 'allmobilevideo_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function allmobilevideo_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on allmobilevideo-theme, use a find and replace
	 * to change 'allmobilevideo-theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'allmobilevideo-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'amv-slider-image', 725, 430, true );

	add_image_size( 'amv-isotope-image', 500, 350, true );

	add_image_size( 'amv-slider-thumb', 75, 50, true );

	add_image_size( 'amv-featured-thumb', 360, 230, true );


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'allmobilevideo-theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'allmobilevideo_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'allmobilevideo_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function allmobilevideo_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'allmobilevideo_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'allmobilevideo_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function allmobilevideo_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'allmobilevideo-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'allmobilevideo-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'allmobilevideo_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function allmobilevideo_theme_scripts() {
	wp_enqueue_style( 'allmobilevideo-theme-style', get_stylesheet_uri() );
	wp_enqueue_script( 'allmobilevideo-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array() , false, true );
	wp_enqueue_script( 'flexsettings', get_template_directory_uri() . '/js/flex-settings.js', array() , false, true );
	wp_register_script( 'imagesloaded', get_theme_file_uri( '/js/libs/imagesloaded.pkgd.min.js' ), array( 'jquery' ), '4.1.1', true );
	wp_register_script( 'isotope', get_theme_file_uri( '/js/jquery.isotope.js' ), array( 'imagesloaded' ), '3.0.1', true );
	wp_enqueue_script( 'isotope-settings-custom', get_theme_file_uri( '/js/isotope.settings-custom.js' ), array( 'isotope' ), '1.0', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array() , false, true );
	wp_enqueue_script( 'wow-settings', get_template_directory_uri() . '/js/wow-settings.js', array() , false, true );

	wp_register_script( 'Tether', get_template_directory_uri() . '/js/tether.min.js', array(), '1.0.0', true );
     wp_enqueue_script('Tether');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '20151215', true );
		wp_enqueue_script( 'SmoothScroll', get_template_directory_uri() . '/js/SmoothScroll.js', array(), '20151215', true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );


	wp_enqueue_script( 'allmobilevideo-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'allmobilevideo_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function get_term_parents( $id, $taxonomy, $link = false, $separator = '/', $nicename = false, $visited = array() ) {
    $chain = '';
    $parent = &get_term( $id, $taxonomy );
    if ( is_wp_error( $parent ) )
            return $parent;
 
    if ( $nicename )
            $name = $parent->slug;
    else
            $name = $parent->name;
 
    if ( $parent->parent && ( $parent->parent != $parent->term_id ) && !in_array( $parent->parent, $visited ) ) {
            $visited[] = $parent->parent;
            $chain .= get_term_parents( $parent->parent, $link, $separator, $nicename, $visited );
    }
 
    if ( $link )
            $chain .= '<a href="' . get_term_link( $parent->slug, $taxonomy ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $parent->name ) ) . '">'.$name.'</a>' . $separator;
    else
            $chain .= $name.$separator;
 
    return $chain;
}
/* Shortcode to display linked URLs to files uploaded via Types post meta
* 
* @arg file_url optionally will hold a specific URL to process & display a link to the file directly
* with the link display being the file name & extension
* 
* @arg types_field optionally will hold the field name of a Types field for File uploads
* and dsiplay each (if multiple) as the file name with extension linked to full file download URL
*
*/
 
 
function dynamic_contact($postID){ ?>
<section class="dynamic_contact" id="contactform">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			              <h2>Contact <?php echo get_the_title($postID);?></h2>
			              <?php echo get_post_meta($postID, 'contactlist', true); ?>
			              
			</div>
			<div class="col-md-6">
					<h3 class="mb-4">Send us a Message</h3>
	                <p>Simply fill out the quick form below with your contact info and a member of our team will be back in touch with you ASAP, usually within 1 business day. Thank you for visiting us.</p>
	                <?php if ($postID == 195 || $postID == 216 ) {
	                 
	                echo do_shortcode( '[contact-form-7 id="396" title="Westar"]' );

	            } elseif($postID == 69){
	            	 echo do_shortcode( '[contact-form-7 id="601" title="Rentals"]' );
					}elseif($postID == 588){
	            	 echo do_shortcode( '[contact-form-7 id="609" title="Sales"]' );
	            	 }elseif($postID == 509){
	            	 echo do_shortcode( '[contact-form-7 id="914" title="IP Services"]' );


	            }else {
	               echo do_shortcode( '[contact-form-7 id="202" title="Contact form 1"]' );
	            }  ?>
	         </div>
        </div>
    </div>
</section>
<?php };

function amv_product_navigation($thetype){

 $next_post = get_next_post();
 if ($next_post == NULL){ 
 
$next_post_q = get_posts(array('numberposts' => 1, 'post_type' => array($thetype), 'order' => 'ASC'));
$next_post = $next_post_q[0];
};
 $next_post_url = get_permalink($next_post->ID);
 $next_post_thumb = get_the_post_thumbnail($next_post->ID,'thumbnail');
 $next_post_title = get_the_title($next_post->ID);


 $previous_post = get_previous_post();
if ($previous_post == NULL){ 
 
$previous_post_q = get_posts(array('numberposts' => 1, 'post_type' => array($thetype)));
$previous_post = $previous_post_q[0];
};


 $previous_post_url = get_permalink($previous_post->ID);
 $previous_post_thumb = get_the_post_thumbnail($previous_post->ID,'thumbnail');
 $previous_post_title = get_the_title($previous_post->ID);


?>

<?php if ($previous_post){ ?>
	<a rel='prev' href='
<?php echo $previous_post_url?>' 
data-toggle='tooltip' data-html='true' data-placement='left' title='
<?php echo $previous_post_thumb; ?>
<span class="product-hover-title">
<?php echo $previous_post_title . "</span>"   ?>'>ARROW</a>
<?php } else{
	$latest = get_posts(array('numberposts' => 1));
	$url = get_permalink($latest[0]->ID);
	echo "<a href='" . $url . "'>ARROW</a>";
} ;
    


  the_title( '<h2 class="entry-title">', '</h2>' );?>
  <?php if ($next_post){ ?>
<a rel='next' href='
<?php echo $next_post_url?>' 
data-toggle='tooltip' data-html='true' data-placement='right' title='
<?php echo $next_post_thumb; ?>
<span class="product-hover-title">
<?php echo $next_post_title . "</span>"   ?>'>ARROW</a>
<?php } ;

  };

function amv_product_navi(){


 // Previous/next post navigation.
    $next_post = get_next_post();
    $previous_post = get_previous_post();
    the_post_navigation( array(
        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
            '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' . 
            '<span class="post-title">%title</span>' . get_the_post_thumbnail($next_post->ID,'thumbnail'),
        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> '  . 
            '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
            '<span class="post-title">%title</span>' . get_the_post_thumbnail($previous_post->ID,'thumbnail'),
    ) );
}

function get_featured_section($key, $postID){
	if (get_post_meta($postID, $key, true)){
	$featuredSection =  get_post_meta($postID, $key, true);
	$featuredSectionId  = get_page_by_path($featuredSection,  OBJECT,  'page' );?>
	<div class=" ">
	<div class="card">
	 <a href="<?php echo get_permalink($featuredSectionId);?>" title="<?php get_the_title($featuredSectionId);?>"  >

		<?php echo get_the_post_thumbnail($featuredSectionId, 'amv-featured-thumb' , array( 'class' => 'card-img-top' ));?>
		  <div class="card-block">
		 <h4 class="card-title"><?php echo get_the_title($featuredSectionId->ID);?></h4>
		   <p class="card-text"><?php echo get_post_meta($featuredSectionId->ID, 'Excerpt', true);?></p>
		  </div>
	</a>
	</div>
	</div>
	<?php
	};
};
function amv_list_taxonomies($type, $name){
	?>
	 <li class="filter-list col-md-12 col-4 pr-md-0 pr-3">
        
         <ul class='' data-group='<?php echo $type; ?>'>
            
          <?php
      
          $terms = get_terms($type);

          
            if ( !empty( $terms ) && !is_wp_error( $terms ) ) { ?>
              <h5><?php echo $name ?></h5>
              <?php
                foreach( $terms as $term) {
                    ?>
                    <li>
                        <input type='checkbox' value='<?php echo $type . '-' . $term->slug; ?>' id='<?php echo $type . '-' . $term->slug; ?>'>
                        <label for='<?php echo $type . '-' . $term->slug; ?>'><?php echo $term->name; ?></label>
                    </li>
                    <?php
                }
            }
            ?>
             
        
        </ul>
         </li>
<?php
}

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

//add_filter('WP_SMUSH_API_TIMEOUT',  'wpmu_api_timeout');
function wpmu_api_timeout() {
 return 300;
}


/* ------------------------------------------------------------------*/
/* ADD PRETTYPHOTO REL ATTRIBUTE FOR LIGHTBOX */
/* ------------------------------------------------------------------*/

add_filter('wp_get_attachment_link', 'rc_add_rel_attribute');
function rc_add_rel_attribute($link) {
	global $post;
	return str_replace('<a href', '<a rel="prettyPhoto[pp_gal]" href', $link);
}



// Add Shortcode
function social_icons() { ?>
<div class="sidebar_social">
<h2 class="widget-title">Follow Us</h2>
	<ul>
		<li><a target="_blank" href="https://www.facebook.com/allmobilevideo/"><span>Facebook</span></a></li>
		<li><a target="_blank" href="https://twitter.com/allmobilevideo"><span>Twitter</span></a></li>
		<li><a target="_blank" href="https://www.linkedin.com/company/all-mobile-video"><span>LinkedIn</span></a></li>
	</ul>
</div>
<div class="clearfix"></div>

<?php
}
add_shortcode( 'social_icons', 'social_icons' );


add_shortcode( 'my_file_name', 'wpml_hard_link'); // Actually activate the shortcode
function wpml_hard_link($atts) {
    global $post; // So we can get the post meta later on
 
    $url = "{$atts['file_url']}";
    $types = "wpcf-{$atts['types_field']}";
     
    if ($types) { // if the types_field argument was provided 
 
        $urls = get_post_meta($post->ID,$types); // let's get the (potentially multiple) values
     
        $content = ''; // Setting up a variable to hold the links so we can return it later
     
        foreach ($urls as $fileurl) { // Let's iterate for each of the multiple values
            $arr = explode('/',$fileurl); // Split it up so that we can just grab the end part, the filename
            $content .= '<a href="'.$fileurl.'">'.end($arr).'</a><br />'; // Create the link and store it in the $content variable
        }
         
        return $content; // Return the content as the shortcode value
     
    } else {  // Else we didn't use the fields_type argument, we just needed one URL we provided explicitly
            $arr = explode('/',$url); // So let's split that URL up so we can grab the end
            return '<a href="'.$url.'">'.end($arr).'</a>'; // And return the resultant link
     
    } // We're done!
     
}
function wpdocs_excerpt_more( $more ) {
    return sprintf( '...</p> <a class="read-more" href="%1$s">%2$s <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


add_action( 'wp_footer', 'thankyou_wp_footer' );
 
function thankyou_wp_footer() {
?>
<script type="text/javascript">
// document.addEventListener( 'wpcf7mailsent', function( event ) {
//     location = '/thank-you/';
// }, false );
</script>
<?php
}
