<?php
/**
 * The template for displaying single posts and pages.
 *
 * @package WordPress
 * @subpackage Allt_Om_Havet
 * @since Allt Om Havet 1.0
 */

get_header('small');
?>

<section class="container">
    <?php

	if ( have_posts() ):

        while ( have_posts() ): the_post(); ?>
        
            <article id= "post-<?php the_ID(); ?>">

                    <h1 class="border-bottom border-dark"><?php the_title(); ?></h1>

                <article class="row mt-4">
                    <?php the_category(); ?>
                    <p class="mr-1 ml-1">|</p>
                    <?php $post_date = get_the_date( ' F j, Y' ); echo $post_date; ?>
                </article>

                <?php the_content(); ?>

            </article>
        <?php endwhile;

    endif;
    
	?>
</section>

<?php get_footer(); ?>