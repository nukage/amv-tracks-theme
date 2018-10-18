<?php
/**
 * The template for displaying all pages
 * Template Name: Homepage
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */

get_header(); ?>
<meta property="og:image"              content="http://www.allmobilevideo.com/wp-content/uploads/revslider/promo-grammys/02-grammys-trophy-billboard-1548.jpg" />
<div class="amv-grammys">

 <section style="display: none;" class="sectionhero">
  <div class="sectionoverlay">




<div class="  sectionherotext" >
    <h1>AMV AT THE 60th 
GRAMMY AWARDS
</h1>
 <h4>The Grammys return to NYC and All Mobile Video won’t miss a beat of the action!
<br>Check out all the services AMV is providing to bring it together.</h4>
<!--   <h2>AMV Gateway’s teleport provides a superior mix of data and video service. Both domestic and international antennas are available as well as multi-format global fiber connectivity. </h2> -->
  <a role="button" class="btn btn-outline-secondary custom-btn wow fadeInUp animated page-scroll splashbtn" href="#contact"   style="visibility: visible; animation-name: fadeInRight;">CONTACT US <br> FOR YOUR NEXT PROJECT</a>
  <a class="page-scroll" href="#gateway"><img class="dn-arro " src="<?php echo get_template_directory_uri()?>/img/promos/dn-arro.png"></a>
</div>
 

  </div>

</section>

<?php echo do_shortcode( '[rev_slider alias="promo-grammys"]' ); ?>

    <!-- Page Content -->
  
        <section class="infoboxes">
          <div class="ibox gateway light" id="gateway">
            <div class="container">
              <div class="row">
              <div class="col-md-6 text-center hidden-md-up">
                  <a href="/gateway/"  target="_blank"><img class="img-responsive mt-md-5 " src="<?php echo get_template_directory_uri()?>/img/amv-gateway.png" alt=""></a>
                </div>
                <div class="col-md-6 descrip wow fadeInLeft">
                  <h3>AMV Gateway: <span>live promos &amp;  Interviews</span></h3>
                  <p>Starting Jan 25th, Live Promos will be transmitted by AMV Gateway directly from Madison Square Garden until the night of the show on CBS. Billboard Magazine will also utilize AMV’s fiber interconnectivity to broadcast live interviews and their pool feed from the Red Carpet.</p>
                  <p><em>Click <a href="/gateway/"  target="_blank">here</a> to find out how AMV Gateway can get your live production on air!</em></p>
                  <a role="button"  class="btn btn-primary custom-btn wow fadeInLeft" href="<?php echo get_home_url(); ?>/gateway" data-wow-delay=".3s"  target="_blank">AMV GATEWAY</a>  
                </div>
                <div class="col-md-6 text-center hidden-sm-down">
                  <a href="/gateway/"  target="_blank" class="hoverme"><img class="img-responsive mt-md-5 wow fadeInRight" data-wow-delay=".5s" src="<?php echo get_template_directory_uri()?>/img/amv-gateway.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="ibox crossroads dark" id="crossroads">
            <div class="container">
              <div class="row">
                 <div class="col-md-6 text-center">
                  <a href="/mobile/crossroads/" target="_blank" class="hoverme"><img class="img-responsive wow fadeInLeft" data-wow-delay=".5s" src="<?php echo get_template_directory_uri()?>/img/promos/crossroads-1.png" alt=""></a>
                </div>
                <div class="col-md-6 descrip wow fadeInRight">
                  <h3>Crossroads: <span>Grammy Awards Premiere Ceremony</span></h3>
                  <p>Live streams deserve the same top-notch technology and engineering that televised events do. 
