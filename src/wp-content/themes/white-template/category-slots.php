<?php
/*
Template Name: Game Items Category
*/
?>

<?php get_header(); ?>

<div class="game-items-cat games-block container">

    <article id="sql-text" class="post-content clearfix">
    <?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
    <h1><?php $cat_id = get_query_var('cat');
        $cat_data = get_option("category_$cat_id");
        if (!empty($cat_data['cat_h1'])) { echo $cat_data['cat_h1']; } ?></h1><?php 
        $term_description = term_description();
        if (!empty($term_description)) :
            printf('%s', $term_description);
        endif;?>
    </article>
        <?php //var_dump($cat_id);// ?>
    <div class="games-block-top">
        <div class="for-h"></div>
        <div class="pagination">
            <!-- тут должна быть пагинация -->
        </div>
    </div>

    <div class="games-block">
        <h2>СЕО Заголовок H2</h2>
            <div class="games-wrapper">
            <?php 
            $posts = get_posts( array(
                'numberposts' => 12,
                'category'    => $cat_id,
                'orderby'     => 'rand',
                'order'       => 'DESC',
            ));
            if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>

            <?php  get_template_part('template_parts/game-items');?>
        
            <?php wp_reset_postdata(); ?>
            <?php endforeach; endif; ?>
            </div>
        
            <div class="btn-primary"><span>Показать больше игр</span></div>
    </div>
    <div class="pagination">
            <!-- тут должна быть пагинация -->
    </div>
</div>

<?php get_footer(); ?>