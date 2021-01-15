<?php /* Template Name: search */ ?>
<?php get_header('small'); ?>
<section class='container pt-4 pb-4'>
    <h1>Sökresultat</h1>
    <hr>
    <div class="hamn-lista ">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class='search-row d-flex flex-column p-3'>
            <div class="hamn-row d-flex flex-row justify-content-between">
                    <a class="search-link" href="<?php the_permalink(); ?>" rel="bookmark">
                    <?php the_title(); ?>
                    </a>
                    <p><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></p>
                </div>
                <div>
                    <p><?php the_excerpt(); ?></p>
                </div>
        </article>
        <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Vi hittade tyvärr inga sökträffar' ); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>