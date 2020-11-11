<?php get_header(); ?>

    <article id="sql-text" class="post-content clearfix">
    <h1><?php
        $cat_id = get_query_var('tag_id');
        $cat_data = get_option("post_tag_$cat_id");
        if (!empty($cat_data['h1_for_tag'])){
            echo $cat_data['h1_for_tag'];
        }
        ?></h1><?php 
        $term_description = term_description();
        if (!empty($term_description)) :
            printf('%s', $term_description);
        endif;?>
    </article>
    <ul class="gamelist-wrapper kill-list clearfix"><?php
        if (have_posts()): while (have_posts()): the_post(); ?><li class="game-item"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php
             if (has_post_thumbnail()) {
                $default_attr = array('title' => $post->post_title);
                echo get_the_post_thumbnail(null, 'full', $default_attr);
            } 
            ?><span class="game-title"><?php the_title(); ?></span></a></li>
        <?php endwhile; endif;
    ?></ul>
<?php get_footer(); ?>