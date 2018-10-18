<?php
/**
 * The template for displaying the transport page
 * Template Name: satellite-services
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
    <h1>A COMPLETE RANGE OF VIDEO AND IP SERVICES</h1>
<!--   <h2>Westar Satellite Services specializes in providing the broadcast industry with a complete range of video and IP services. We back up our services with a team of dedicated professionals and years of experience in the video transport industry.</h2> -->
          <h4>
Westar provides customers with national video contribution and distribution over satellite or IP.</h4>
  <a role="button" class="btn btn-outline-secondary custom-btn wow fadeInUp animated page-scroll splashbtn" href="#contactform"   style="visibility: visible; animation-name: fadeInRight;">CONTACT US</a>
<!--   <div class="pb-xl-5"></div> -->
</div>
    <div class="sectionherooverlay">

          <h3>WESTAR SATELLITE SERVICES</h3>

    </div>
  </div>
</section>
<section id="features">
	<div class="container" >
		<div class="row">
			<div class="col-md-6 col-lg-4">
				<div class="feat">
					<span>Westar provides custom engineered solutions.</span> We leverage satellite, fiber and teleport assets and a full menu of value added services to provide one- stop solutions.
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="feat">
				<span>We are network and satellite neutral,</span> so you are able to mix and leverage resources from numerous sources into a best of class solution. You need never be tied to a specific satellite operator, terrestrial provider, technology or product package.
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="feat">
				<span>Our expertise ensures</span> that your services are engineered and deployed using the most efficient combination of Westar assets, facilities and technologies.
				</div>
			</div>
 
			<div class="col-md-6 col-lg-4">
				<div class="feat">
				<span>We offer turn-key service</span> packages that include everything from network design and equipment to installation, maintenance and monitoring.
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="feat">
				<span>Westar has decades of experience</span> in teleport services, global transport, and network management.
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="feat">
				<span>We are committed</span> to our customers’ satisfaction and excellence.
				</div>
			</div>
		</div>
	</div>
</section>
<section id='services'>
	<div class="container"><h3>WESTAR SATELLITE SERVICES FEATURES</h3>
		<div class="row">
			<div class="services-content col-md-6">
				
				<ul>
					<li>30 Antennas accessing Domestic &amp; International Satellites</li>
					<li>Video Switching Hubs in: Dallas, Washington D.C. &amp; New York City</li>
					<li>Program Contribution</li>
					<li>Special Events Packaging</li>
					<li>Sports Events</li>
					<li>Tape/ File Playback &amp; Record Nielson Encoding</li>
					<li>Standards Conversion</li>
					<li>Video Streaming</li>
				</ul>
			</div>
			<div class="col-md-6">
				<div class="videoWrapper">
<iframe width="560" height="315" src="https://www.youtube.com/embed/In6U9NUzMKE?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
</div>
			</div>
		</div>
	</div>
</section>
<section id="history">
	<div class="container">
		<div class="row">
			<div class="history-content">
				<h3>HISTORY</h3>
				<p><strong>Westar has the longest history of delivery over satellite in the United States.</strong> Since the early 1970s, and the Westar1 Satellite, Westar has provided reliable performance in contribution and distribution of content for broadcasters. The largest media companies, content providers, and cable companies have used Westar’s facilities.</p>

				<p>Westar’s traffic, booking, and NOC have been finely tuned over the years to deliver performance with every call. We offer full time, occasional use, and special event solutions for transport, space segment, and teleport services with the highest industry reliability and customer service.
Westar also provides distribution of advertising to television and cable companies throughout North America.</p>

<p>Whatever your content distribution requirements are, give Westar an opportunity to provide you the service that is known throughout the industry.</p>

<p>Call our 24x7 booking center at (866) 980-7400 or (972) 291-6000, extension 2 for our sales department.</p>
			</div>
		</div>
	</div>
</section>

<!-- <section>
 
   <div class="row">
      Featuring Systems By
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