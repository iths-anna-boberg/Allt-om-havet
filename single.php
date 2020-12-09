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

    <?php

	if ( have_posts() ):

        while ( have_posts() ): the_post(); ?>
        
            <article id= "post-<?php the_ID(); ?>">

                <h1><?php the_title(); ?></h1>
                <?php the_category(); ?>
                <?php the_content(); ?>

            </article>
        <?php endwhile;

    endif;
    
	?>

<?php get_footer(); ?>