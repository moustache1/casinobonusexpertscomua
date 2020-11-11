<?php get_header(); ?>
    <div class="post container">
        <article class="single-post post-content">
            <h1><?php echo (get_post_meta($post->ID, "h1", true))?></h1>
            <?php if (have_posts()) : the_post() ?>
            <?php the_content();?>
            <?php endif; ?>
        </article>
   
        <?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
        <?php get_template_part( 'template_parts/affiliate-horizontal-block' ); ?>
    </div>
        
<!-- Кнопка для редактирвоания поста -->
<?php edit_post_link(__('Edit This')); ?>
<?php get_footer(); ?>