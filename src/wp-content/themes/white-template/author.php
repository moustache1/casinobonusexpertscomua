<?php get_header(); ?>
<?php 
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
$author_id = $curauth->ID;
$avatar = get_field('avatar', 'user_'.$author_id);
?>

<div class="author-block container">
<?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
    <div class="author__content">
        <div class="author__content-img">
            <img src="<?php echo $avatar['url'] ?>" alt="<?php echo $avatar['alt'] ?>">
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
            <div class="blog">
                <?php  get_template_part('template_parts/blog-small-card');?>
            </div>
        </div>
        <!-- <div class="pagination">
            тут должна быть пагинация
        </div> -->
    </div>


</div>
<?php get_footer(); ?>