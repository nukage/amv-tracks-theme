<?php
/**
 * The template for displaying the master control page
 * Template Name: master-control
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
  <div class="sectionoverlay">
	<div class="col-xl-6 offset-xl-3 pl-md-5 pr-md-5 sectionherotext">
	    <h1>CENTRALIZED MASTER CONTROL SERVICES</h1>
	<!--   <h2>Master control center, media management, and business services for independent, small group, and public television broadcasters.</h2> -->
	     <h4>Master control center, media management for independent, small group, and public television broadcasters.</h4>
	  <a role="button" class="btn btn-outline-secondary custom-btn wow fadeInUp animated page-scroll splashbtn" href="#contactform"   style="visibility: visible; animation-name: fadeInRight;">CONTACT US</a>
	<!--   <div class="pb-xl-5"></div> -->
	</div>
    <div class="sectionherooverlay">
          <h3>MASTER CONTROL SERVICES</h3>
    </div>
  </div>
</section>
<!-- Tab panes -->
<div>
	<div class="container">
		<section id="mc-overview">
		<div class="row">
			<div class="col-4">
				<h4>OUR MISSION</h4>
				<p>To provide the most efficient, reliable, cost effective central-casting service for the independent, small group and Public Television broadcaster.</p>
			</div>
			<div class="col-4">
				<h4>OUR PROMISE</h4>
				<p>To move your broadcast to a state of the art system; with specific equipment assigned to your specific air chain; with no capital expenditure on your part.</p>
			</div>
			<div class="col-4">
				<h4>YOUR RESULTS</h4>
				<p>By eliminating capital expenditures and reducing operational expenses, Westar Master Control Services allows your station to focus resources on the future and doing what you do best.</p>
			</div>
<!-- 		<hr>
	<h4>TRAFFIC MEDIA MANAGEMENT</h4>
		<div class="row traffic-media-management">
		<div class="col-1"></div>
			<div class="col-7"><ul>
				<li>Daily Traffic Log Development
</li>
				<li>Reconciliation</li>
				<li>Media Management</li>
			</ul></div>
			<div class="col-4"><ul>
				<li>Continuity Coordination</li>
				<li>Program Formatting</li>
				<li>Offiline Synchronization</li>
			</ul></div>
		</div><!-- .row .traffic-media-management" --> 
	</div><!--.row-->
		</section>
	</div>

 
</div>
 
<section id='services'>
	<div class="container">
		<div class="row">
			<div class="services-content">
				<h3>WESTAR  MASTER CONTROL FEATURES</h3>
				<ul>
					<li>24/7 365 Multiplex HD &amp; SD delivery</li>
					<li>Live event switching &amp; Live insertion capabilities</li>
					<li>PSIP, EAS-CAP, Grass Valley Calm Compliance</li>
					<li>Closed Caption &amp; transmitter monitoring</li>
					<li>Grass Valley ITX System</li>
					<li>PSIP via Trivini</li>
					<li>Muxing via Harmonic’s Elektra system</li>
					<li>EAS via Digital Alert’s DASDEC system</li>
					<li>Grass Valley Calm Compliance &amp; Audio processing via Miranda</li>
				</ul>
			</div>
		</div>
	</div>
</section>


  
<div class="container">
	<section id="mc-faq">
		<h2>Questions and Answers</h2>
 <div>
 	<h3>What are my annual maintenance and repair costs?</h3>
 	<div class="answer">Zero.</div>
 	<p class="details">Your monthly broadcast stream, maintenance &amp; repair are also built into your monthly operating service fee.</p>
 </div>
 <hr>
 <div>
 	<h3>Will I own my broadcast stream equipment?</h3>
 	<div class="answer">No.</div>
 	<p class="details">While dedicated exclusively to your signal distribution, the broadcast equipment employed in your service is part of the larger master control facility.</p>
 </div>
  <hr>
 <div>
 	<h3>How long does the on-boarding process take?</h3>
 	<div class="answer">90 days.</div>
 	<p class="details">Once Engineering has approved the broadcast signal chain &amp; equipment has been ordered – the build-out/light-up process takes approximately three months.</p>
 </div>
 <hr>
 <div>
 	<h3>What are the responsibilities of my operations?</h3>
 	<div class="answer">PROGRAMMING</div>
 	<p class="details">Station operations remain responsible for all programming acquisition, coordination and episode scheduling.</p>
 	<div class="answer">OFFLINE STORAGE</div>
 	<p class="details">Westar acquires and transcodes a stations approved ‘nearline’ programming (within two weeks of broadcast air). Station operations remain responsible for offline content storage. Westar is a tapeless facility.</p>
 	<div class="answer">PROMO &amp; COMMERICAL DEVELOPMENT</div>
 	<p class="details">Westar will provide an FTP site for your station to upload local promos and commercials in a format that matches one standard.</p>
 </div>
 </section>
</div> 
<!-- <section>
   <div class="row">
      Featuring Systems By
	</div>
</section>
<section>
 
   <div class="row">
     Frequently Added Services
	</div>
</section> -->
<!-- <section>
 
   <div class="row">
     Frequently Added Services
	</div>
</section> -->
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
					$postID = $post->ID;
				get_featured_section('FeaturedSection1', $postID);  ?>
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

			<?php
			
			get_footer();
			?>