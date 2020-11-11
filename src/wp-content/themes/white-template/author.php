<?php get_header(); ?>

<div class="author-block container">
<?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
    <div class="author__content">
        <div class="author__content-img">
            
        </div>
        <div class="author__content-about">
            <div class="author__content-name">
                <?php the_author(); ?>
            </div>
            <div class="author__content-descr">
                <?php the_author_meta('user_description'); ?>
            </div>
        </div>
    </div>

    <div class="author__blog">
        <h2>Публикации автора:</h2>
        <!-- <div class="pagination">
            тут должна быть пагинация
        </div> -->
        <div class="author__blog-grid-container">
            <div class="main-blog1">
                <?php  get_template_part('template_parts/blog-big-card');?>
            </div>
            <div class="blog1">
                <?php  get_template_part('template_parts/blog-small-card');?>
            </div>

            <div class="blog2">
                <?php  get_template_part('template_parts/blog-small-card');?>
            </div>

            <div class="blog3">
                <?php  get_template_part('template_parts/blog-small-card');?>
            </div>            
            
            <div class="blog4">
                <?php  get_template_part('template_parts/blog-small-card');?>
            </div>

            <div class="main-blog2">
                <?php  get_template_part('template_parts/blog-big-card');?>
            </div>

            <div class="blog5">
                <?php  get_template_part('template_parts/blog-small-card');?>
            </div>

            <div class="blog6">
                <?php  get_template_part('template_parts/blog-small-card');?>
            </div>

            <div class="blog7">
                <?php  get_template_part('template_parts/blog-small-card');?>
            </div>            
            
            <div class="blog8">
                <?php  get_template_part('template_parts/blog-small-card');?>
            </div>
        </div>
        <!-- <div class="pagination">
            тут должна быть пагинация
        </div> -->
    </div>


</div>
<?php get_footer(); ?>