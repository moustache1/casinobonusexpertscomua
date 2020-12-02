<div class="small-blog">
    <?php $date_check = get_the_date('F j, Y'); ?>
    <div class="small-blog-img">
    <a href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail()) {
        $default_attr = array('title' => $post->post_title);
        echo get_the_post_thumbnail(null, 'full', $default_attr);
        } 
        else {
        echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
        . '/images/pmcasino-bg.png" alt=""/>';
        }
        ?>
    </a>
    </div>
    <div class="small-blog-wrapper">
        <div class="small-blog-date">
            <?php echo $date_check; ?>
        </div>

        <div class="small-blog-title"><?php the_title(); ?> </div>  
        
        <div class="small-blog-read">
            <a href="<?php the_permalink(); ?>">Read full article ></a>
        </div>
    </div>
</div>