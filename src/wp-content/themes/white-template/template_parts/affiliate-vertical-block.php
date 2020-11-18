<div class="affiliate-vertical">
    <div class="bg-container">
        <div class="affiliate-vertical-bg">
            <div class="container">
                <div class="affiliate-vertical-block">

                    <div class="grid-container">
                        <div class="text">
                            <div class="text-top">
                                Добро пожаловать на <a href="#">casinobonusexperts.com.ua</a>
                            </div>
                            <div class="text-main">
                                Только отборные казино и <a href="#">лучшие бонусы</a> для вас!
                            </div>
                        </div>

                        
                            <?php $vertical_casino = $args; ?>
                            <?php  if($vertical_casino) {
                                ?>
                                    <?php 
                                    $posts = $vertical_casino;
                                    if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
                                    <div class="item">
                                        <?php get_template_part( 'template_parts/affiliate-item-vertical' ); ?>
                                    </div>
                                    <?php wp_reset_postdata(); ?>
                                    <?php endforeach; endif; ?>
                                <?php
                            } ?>
                        
                    </div>

                    <!-- Подключение слайдера для мобильной версии (display none на грид сетку) -->
                    <div class="affiliate-vertical-block-mob-slider">
                        <div class="affiliate-vertical-blocktext">
                            <div class="affiliate-vertical-blocktext-top">
                                Добро пожаловать на <a href="#">OnlineSlots.com.ua</a>
                            </div>
                            <div class="affiliate-vertical-blocktext-main">
                                Только отборные казино и <a href="#">лучшие бонусы</a> для вас!
                            </div>
                        </div>
                        <?php get_template_part( 'template_parts/blog-post-slider' ); ?>
                    </div>
                    <div class="affiliate-vertical-block-btn">
                        <a class="btn-primary" href="/category/casino-review">Все онлайн казино</a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>