AMV’s CROSSROADS will bring the Grammy Awards Premiere Ceremony from The Theater at Madison Square Garden to every device before the main show kicks off. </p>
                   <p><em>Click <a href="/mobile/crossroads/" target="_blank">here</a> for more info on Crossroads </em></p>
                  <a role="button" class="btn btn-outline-secondary custom-btn wow fadeInRight" href="<?php echo get_home_url(); ?>/mobile/crossroads" target="_blank">Crossroads Production Truck</a>
                </div> 
              </div>
            </div>
          </div>
          <div class="ibox post light" id="post">
            <div class="container">
              <div class="row">
              <div class="col-md-6 text-center mb-3 hidden-md-up">
                  <img class="img-responsive  wow fadeInLeft" data-wow-delay=".5s" src="<?php echo get_template_directory_uri()?>/img/zurich-1.png" alt="">
                </div>
                <div class="col-md-6 descrip wow fadeInLeft">
                  <h3>Zurich: <span>Grammys Red Carpet Show &amp; Grammy Salute</span>  </h3>
                  <p>Go big or go home! When it comes to covering a Red Carpet of music’s biggest stars – the logical choice is AMV’s largest and most powerful Production Truck. ZURICH will be prepped, parked & powered by AMV’s top Engineers for this epic event. </p><p>Once the Grammy’s Red Carpet is complete, ZURICH will transition over to capturing the Elton John Grammy’s Salute inside MSG.  Whether Crocodile Rock’n inside for Elton-or capturing the arrivals and fashion of the music industry’s biggest night outdoors- ZURICH does it all.</p>
                   <p><em>Check out the specs &amp; diagrams  <a href="/mobile/zurich/"  target="_blank">here</a>.</em></p>
                   <a role="button" class="btn btn-primary custom-btn wow fadeInLeft" href="<?php echo get_home_url(); ?>/mobile/zurich"  target="_blank">Zurich Production Truck</a> 
                </div>
                <div class="col-md-6 text-center  hidden-sm-down">
                  <a href="/mobile/zurich/"  target="_blank" class="hoverme"><img style="margin-top:7em;" class="img-responsive  wow fadeInRight" data-wow-delay=".5s" src="<?php echo get_template_directory_uri()?>/img/zurich-1.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="ibox digitalmedia dark" id="digitalmedia">
            <div class="container">
              <div class="row">
                <div class="col-md-6 text-center">
                  <a href="/mobile/ku-4/"  target="_blank"><img class="img-responsive wow fadeInLeft" data-wow-delay=".5s" src="<?php echo get_template_directory_uri()?>/img/promos/ku4.png" alt=""></a>
                </div>
                <div class="col-md-6 descrip wow fadeInRight">
                  <h3>KU4: <span>E!’s Red Carpet Show</span></h3>
                  <p>Not to be over-shadowed by the main show - E!’s Red Carpet coverage requires a reliable, high-end Satellite Uplink Truck.<br> KU-4 will be on-site and fired up bringing you every live interview E! offers. </p>
                     <p><em>Find out more about KU-4 and other Satellite options   <a href="/mobile/ku-4/"  target="_blank">here</a>.</em></p>
                  <a role="button" class="btn btn-outline-secondary custom-btn wow fadeInRight" href="/mobile/ku-4/" target="_blank">KU-4 UPLINK TRUCK</a>
                </div>
              </div>
            </div>
          </div>
          <div class="ibox sales light" id="sales">
            <div class="container">
              <div class="row">
               <div class="col-md-6 text-center mb-3 hidden-md-up">
                  <a href="/mobile/tapeless-video/" class="hoverme"><img class="img-responsive wow fadeInRight" data-wow-delay=".5s" src="<?php echo get_template_directory_uri()?>/img/promos/tapeless.png " alt=""></a>
                </div>
                <div class="col-md-6 descrip wow fadeInLeft">
                  <h3>HD Tapeless Carrypack &amp; Blackcam:  <br><span>Performance on NY Harbor</span></h3>
                  <p>When one of the worlds’ biggest bands wants to televise their performance from a boat in the middle of NY Harbor - AMV is up to the challenge! 

Our carrypack and <a href="/rental/blackcam" target="_blank">Blackcam</a> railcam systems epitomize speed and flexibility, with a go anywhere - do anything spirit.  
<br>Whether on land, sea or air; AMV has solutions for your unique technical challenges!

                 </p>
                     <p><em>Get more info on how to configure this system to your needs   <a href="/mobile/tapeless-video/" target="_blank">here</a>.</em></p>
                  <a role="button" class="btn btn-primary custom-btn wow fadeInLeft" href="<?php echo get_home_url(); ?>/mobile/tapeless-video/" target="_blank">TAPELESS VIDEO CARRY PACK</a>
                </div>
                <div class="col-md-6 text-center hidden-sm-down ">
                 <a href="/mobile/tapeless-video/" target="_blank" class="hoverme"><img class="img-responsive wow fadeInRight" data-wow-delay=".5s" src="<?php echo get_template_directory_uri()?>/img/promos/tapeless.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
<!--            <div class="ibox transport dark" id="transport">
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
  -->       </section>
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

</div><!-- .amv-grammys -->
 



<?php get_footer();?>
