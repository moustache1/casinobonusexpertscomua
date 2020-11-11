<?php get_header(); ?>
    <div class="post container">
        <?php $gameinfo = get_field('game_info'); ?>
        <!-- // var_dump($gameinfo);?> -->
        <article class="single-post post-content">
            <h1><?php echo (get_post_meta($post->ID, "h1", true))?></h1>
            <?php if (have_posts()) : the_post() ?>
            <?php the_content();?>
            <?php endif; ?>
        </article>
   
        <?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
        <div class="for-h"></div>

        <div class="post-wrapper">

            <div class="post-wrapper-left">
                <!--noindex-->
                <div class="frame">
                    <div class="frame-adopt">
                    <?php
                    $game_mob_shortcode = get_post_meta( $post->ID, 'mob_iframe', true ); //назначение мобильного фрейма
                    $game_shortcode = get_post_meta( $post->ID, 'iframe', true ); // назначение десктоп фрейма
                    // mobile version
                    if ( wp_is_mobile() ) { ?>
                    <?php if ( empty( $game_mob_shortcode ) ) { ?>
                        <span data-link="#" class="center-block game-picture-wrapper">
                        <?php
                        $picture    = 'img_nogame.jpg';
                        $screenshot = get_post_meta( $post->ID, 'picture', true );
                        if ( ! empty( $screenshot ) ) {
                            $picture = $screenshot;
                        }?>
                        <img src="/wp-content/uploads/<?php echo $picture ?>" alt="<?php echo $post->post_title ?>">
                        </span>
                    <?php } else { ?>
                        <iframe class="center-block" src="https://pm-redir.com?path=/game_promo/<?php echo $game_mob_shortcode; ?>?ref=fap_w11617p119_seo-pmc-001"
                        max-width="auto" height="auto" scrolling="yes" marginheight="0" marginwidth="0"
                        frameborder="0"></iframe>
                    <?php } ?>
                    <!-- desctop version-->
                    <?php } else {
                        if ( empty( $game_shortcode ) ) { ?>
                        <span data-link="cGxheS1wbQ==" class="center-block game-picture-wrapper">
                            <?php
                            $picture    = 'img_nogame.jpg';
                            $screenshot = get_post_meta( $post->ID, 'picture', true );
                            if ( ! empty( $screenshot ) ) {
                            $picture = $screenshot;
                            }
                            $categories = get_the_category($post_id);
                            $cur_cat = $categories[0]->slug;

                            if ($cur_cat === 'blog'){
                            $default_attr = array('title' => $post->post_title);
                            $image_id = get_post_thumbnail_id();
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                            $image_title = get_the_title($image_id);
                            echo '<img data-src="'.get_the_post_thumbnail_url().'" alt="'.$image_alt.'" title="'.$image_title.'" />';
                            } else { ?>

                            <img src="/wp-content/uploads/<?php echo $picture ?>"
                                alt="<?php echo $post->post_title ?>">
                            <?php }?>
                        </span>
                            <?php } else { ?>
                            <iframe class="center-block" src="https://pm-redir.com?path=/game_promo/<?php echo $game_shortcode; ?>?ref=fap_w11617p119_seo-pmc-001"
                            width="auto" height="auto" scrolling="no" marginheight="0" marginwidth="0"
                            frameborder="0"></iframe>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="btn-main"><span>Играть на деньги</span></div>
                <!--/noindex-->

                <div class="main-text"></div>
                <?php get_template_part( 'template_parts/content-scroll' ); ?>
            </div>

            <div class="post-wrapper-right">

            <div class="games-info">
                <div class="games-info-title">
                    <span><?php echo $gameinfo['info_title']; ?></span>
                </div>
                <div class="games-info-stars">
                    <img src="<?php bloginfo("template_url"); ?>/images/icons_stars.png" alt="">
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

                <img src="<?php echo $gameinfo['info_item_image']['url'] ?>" alt="">
            </div>

                <?php  get_template_part('template_parts/game-items-4vertical');?> 
                
            </div>
            <?php  get_template_part('template_parts/affiliate-horizontal-block');?>
            <?php  get_template_part('template_parts/author-block');?>
        
        </div>
        
    </div>
        
<!-- Кнопка для редактирвоания поста -->
<?php edit_post_link(__('Edit This')); ?>
<?php get_footer(); ?>