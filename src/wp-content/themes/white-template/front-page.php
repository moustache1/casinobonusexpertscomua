<?php get_header(); ?>
<article class="post-content" id="sql-text">
    <h1><?php echo(get_post_meta($post->ID, 'h1', true)); ?></h1>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
</article>
<?php $front_games = get_field('front_games'); ?>
<?php $vertical_casino = get_field('vertical_casino'); ?>
<?php get_template_part( 'template_parts/affiliate-vertical-block', null, ['par' => 'hello'] ); ?>

<div class="seo-text">
    <div class="container">
        <div class="seo-text__wrapper">
            <div class="seo-text__left">
                <?php the_field('text_block_1') ?>
                <div class="seo-text__btn">
                    <div class="seo-text__line"></div>
                    <div class="btn-primary">
                        <a href="#">Открыть весь текст</a>
                    </div>
                </div>
            </div>
            <div class="seo-text__right">
                <img src="<?php bloginfo("template_url"); ?>/images/seo-text-ruletka.png" alt="">
            </div>
        </div>
    </div>
</div>
<?php if($front_games) {
    ?>
    <div class="games-block container">
        <h2>Popular Slots</h2>
            <div class="games-wrapper">
            <?php 
            $posts = $front_games;
            if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>

            <?php  get_template_part('template_parts/game-items');?>
        
            <?php wp_reset_postdata(); ?>
            <?php endforeach; endif; ?>
            </div>
        
            <div class="btn-primary"><span>Показать больше игр</span></div>
    </div>
    <?php
} ?>


<div class="scroll-content container">
    <div class="scroll-content-img">
        <img src="<?php bloginfo("template_url"); ?>/images/chips-dice.png" alt="">
    </div>
    <div class="scroll-content-main">
        <div class="for-h"></div>
        <div class="main-text main-text_scroll"></div>
    </div>
</div>


<?php get_template_part( 'template_parts/affiliate-horizontal-block' ); ?>

<div class="seo-text reverse">
    <div class="container">
        <div class="seo-text__wrapper">
            <div class="seo-text__left">
                <?php the_field('text_block_2') ?>
                <div class="seo-text__btn">
                    <div class="seo-text__line"></div>
                    <div class="btn-primary">
                        <a href="#">Открыть весь текст</a>
                    </div>
                </div>
            </div>
            <div class="seo-text__right">
                <img src="<?php bloginfo("template_url"); ?>/images/seo-text-card.png" alt="">
            </div>
        </div>
    </div>
</div>


<?php get_template_part( 'template_parts/blog' ); ?>

<?php  get_template_part('template_parts/faq/faq');?>

<?php get_footer(); ?>

<div class="cookie">
    <div class="container">
        <div class="cookie__wrapper">
            <div class="cookie__text">
                Мы используем куки-файлы для того, чтобы улучшить работу и повысить эффективность сайта. <br> <a href="#">Больше информации по ссылке.</a>
            </div>
            <div class="btn-primary">
                <a href="#">Хорошо, я не против</a>
            </div>
        </div>
    </div>
</div>