<article class="col-sm-12 d-flex flex-wrap justify-content-between pt-5 mb-5 aoh-box-lightblue">
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
              'img_link'=>get_the_post_thumbnail_url($post->ID, 'medium'),
              'post_link'=>get_permalink($post),
              'rating' => ic_get_reviews_average($post->ID),
            );
      
            array_push($posts, $post_data);
          }
      
          array_multisort(array_column($posts, 'rating'), SORT_DESC, $posts);

          
          $three_posts = array_slice($posts, 0, 3);

          foreach ($three_posts as $rating_card) {
            
            echo '  <div class="col d-flex flex-column align-items-center">
                        <img class="aoh-thumbnail-hamn" src=' . $rating_card["img_link"] .'  alt=' . $rating_card["post_title"] . ' >
                        <h4 class="mt-2"> ' . $rating_card["post_title"] . '</h6>
                        <div class="d-flex justify-content-start">
                        <h6>Betyg: </h6> <span>' , ic_get_reviews_average_html($rating_card["id"]) , '</span>
                        </div>
                        <a class="mb-5 aoh-btn-solid aoh-link-btn" href=' . $rating_card["post_link"] .'>' . $rating_card["post_title"] .'</a>
                        
                    </div>  ';

          }

      ?>
      </article>