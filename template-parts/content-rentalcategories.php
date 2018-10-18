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