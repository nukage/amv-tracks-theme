<?php
/**
 * Template part for displaying page content on the homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */


			while ( have_posts() ) : the_post(); ?>

				
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'allmobilevideo-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->


				<?php // If comments are open or we have at least one comment, load up the comment template.
				 

			endwhile; // End of the loop.


?>


    <!-- Page Content -->
    <section class="icons pt-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s"> 
          <a href="#mobile" class="icon-links page-scroll">
              <div class="homeicons " data-wow-delay=".5s"><img src="<?php echo get_template_directory_uri()?>/img/icons-truck.png" alt="Generic placeholder image"  ></div>
              <h4>Mobile &amp; Rentals</h4>
              <p>The most advanced capabilities and equipment available</p>
            </a>
            </div><!-- /.col-sm-6 col-md-4 -->
            <div class="col-sm-6 col-md-4  wow fadeInUp" data-wow-delay=".6s">
              <a href="#post" class="icon-links page-scroll">            <div class="homeicons"><img src="<?php echo get_template_directory_uri()?>/img/icons-film.png" alt="Generic placeholder image"></div>
              <h4>Post</h4>
              <p>Edit, Integrate, Distribute, Digitize &amp; Closed Caption – all in one location.</p>
            </a>
            </div><!-- /.col-sm-6 col-md-4 -->
            <div class="col-sm-6 col-md-4  wow fadeInUp" data-wow-delay=".7s">
              <a href="#sales" class="icon-links page-scroll">           <div class="homeicons"><img src="<?php echo get_template_directory_uri()?>/img/icons-cam.png" alt="Generic placeholder image"></div>
              <h4>Sales</h4>
              <p>World’s Production Equipment Headquarters</p>
            </a>
            </div><!-- /.col-sm-6 col-md-4 -->
            <div class="col-sm-6 col-md-4  wow fadeInUp" data-wow-delay=".8s">
              <a href="#stages" class="icon-links page-scroll">            <div class="homeicons"><img src="<?php echo get_template_directory_uri()?>/img/icons-stages.png" alt="Generic placeholder image"  ></div>
              <h4>Stages</h4>
              <p>Cutting edge technology, effortless load-in access and ample support space</p>
            </a>
            </div><!-- /.col-sm-6 col-md-4 -->
            <div class="col-sm-6 col-md-4  wow fadeInUp" data-wow-delay=".9s">
              <a href="#digitalmedia" class="icon-links page-scroll">
                <div class="homeicons"><img src="<?php echo get_template_directory_uri()?>/img/icons-digitalmedia.png" alt="Generic placeholder image"></div>
                <h4>Digital Media</h4>
                <p>The only glass-to-glass live video provider with the experience to ensure that your live event is a success</p>
              </a>
              </div><!-- /.col-sm-6 col-md-4 -->
              <div class="col-sm-6 col-md-4  wow fadeInUp" data-wow-delay="1s""> <a href="#transport" class="icon-links page-scroll">
                <div class="homeicons"><img src="<?php echo get_template_directory_uri()?>/img/icons-videotransport.png" alt="Generic placeholder image"></div>
                <h4>Video Transport / IP</h4>
                <p>Reliable Domestic or International video movement over Satellite, Fiber or IP</p>
              </a>
              </div><!-- /.col-sm-6 col-md-4 -->
            </div>
          </div>
          <!-- /.container -->
        </section>
        <section class="infoboxes">
          <div class="ibox mobile light" id="mobile">
            <div class="container">
              <div class="row">
              <div class="col-md-6 text-center hidden-md-up">
                  <img class="img-responsive mt-md-5 " src="<?php echo get_template_directory_uri()?>/img/zurich-1.png" alt="">
                </div>
                <div class="col-md-6 descrip wow fadeInLeft">
                  <h3>Mobile &amp; Rentals</h3>
                  <p>AMV’s Mobile Division houses a wide range of options offering the most advanced capabilities and equipment available. From single live shots to large-scale multi camera productions – AMV can custom spec any unit or carry-pack to meet your needs.</p>
                  <a role="button"  class="btn btn-primary custom-btn wow fadeInLeft" href="<?php echo get_home_url(); ?>/mobile" data-wow-delay=".3s">View Mobile</a> <a role="button"  class="mt-md-2 mt-lg-0 btn btn-primary custom-btn wow fadeInLeft" href="<?php echo get_home_url(); ?>/rentals" data-wow-delay=".1s">View Rentals</a>
                </div>
                <div class="col-md-6 text-center hidden-sm-down">
                  <img class="img-responsive mt-md-5 wow fadeInRight" data-wow-delay=".5s" src="<?php echo get_template_directory_uri()?>/img/zurich-1.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="ibox stages dark" id="stages">
            <div class="container">
              <div class="row">
                <div class="col-md-6 text-center">
               
                </div>
                <div class="col-md-6 descrip wow fadeInRight">
                  <h3>Stages</h3>
                  <p>AMV’s Manhattan-based sound stages are conveniently located in Chelsea and Midtown West. Each stage is fully customizable to meet the needs of your production from beginning to end. Providing cutting edge technology, effortless load-in access and ample support space, AMV’s Sound Stages are able to accommodate all of your production needs. All of AMV's NY stages are Level 2 Qualified Production Facilities.</p>
                  <a role="button" class="btn btn-outline-secondary custom-btn wow fadeInRight" href="<?php echo get_home_url(); ?>/stage">View Stages</a>
                </div>
              </div>
            </div>
          </div>
          <div class="ibox post light" id="post">
            <div class="container">
              <div class="row">
              <div class="col-md-6 text-center mb-3 hidden-md-up">
                  <img class="img-responsive  wow fadeInLeft" data-wow-delay=".5s" src="<?php echo get_template_directory_uri()?>/img/home-post.png" alt="">
                </div>
                <div class="col-md-6 descrip wow fadeInLeft">
                  <h3>Post </h3>
                  <p>Seamless integration with live events, international distribution on multiple platforms, and the ability to provide a project home for multi-edit series – always innovative, always personally customized.</p>
                   <a role="button" class="btn btn-primary custom-btn wow fadeInLeft" href="<?php echo get_home_url(); ?>/post">View Post</a> 
                </div>
                <div class="col-md-6 text-center  hidden-sm-down">
                  <img class="img-responsive  wow fadeInRight" data-wow-delay=".5s" src="<?php echo get_template_directory_uri()?>/img/home-post.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="ibox digitalmedia dark" id="digitalmedia">
            <div class="container">
              <div class="row">
                <div class="col-md-6 text-center">
                  <img class="img-responsive wow fadeInLeft" data-wow-delay=".5s" src="<?php echo get_template_directory_uri()?>/img/home-digitalmedia.png" alt="">
                </div>
                <div class="col-md-6 descrip wow fadeInRight">
                  <h3>Digital Media</h3>
                  <p>AMV Digital Media is the only glass-to-glass live video provider with the experience to ensure that your live event is a guaranteed success.  All the pieces of this puzzle are finally in place. AMVDM is now ready to handle full production and distribution of your 4K events. </p>
                  <a role="button" class="btn btn-outline-secondary custom-btn wow fadeInRight" href="http://www.amvdm.com" target="_blank">View Digital Media</a>
                </div>
              </div>
            </div>
          </div>
          <div class="ibox sales light" id="sales">
            <div class="container">
              <div class="row">
               <div class="col-md-6 text-center mb-3 hidden-md-up">
                  <img class="img-responsive wow fadeInRight" data-wow-delay=".5s" src="<?php echo get_template_directory_uri()?>/img/home-sales.png " alt="">
                </div>
                <div class="col-md-6 descrip wow fadeInLeft">
                  <h3>Sales</h3>
                  <p>As the “World’s Production Equipment Headquarters,” AMV Broadcast Sales offers the world’s top production equipment at competitive prices along with expert installation, training and support. </p>
                  <a role="button" class="btn btn-primary custom-btn wow fadeInLeft" href="<?php echo get_home_url(); ?>/sales">View Sales</a>
                </div>
                <div class="col-md-6 text-center hidden-sm-down ">
                  <img class="img-responsive wow fadeInRight" data-wow-delay=".5s" src="<?php echo get_template_directory_uri()?>/img/home-sales.png" alt="">
                </div>
              </div>
            </div>
          </div>
           <div class="ibox transport dark" id="transport">
            <div class="container">
              <div class="row">
            <div class="col-md-5 text-center">
                  
                </div>
                <div class="col-md-7 descrip wow fadeInRight ">
                  <h3>Video Transport / IP</h3>
                  <p>  Reliable Domestic or International video movement over Satellite, Fiber or IP</p>
                  <div class="btnholder">
                    <a role="button" class="btn btn-outline-secondary custom-btn wow fadeInRight" href="<?php echo get_home_url(); ?>/ip-services">IP<br>Services</a>
                
                  <a role="button" class="btn btn-outline-secondary custom-btn wow fadeInRight" href="<?php echo get_home_url(); ?>/gateway">AMV  <br>Gateway</a>
                   <a role="button" class="btn btn-outline-secondary custom-btn wow fadeInRight" href="<?php echo get_home_url(); ?>/satellite-services">Westar <br>Satellite Services</a>
                   <a role="button" class="btn btn-outline-secondary custom-btn wow fadeInRight" href="<?php echo get_home_url(); ?>/master-control">Westar  <br> Master Control</a>
                </div></div>
               
              </div>
            </div>
          </div>
        </section>
        <section class="contact" id="contact">
          <div class="container">
            <div class="row">
              <div class="col-md-6 contactform">
              <h3>Contact Us</h3>
              <ul>
                <li><img src="<?php echo get_template_directory_uri()?>/img/home-contact-mobile.png"><a href="tel:2127271234" target="_blank">(212) 727-1234</a></li>
                <li><img src="<?php echo get_template_directory_uri()?>/img/home-contact-email.png" alt=""><a href="mailto:CONTACT@AMVCHELSEA.COM" target="_blank">CONTACT@AMVCHELSEA.COM</a></li>
                <li><img src="<?php echo get_template_directory_uri()?>/img/home-contact-fax.png"><a href="tel:2122556644" target="_blank">(212) 255-6644</a></li>
              </ul>
              <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.704196785838!2d-73.9974590488192!3d40.74653397922675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259baa94ccc93%3A0x226963c36d090dce!2sAll+Mobile+Video!5e0!3m2!1sen!2sus!4v1498850989502" width="350" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
              </p>
              </div>
              <div class="col-md-6">
<h3 class="mb-4">Send us a Message</h3>
                <p>Simply fill out the quick form below with your contact info and a member of our team will be back in touch with you ASAP, usually within 1 business day. Thank you for visiting us.</p>
                <?php echo do_shortcode( '[contact-form-7 id="202" title="Contact form 1"]' ); ?>
            
              </div>
            </div>
          </div>
        </section>

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
