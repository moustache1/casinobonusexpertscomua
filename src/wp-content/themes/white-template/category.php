<?php get_header(); ?>

    <article id="sql-text" class="post-content clearfix container">
    <?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
    <h1><?php $cat_id = get_query_var('cat');
        $cat_data = get_option("category_$cat_id");
        if (!empty($cat_data['cat_h1'])) { echo $cat_data['cat_h1']; } ?></h1><?php 
        $term_description = term_description();
        if (!empty($term_description)) :
            printf('%s', $term_description);
        endif;?>
    </article>

    <?php  get_template_part('template_parts/game-items');?>

<?php get_footer(); ?>