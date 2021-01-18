<?php /* Template Name: Search Page */ ?>
<?php get_header('small'); ?>
<?php

global $query_string;

wp_parse_str( $query_string, $search_query );
$search = new WP_Query( $search_query );

?>
<section class='container'>
    <article class='mt-5'>

    <h1><?php wp_title('', true); ?></h1>
    <?php get_search_form(); ?>

    </article>
</section>
<?php get_footer(); ?>