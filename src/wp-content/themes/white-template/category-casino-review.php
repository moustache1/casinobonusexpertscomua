<?php
/*
Template Name: Casino Review Category
*/
?>

<?php get_header(); ?>

<div class="casino-review container">
    <?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
    <div class="affiliate-horizontal-block">
        <h1><?php $cat_id = get_query_var('cat');
            $cat_data = get_option("category_$cat_id");
            if (!empty($cat_data['cat_h1'])) { echo $cat_data['cat_h1']; } ?></h1><?php 
            $term_description = term_description();
            if (!empty($term_description)) :
                printf('%s', $term_description);
            endif;?>
        <?php 
            $posts = get_posts( array(
                'numberposts' => 12,
                'category'    => $cat_id,
                'orderby'     => 'rand',
                'order'       => 'DESC',
            ));
            if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>

            <?php get_template_part( 'template_parts/affiliate-item-horizontal' ); ?>
        
            <?php wp_reset_postdata(); ?>
            <?php endforeach; endif; ?>
    </div>

        <!-- Подключение слайдера для мобильной версии(убираются горизонтальные блоки) -->
    <div class="affiliate-horizontal-block-mob">
        <div class="affiliate-horizontal-block-mob-item">
            <h1><?php $cat_id = get_query_var('cat');
                $cat_data = get_option("category_$cat_id");
                if (!empty($cat_data['cat_h1'])) { echo $cat_data['cat_h1']; } ?></h1><?php 
                $term_description = term_description();
                if (!empty($term_description)) :
                    printf('%s', $term_description);
                endif;?>
            <?php 
                $posts = get_posts( array(
                    'numberposts' => 12,
                    'category'    => $cat_id,
                    'orderby'     => 'rand',
                    'order'       => 'DESC',
                ));
                if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>

                <?php get_template_part( 'template_parts/affiliate-item-vertical' ); ?>
            
                <?php wp_reset_postdata(); ?>
                <?php endforeach; endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>