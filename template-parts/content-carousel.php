<article id="carouselIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselIndicators" data-slide-to="1"></li>
    <li data-target="#carouselIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">

	<?php

	$args = array(
		'numberposts' => -1,
		'post_content',
		'post_status'=>'publish',
		'post_title',
		'post_type'=>'hamn',
		'ID',
	);

	$all_posts = get_posts($args);

	$posts = array();

	foreach($all_posts as $post){
		
		$post_data = array(
			'id'=>$post->ID,
			'post_title'=>$post->post_title,
			'img_large'=>get_the_post_thumbnail_url($post->ID, 'large'),
			'post_link'=>get_permalink($post),
		);
		
		array_push($posts, $post_data);
	}
	// echo '<pre>',print_r($posts),'</pre>';

	foreach ($posts as $carousel_item) {
      
    if ($posts[0] === $carousel_item) {
      echo '  <div class="carousel-item active">
		        <img  src=' . $carousel_item["img_large"] .'  alt=' . $carousel_item["post_title"] . ' >
		        <h6 class="mt-2"> ' . $carousel_item["post_title"] . '</h6>                        
		        </div>  ';
    } else {

      echo '  <div class="carousel-item">
              <img  src=' . $carousel_item["img_large"] .'  alt=' . $carousel_item["post_title"] . ' >
              <h6 class="mt-2"> ' . $carousel_item["post_title"] . '</h6>                        
              </div>  ';
    }
		
	}

	?>
	</div>
	<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
	</a>
</article>