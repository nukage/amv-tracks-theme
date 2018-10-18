 <section class="slider block">
                <div id="slider" class="flexslider">
                     <ul class="slides">
                  <?php   

if (has_post_thumbnail):
        echo '<li>';
        the_post_thumbnail( 'pr-slider-image' );
        echo '<p class="flex-caption">';
    $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
    
    $image_caption = get_post(get_post_thumbnail_id())->post_excerpt;
    if ($image_caption): ?>
     <p class="caption"><?php echo $image_caption; ?></p>

    <?php 
    endif;
    echo '<a href="' . $full_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" ';?>
     target="_blank" class="hidden"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a></p>
          

        
                        </li>
<?php
endif;                 

if( class_exists('Dynamic_Featured_Image') ):
    global $dynamic_featured_image;
    global $post;
     $featured_images = $dynamic_featured_image->get_featured_images( $post->ID );


     if ( $featured_images ):
        ?>
            <?php foreach( $featured_images as $images ): 
          
            $image_caption = $dynamic_featured_image->get_image_caption_by_id($images['attachment_id'] );
            $largeSizedImage = $dynamic_featured_image->get_image_url($images['attachment_id'], 'pr-slider-image'); 
            
            ?>

             

                      <li>
                        <?php echo "<img src = '" . $largeSizedImage . "' />"; ?>
                      <p class="flex-caption">

                        <?php if ($image_caption): ?>
     <p class="caption"><?php echo $image_caption; ?></p>

                        <?php 
                        endif; ?>
                        <a class="hidden" href="<?php echo $images['full'] ?>" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true">
                        
                      </span> </a></p>
                 
                        </li>


            <?php endforeach; ?>
        <?php
        endif;
endif;

?>
               
                     
                         
                  </ul>
                </div><!--/slider flexslider-->
                <?php if($featured_images): ?>
                <div id="carousel" class="flexslider">
                  <ul class="slides">
                     <?php   
if (has_post_thumbnail):
        echo '<li>';
        the_post_thumbnail( 'pr-slider-thumb' );
        echo '<p class="flex-caption">';
    $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
    echo '<a href="' . $full_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" ';?>
     target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a></p>
     <p></p>
                        </li>
<?php
endif;  
if( class_exists('Dynamic_Featured_Image') ):
    global $dynamic_featured_image;
    global $post;
     $featured_images = $dynamic_featured_image->get_featured_images( $post->ID );

     if ( $featured_images ):
        ?>
            <?php foreach( $featured_images as $images ): 
              $largeSizedImage = $dynamic_featured_image->get_image_url($images['attachment_id'], 'pr-slider-thumb'); ?>

             

                       <li>
                       <?php echo "<img src = '" . $largeSizedImage . "' />"; ?>
                  <p class="flex-caption"><a class="hidden" href="<?php echo $images['full'] ?>" target="_blank"></a></p>
                  <p></p>
                        </li>


            <?php endforeach; ?>
        <?php
        endif;
endif;

?>



                    
                  </ul>
                </div><!--/carousel flexslider-->
              <?php endif;?>
              </section><!--/slider block -->