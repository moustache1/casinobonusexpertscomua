<?php $date_check = get_the_date('F j, Y'); ?>
<div class="author">
    <div class="container">
        <div class="author__wrapper">
            <div class="author__block">
                <div class="author__left-img">
                    <img src="<?php bloginfo("template_url"); ?>/images/avatar.png" alt="">
                </div>
                <div class="author__left-info">
                    <div class="author__left-title">
                        Автор
                    </div>
                    <div class="author__left-name">
                        <?php the_author(); ?>
                    </div>
                    <div class="author__left-public">
                        <div class="author__left-status">
                            Опубликовано:
                        </div>
                        <div class="author__left-date">
                            <?php echo $date_check; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="author__btn">
                <a href="#header">Подняться вверх</a>
            </div>
        </div>
    </div>
</div>