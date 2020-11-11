<div class="affiliate-horizontal single-page">
    <div class="container">
        <h2>Лучшие казино</h2>
        <div class="affiliate-horizontal-block">


    <?php $horizontal_casino = $args; ?>
        <?php  if($horizontal_casino) {
            ?>
                <?php 
                $posts = $horizontal_casino;
                if ($posts) : foreach ($posts as $key => $post) : setup_postdata($post); ?>
                
                    <?php get_template_part( 'template_parts/affiliate-item-horizontal', null, $key ); ?>
            
                <?php wp_reset_postdata(); ?>
                <?php endforeach; endif; ?>
            <?php
        } ?>


        </div>
        <!-- Подключение слайдера для мобильной версии(убираются горизонтальные блоки) -->
        <div class="affiliate-horizontal-block-mob-slider">
            <?php get_template_part( 'template_parts/blog-post-slider' ); ?>
        </div>

        <div class="btn-primary"><span>Все онлайн казино</span></div>
    </div>
</div>