<?php
/**
 * The template for displaying the contact page
 * Template Name: Contact
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
<section class="sectionhero">
	
			<div class="sectionoverlay ">
				<div class="container">
					<div class="row">
				<div class="col-md-6 contactform">
              <h2>Contact Us</h2>
              <ul>
                <li><img src="<?php echo get_template_directory_uri()?>/img/home-contact-mobile.png"><a href="tel:2127271234">(212)727-1234</a></li>
                <li><img src="<?php echo get_template_directory_uri()?>/img/home-contact-email.png" alt=""><a href="mailto:CONTACT@AMVCHELSEA.COM">CONTACT@AMVCHELSEA.COM</a></li>
                <li><img src="<?php echo get_template_directory_uri()?>/img/home-contact-fax.png"><a href="tel:2122556644">(212) 255-6644</a></li>
              </ul>
              <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.704196785838!2d-73.9974590488192!3d40.74653397922675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259baa94ccc93%3A0x226963c36d090dce!2sAll+Mobile+Video!5e0!3m2!1sen!2sus!4v1498850989502" width="350" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe>
              </p>
              </div>
				<div class="col-md-6">
					<h2>Send us a Message</h2>
					<p>Simply fill out the quick form below with your contact info and a member of our team will be back in touch with you ASAP, usually within 1 business day. Thank you for visiting us.</p>



  <?php echo do_shortcode( '[contact-form-7 id="202" title="Contact form 1"]' ); ?>

					</div>
					
				</div>
				</div>
				</div>
			</section>
<div id="primary" class="content-area container">
	<main id="main" class="site-main" role="main">
		

<section id="directory">
	<h2>Directory</h2>
   <div class="row">
      <?php get_template_part( 'template-parts/content', 'directory' ); ?>
	</div>
</section>
			</main><!-- #main -->
			</div><!-- #primary -->
			<?php
			
			get_footer();
			?>