<?php get_header(); ?>
    <div class="post container">

        <?php $front_id = get_option('page_on_front'); ?>
        <?php $gameinfo = get_field('game_info'); ?>
        <?php $iframe = get_field('iframe'); ?>
        <?php $horizontal_casino = get_field('horizontal_casino', $front_id); ?>

        <article class="single-post post-content">
            <h1><?php echo (get_post_meta($post->ID, "h1", true)) ?></h1>
            <?php if (have_posts()) : the_post() ?>
            <?php the_content();?>
            <?php endif; ?>
        </article>
   
        <?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
        <div class="for-h"></div>

        <div class="post-wrapper">

            <div class="post-wrapper-left">
                <!--noindex-->

                <?php echo $iframe; ?>
                
                <!--/noindex-->
                <div class="post-wrapper-left-btn">
                    <div class="btn-main" data-link="cG0tY2FzaW5v">Играть на деньги</div>
                </div>  
               

                <div class="main-text"></div>
                <?php get_template_part( 'template_parts/content-scroll' ); ?>
            </div>

            <div class="post-wrapper-right">

            <div class="games-info">
                <div class="games-info-title">
                    <span><?php echo $gameinfo['info_title']; ?></span>
                </div>
              
                <?php foreach($gameinfo['info_item'] as $key => $item) {
                    // var_dump($item);?> 
                    <div class="games-info-about">
                        <div class="games-info-parameter"><?php echo $item['item_title']; ?></div>
                        <div class="games-info-value"><?php 
                        
                        // var_dump($item['item_select']);

                        if ($item['item_select'] == 'text'){
                            echo $item['item_value'];
                        } 
                        if ($item['item_select'] == 'check'){
                            if($item['item_check']) { ?>
                                <img src="<?php bloginfo("template_url"); ?>/images/sprite/icon_x.svg" alt="">
                                <?php } else { ?>
                                <img src="<?php bloginfo("template_url"); ?>/images/sprite/icon_check.svg" alt="">
                            <?php }
                        }
                         ?></div>
                    </div>
                    <?php
                }; ?>

            </div>

            <?php  get_template_part('template_parts/game-items-4vertical');?> 
                
            </div>

            <?php get_template_part( 'template_parts/affiliate-horizontal-block', null, $horizontal_casino ); ?>

            <?php  get_template_part('template_parts/author-block');?>
        
        </div>
        
    </div>
        
<!-- Кнопка для редактирвоания поста -->

<?php get_footer(); ?>