<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 





	<section class="product-top">
		<div class="sectionoverlay">
			<div class="container ">
				<h1 class="topheader">
					<?php if ( 'stage' == get_post_type() ) {
					 echo '<a href="/stage" class="section-title">Stages</a>';
					} 
					elseif('mobile' == get_post_type()) {
					echo '<a href="/mobile" class="section-title">Mobile</a>';
					}
					else{
						echo 'Unknown Post Type';
					}


					?>


		 		</h1>
				<div class="product-hero row">
					<div class="col-lg-8 col-12"> <?php
			get_template_part( 'template-parts/product', 'slideshow' );
					?>
					</div>
					<div class="col-lg-4">
						<!-- the_title( '<h2 class="entry-title">', '</h2>' ); --> 
						<div class="product-nav-title">
						<?php amv_product_navigation('mobile') ?>
						</div>
						<?php if (types_render_field( 'subtitle' )){ ?>
						<h3>
							<?php echo (types_render_field( 'subtitle' )) ?>
						</h3>
					<?php } ?>
					<?php if ( 'mobile' == get_post_type() ){
						 echo '<a role="button" class="btn btn-primary custom-btn contactbtn" href="' . get_home_url() . '/mobile/#contactform">Contact</a>' ;
					}?>
					
					</div>
				</div>
			</div>
		</div>
	</section>
<div class="bluebar">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<ul class="nav nav-tabs" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" href="#overview" role="tab" data-toggle="tab">
					    	Overview
						</a>
					  </li>
					    <?php if (types_render_field( 'info-tab-1-content' )){ ?>
					  <li class="nav-item">
					    <a class="nav-link" href="#tab1" role="tab" data-toggle="tab">
					   <?php echo(types_render_field( 'info-tab-1-title' )); ?>
					    </a>
					  </li>
					  <?php };?>
					    <?php if (types_render_field( 'info-tab-2-content' )){ ?>
					  <li class="nav-item">
					    <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">
					   <?php echo(types_render_field( 'info-tab-2-title' )); ?>
					    </a>
					  </li>
					  <?php };?>
				</ul>
			</div>
			<div class="col-sm-4 bluecontact hidden-sm-down">
				Contact
			</div>
		</div>
	</div>
</div>
<section class="entry-content product-content">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8">
<!-- Tab panes -->
				<div class="tab-content">
				  <div role="tabpanel" class="tab-pane fade show active" id="overview"><?php
							the_content();

	 
		?>		</div>


		 <?php if (types_render_field( 'info-tab-1-content' )){ ?>
				  <div role="tabpanel" class="tab-pane fade" id="tab1">

				   <?php echo(types_render_field( 'info-tab-1-content' )); ?>
				    	
				</div>
				  <?php };?>
					 <?php if (types_render_field( 'info-tab-2-content' )){ ?>
				  <div role="tabpanel" class="tab-pane fade" id="tab2">

				   <?php echo(types_render_field( 'info-tab-2-content' )); ?>
				    	
				</div>
  <?php };?>



 
 
				</div>



		</div>
	<div class="col-12 col-md-4">

	    <?php if (types_render_field( 'contact-info' )){ ?>


   <?php 

   $contactinfo = (types_render_field( 'contact-info' ));


  

	get_template_part( 'template-parts/contactinfo',  $contactinfo );

			};
			?>

		
	</div>
</div>
</div>
	</section><!-- .entry-content -->

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
</article><!-- #post-## -->

 <!-- jQuery -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <script>window.jQuery || document.write('<script src="/js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- intialize  tooltips  -->
  <script type="text/javascript">
    
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
    $('[data-toggle="tooltip"]').on('click', function () {
    $(this).tooltip('hide')
})


  </script>

