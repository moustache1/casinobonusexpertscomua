<?php
/*
Template Name: Game Items Category
*/
?>

<?php get_header(); ?>

<div class="blog-block">
    <div class="container">
    <?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
    <h1><?php $cat_id = get_query_var('cat');
            $cat_data = get_option("category_$cat_id");
            if (!empty($cat_data['cat_h1'])) { echo $cat_data['cat_h1']; } ?></h1><?php 
            $term_description = term_description();
            if (!empty($term_description)) :
                printf('%s', $term_description);
            endif;?>
    <div class="for-h"></div>

    <!-- <div class="pagination">
        тут должна быть пагинация
    </div> -->

        <div class="blog-wrapper">
        <?php 
        $posts = get_posts( array(
            'numberposts' => 16,
            'category'    => $cat_id,
            'orderby'     => 'rand',
            'order'       => 'DESC',
        ));
        if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
        
        <?php  get_template_part('template_parts/blog-small-card');?>

        <?php endforeach; endif; ?>
        </div>

    <!-- <div class="pagination">
        тут должна быть пагинация
    </div> -->
    
    </div>
</div>

<?php get_footer(); ?>