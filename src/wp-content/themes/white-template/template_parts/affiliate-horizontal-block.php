<div class="affiliate-horizontal single-page">
    <div class="container">
        <h2>Top Casinos</h2>
        <div class="affiliate-horizontal-block">
            <?php 
                $posts = get_posts( array(
                    'posts_per_page' => 5,
                    'category'    => 10,
                    'orderby'     => 'order',
                    'order'       => 'DESC',
                ));
                if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>

                <?php get_template_part( 'template_parts/affiliate-item-horizontal' ); ?>
            
                <?php wp_reset_postdata(); ?>
                <?php endforeach; endif; ?>
        </div>
        <!-- Подключение слайдера для мобильной версии(убираются горизонтальные блоки) -->
        <div class="affiliate-horizontal-block-mob-slider">
            <?php get_template_part( 'template_parts/blog-post-slider' ); ?>
        </div>

        <div class="btn-primary"><span>Все онлайн казино</span></div>
    </div>
</div>