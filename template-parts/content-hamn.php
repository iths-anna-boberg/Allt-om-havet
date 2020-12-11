<div class="row">
    <div class="col-sm-8">
        <?php 
            if (get_the_post_thumbnail_url()) {

                echo "<img class='img-fluid' src=" . esc_url(get_the_post_thumbnail_url()) . " >";
            }
        ?>

        <?php the_content(); ?>
    </div>
    
    <div class="col-sm-4">
        <div class="p-4 aoh-event-box aoh-box-lightblue">
            <?php get_template_part('template-parts/content', 'faciliteter');?>
        </div>
    </div>
</div>
