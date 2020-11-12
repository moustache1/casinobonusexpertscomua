<?php
/*
Template Name: Casino Review Post
*/
?>

<?php get_header(); ?>
    <div class="casino-review-post container">
    <?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
        <div class="casino-review-top-block">  
            <div class="casino-review-left">
                <div class="casino-review-rating">
                    <div class="casino-review-stars">
                        <img src="<?php bloginfo("template_url"); ?>/images/icons_stars.png" alt="Stars">   
                    </div>
                    <div class="casino-review-mark">
                        (4.1) - Отлично
                    </div>
                </div>
                <div class="casino-review-img">
                    <img src="<?php bloginfo("template_url"); ?>/images/pmcasino-bg.png" alt="">
                </div>
                <div class="casino-review-btn">
                    <div class="btn-main"><a href="#">Играть сейчас</a></div>
                </div>
            </div>
            <div class="casino-review-right">
                <div class="casino-review-title for-h"></div>
                <div class="casino-review-text">
                    <?php the_field('top_page_text') ?>
                </div>
            </div>
        </div>

        
        <div class="casino-review-top-info">
            <?php $casinoinfo = get_field('casino_review_info'); ?>
            <?php $casinoparameters = get_field('casino_review_parameters'); ?>
            <?php $casinobonuses = get_field('casino_review_bonuses'); ?>
            <?php $casinocash = get_field('casino_review_cash'); ?>
            <?php $casinoprovider = get_field('casino_review_provider'); ?>

        <div class="casino-review-top-info-block">
            <!-- Блок номер 1 (о казино) -->
            <div class="casino-review-info">
                <div class="casino-review-info-title">
                    <span><?php echo $casinoinfo['casino-review-info-title']; ?></span>
                </div>

                <?php foreach($casinoinfo['casino_review_info_item'] as $key => $item) {
                    // var_dump($item);?> 
                    <div class="casino-review-info-about">
                        <div class="casino-review-info-parameter"><?php echo $item['casino_review_info_item_title']; ?></div>
                        <div class="casino-review-info-value"><?php 
                        
                        // var_dump($item['casino_review_info_item_select']);

                        if ($item['casino_review_info_item_select'] == 'text'){
                            echo $item['casino_review_info_item_value'];
                        } 
                        if ($item['casino_review_info_item_select'] == 'check'){
                            if($item['casino_review_info_check']) { ?>
                                <img src="<?php bloginfo("template_url"); ?>/images/sprite/icon_check.svg" alt="">
                                <?php } else { ?>
                                <img src="<?php bloginfo("template_url"); ?>/images/sprite/icon_x.svg" alt="">
                            <?php }
                        }
                         ?></div>
                    </div>
                    <?php
                }; ?>

                <!-- <img src="<?php echo $casinoinfo['info_item_image']['url'] ?>" alt=""> -->
            </div>
            <!-- Блок номер 1 (о казино) -->

            <!-- Блок номер 4 (о снятии и пополнении) -->
            <div class="casino-review-info info-img">
                <div class="casino-review-info-title">
                    <span><?php echo $casinocash['casino_review_cash_title']; ?></span>
                </div>
                <?php 
                    foreach($casinocash['casino_review_cash_image'] as $key => $image) {
                        // var_dump($image);
                        ?>
                        <img class="info-img" src="<?php echo $image['casino_review_cash_image_item']['url'] ?>" alt="<?php echo $image['casino_review_cash_image_item']['alt'] ?>">
                        <?php
                    } 
                ?>
            </div>
            <!-- Блок номер 4 (о снятии и пополнении) -->
        </div>

        <div class="casino-review-top-info-block">
            <!-- Блок номер 2 (о характеристиках) -->
            <div class="casino-review-info">
                <div class="casino-review-info-title">
                    <span><?php echo $casinoparameters['casino_review_info_title_parameters']; ?></span>
                </div>

                <?php foreach($casinoparameters['casino_review_info_item_parameters'] as $key => $item) {
                    // var_dump($item);?> 
                    <div class="casino-review-info-about">
                        <div class="casino-review-info-parameter"><?php echo $item['casino_review_info_item_title_parameters']; ?></div>
                        <div class="casino-review-info-value"><?php 
                        
                        // var_dump($item['casino_review_info_item_select']);

                        if ($item['casino_review_info_item_select_parameters'] == 'text'){
                            echo $item['casino_review_info_item_value_parameters'];
                        } 
                        if ($item['casino_review_info_item_select_parameters'] == 'check'){
                            if($item['casino_review_info_check_parameters']) { ?>
                                <img src="<?php bloginfo("template_url"); ?>/images/sprite/icon_check.svg" alt="">
                                <?php } else { ?>
                                <img src="<?php bloginfo("template_url"); ?>/images/sprite/icon_x.svg" alt="">
                            <?php }
                        }
                         ?></div>
                    </div>
                    <?php
                }; ?>

                <!-- <img src="<?php echo $casinoparameters['info_item_image']['url'] ?>" alt=""> -->
            </div>
            <!-- Блок номер 2 (о характеристиках) -->

            <!-- Блок номер 5 (разработчики) -->
            <div class="casino-review-info">
                <div class="casino-review-info-title">
                    <span><?php echo $casinoprovider['casino_review_provider_title']; ?></span>
                </div>
                <?php 
                    foreach($casinoprovider['casino_review_provider_image'] as $key => $image) {
                        // var_dump($image);
                        ?>
                        <img class="info-img" src="<?php echo $image['casino_review_provider_image_item']['url'] ?>" alt="<?php echo $image['casino_review_provider_image_item']['alt'] ?>">
                        <?php
                    } 
                ?>
            </div>
            <!-- Блок номер 5 (разработчики) -->
        </div>

        <div class="casino-review-top-info-block">
            <!-- Блок номер 3 (о бонусах) -->
            <div class="casino-review-info">
                <div class="casino-review-info-title title-bonuses">
                    <span><?php echo $casinobonuses['casino_review_info_title_bonuses']; ?></span>
                </div>

                <?php foreach($casinobonuses['casino_review_info_item_bonuses'] as $key => $item) {
                    // var_dump($item);?> 
                    <div class="casino-review-info-about">
                        <div class="casino-review-info-parameter"><?php echo $item['casino_review_info_item_title_bonuses']; ?></div>
                        <div class="casino-review-info-value"><?php 
                        
                        // var_dump($item['casino_review_info_item_select']);

                        if ($item['casino_review_info_item_select_bonuses'] == 'text'){
                            echo $item['casino_review_info_item_value_bonuses'];
                        } 
                        if ($item['casino_review_info_item_select_bonuses'] == 'check'){
                            if($item['casino_review_info_check_bonuses']) { ?>
                                <img src="<?php bloginfo("template_url"); ?>/images/sprite/icon_check.svg" alt="">
                                <?php } else { ?>
                                <img src="<?php bloginfo("template_url"); ?>/images/sprite/icon_x.svg" alt="">
                            <?php }
                        }
                         ?></div>
                    </div>
                    <?php
                }; ?>

                <!-- <img src="<?php echo $casinobonuses['info_item_image']['url'] ?>" alt=""> -->
            </div>
            <!-- Блок номер 3 (о бонусах) -->

            <!-- Кнопка Играть сейчас -->
                <div class="casino-review-btn review-block">
                    <div class="btn-main"><a href="#">Играть сейчас</a></div>
                </div>
             <!-- Кнопка Играть сейчас -->
        </div>

    </div>
   
    <article class="casino-review-single-post post-content">
        <h1><?php echo (get_post_meta($post->ID, "h1", true))?></h1>
        <?php if (have_posts()) : the_post() ?>
        <?php the_content();?>
        <?php endif; ?>
        <?php  get_template_part('template_parts/content-scroll');?>
    </article>
    
    <?php get_template_part('template_parts/author-block');?>
    <?php get_template_part( 'template_parts/blog-post-slider' ); ?>

    <div class="casino-review-reviews">
        <div class="casino-review-reviews-title">
            Отзывы о казино:
        </div>
        <div class="casino-review-reviews-blocks">

            <div class="casino-review-reviews-item">
                <div class="casino-review-reviews-item-top">
                    <div class="casino-review-reviews-item-name">
                        Верблюдий Людий
                    </div>
                    <div class="casino-review-reviews-item-rating">
                        <div class="casino-review-reviews-item-stars">
                            <img src="<?php bloginfo("template_url"); ?>/images/icons_stars.png" alt="Stars">   
                        </div>
                        <div class="casino-review-reviews-item-mark">
                            (4.1) - Отлично
                        </div>
                    </div>
                </div>
                <div class="casino-review-reviews-item-text">
                    Those who like poker in Australia will find our resource useful as all the info that they might need is gathered in one place. Those who like poker in Australia will find our resource useful as all the info that they might need is gathered in one place.
                </div>
                <div class="casino-review-reviews-item-date">
                    03.06.2020
                </div>
            </div>

            <div class="casino-review-reviews-item">
                <div class="casino-review-reviews-item-top">
                    <div class="casino-review-reviews-item-name">
                        Верблюдий Людий
                    </div>
                    <div class="casino-review-reviews-item-rating">
                        <div class="casino-review-reviews-item-stars">
                            <img src="<?php bloginfo("template_url"); ?>/images/icons_stars.png" alt="Stars">   
                        </div>
                        <div class="casino-review-reviews-item-mark">
                            (4.1) - Отлично
                        </div>
                    </div>
                </div>
                <div class="casino-review-reviews-item-text">
                    Those who like poker in Australia will find our resource useful as all the info that they might need is gathered in one place. Those who like poker in Australia will find our resource useful as all the info that they might need is gathered in one place.
                </div>
                <div class="casino-review-reviews-item-date">
                    03.06.2020
                </div>
            </div>

            <div class="casino-review-reviews-item">
                <div class="casino-review-reviews-item-top">
                    <div class="casino-review-reviews-item-name">
                        Верблюдий Людий
                    </div>
                    <div class="casino-review-reviews-item-rating">
                        <div class="casino-review-reviews-item-stars">
                            <img src="<?php bloginfo("template_url"); ?>/images/icons_stars.png" alt="Stars">   
                        </div>
                        <div class="casino-review-reviews-item-mark">
                            (4.1) - Отлично
                        </div>
                    </div>
                </div>
                <div class="casino-review-reviews-item-text">
                    Those who like poker in Australia will find our resource useful as all the info that they might need is gathered in one place. Those who like poker in Australia will find our resource useful as all the info that they might need is gathered in one place.
                </div>
                <div class="casino-review-reviews-item-date">
                    03.06.2020
                </div>
            </div>

            <div class="casino-review-reviews-item">
                <div class="casino-review-reviews-item-top">
                    <div class="casino-review-reviews-item-name">
                        Верблюдий Людий
                    </div>
                    <div class="casino-review-reviews-item-rating">
                        <div class="casino-review-reviews-item-stars">
                            <img src="<?php bloginfo("template_url"); ?>/images/icons_stars.png" alt="Stars">   
                        </div>
                        <div class="casino-review-reviews-item-mark">
                            (4.1) - Отлично
                        </div>
                    </div>
                </div>
                <div class="casino-review-reviews-item-text">
                    Those who like poker in Australia will find our resource useful as all the info that they might need is gathered in one place. Those who like poker in Australia will find our resource useful as all the info that they might need is gathered in one place.
                </div>
                <div class="casino-review-reviews-item-date">
                    03.06.2020
                </div>
            </div>

        </div>

        <div class="casino-review-reviews-subtitle">
            Добавить свой отзыв
        </div>
        <div class="casino-review-reviews-form">
            <div class="casino-review-reviews-form-left">
                <div class="casino-review-reviews-form-rating">
                    <div class="casino-review-reviews-form-title">
                        Оценка
                    </div>
                    <div class="casino-review-reviews-form-stars">
                        <img src="<?php bloginfo("template_url"); ?>/images/icons_stars.png" alt="Stars">  
                    </div>
                    <div class="casino-review-reviews-form-mark">
                        (4.1) - Отлично
                    </div>
                </div>
                <input name="name" id="name" placeholder="Ваше имя" type="text"
                    class="input casino-review-reviews-input style-input" required="">
                <input name="email" id="email" placeholder="Ваш e-mail" type="email"
                    class="input casino-review-reviews-input style-input" required="">
            </div>
            <div class="casino-review-reviews-form-right">
                <textarea id="form_message" name="message" class="form-control"
                    placeholder="Ваш комментарий" required="required"
                    data-error="Ваш комментарий"></textarea>
            </div>
        </div>
        <div class="casino-review-btn">
            <a class="btn-primary" href="#">Опубликовать отзыв</a>
        </div>
    </div>
        
        



    </div>

<?php get_footer(); ?>