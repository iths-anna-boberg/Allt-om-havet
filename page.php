<?php /* Template Name: page.php */ ?>
<?php get_header('small'); ?>

<section class='container'>
      <article class='mt-5'>

      <h1><?php wp_title('', true); ?></h1>

      <?php 
        if(have_posts()){
          while(have_posts()){
            the_post();
            the_content();
          }
        }
      ?>
      </article>
</section>
<?php get_footer(); ?>