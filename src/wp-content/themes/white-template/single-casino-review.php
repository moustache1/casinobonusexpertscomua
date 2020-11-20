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
                        <?php $average = ci_comment_rating_get_average_ratings( $post->ID); $stars = '';?>
                        <?php
                            for ( $i = 1; $i <= $average + 1; $i++ ) {
                                $width = intval( $i - $average > 0 ? 20 - ( ( $i - $average ) * 20 ) : 20 );                
                            if ( 0 === $width ) {
                                continue;
                            }            
                                $stars .= '<span class="dashicons dashicons-star-filled dashicons-style" style="overflow:hidden; width:' . $width . 'px" class="dashicons dashicons-star-filled dashicons-style"></span>';
                            if ( $i - $average > 0 ) {
                                $stars .= '<span style="overflow:hidden; position:relative; left:-' . $width .'px;" class="dashicons dashicons-star-empty dashicons-style"></span>';
                            }
                        }
                        echo $stars;
                        ?> 
                    </div>
                    <div class="casino-review-mark">
                        
                        <?php if ($average) {
                            echo $average;
                        } else {
                            echo 'No reviews';
                        } ?>
                    </div>
                </div>
                <div class="casino-review-img">
                    <img src="<?php bloginfo("template_url"); ?>/images/pmcasino-bg.png" alt="">
                </div>
                <div class="casino-review-btn">
                    <div class="btn-main"><a data-link="cG0tcGxheQ==">Играть сейчас</a></div>
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
                                ?> 
                                <div class="casino-review-info-about">
                                    <div class="casino-review-info-parameter"><?php echo $item['casino_review_info_item_title']; ?></div>
                                    <div class="casino-review-info-value"><?php 
                                    
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
            </div>
            <!-- Блок номер 1 (о казино) -->

            <!-- Блок номер 4 (о снятии и пополнении) -->
            <div class="casino-review-info info-img">
                <div class="casino-review-info-title">
                    <span><?php echo $casinocash['casino_review_cash_title']; ?></span>
                </div>
                <?php 
                    foreach($casinocash['casino_review_cash_image'] as $key => $image) {
                        
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
                    ?> 
                    <div class="casino-review-info-about">
                        <div class="casino-review-info-parameter"><?php echo $item['casino_review_info_item_title_parameters']; ?></div>
                        <div class="casino-review-info-value"><?php 
                        
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

            </div>
            <!-- Блок номер 2 (о характеристиках) -->

            <!-- Блок номер 5 (разработчики) -->
            <div class="casino-review-info">
                <div class="casino-review-info-title">
                    <span><?php echo $casinoprovider['casino_review_provider_title']; ?></span>
                </div>
                <?php 
                    foreach($casinoprovider['casino_review_provider_image'] as $key => $image) {
                        
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
                    ?> 
                    <div class="casino-review-info-about">
                        <div class="casino-review-info-parameter"><?php echo $item['casino_review_info_item_title_bonuses']; ?></div>
                        <div class="casino-review-info-value"><?php 
                        
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
            </div>
            <?php 

            ?>
            <!-- Блок номер 3 (о бонусах) -->

            <!-- Кнопка Играть сейчас -->
                <div class="casino-review-btn-main">
                    <div class="btn-main"><a data-link="cG0tZ2FtZXM=">Играть сейчас</a></div>
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

 <div class="comments">
    <?php 
    $req = null;
    $commenter = null;
    $aria_req = null;
    $html5 = null;
    $html_req = null;
    ?> 
    <?php if (comments_open()) { ?>
        <?php have_posts(); ?>
            <?php if (get_comments_number() != 0) { ?>
                <?php while (have_posts()) : the_post(); ?>
            <?php comments_template(); ?> 
            <?php

                function my_comment($comment, $args, $depth){
                $GLOBALS['comment'] = $comment; ?>
                <li class="comment comment-li" id="li-comment-<?php comment_ID() ?>">
                    <div id="comment-<?php comment_ID(); ?>">
                    <div class="comment-author vcard">
                        <?php printf(__('<span class="author">%s</span>'), get_comment_author_link()) ?>
                    </div>
                    
                    
                    <?php if ($comment->comment_approved == '0') : ?>
                        <em><?php _e('Ваш комментарий ожидает модерацию.') ?></em>
                        <br>
                    <?php endif; ?>
                    <div class="comment-text"><?php comment_text() ?></div>
                    <div class="comment-meta commentmetadata">
                        <span><?php echo(get_comment_date($c = 'd.m.Y'))  ?></span>
                    </div>
                    </div>

            <?php }
                $args = array(
                'reply_text' => 'Ответить',
                'callback' => 'my_comment'
                );
                wp_list_comments($args);
            ?>
            
            <?php endwhile; ?>
        <?php } ?>
               
        
        <?php } else { ?>
        <h3>Обсуждения закрыты для данной страницы</h3>
        <?php }
    ?>

</div>  
    <div class="comment-form-wrapper">
        <?php
        $fields = array(
            'author' => '<p class="comment-form-author"><label for="author">' . __( 'Name' ) . ($req ? '<span class="required">*</span>' : '') . '</label><input type="text" id="author" name="author" class="author" value="' . esc_attr($commenter['comment_author']) . '" placeholder="Ваше имя"  autocomplete="on" tabindex="1" required' . $aria_req . '></p>',
            'email'  => '<p class="comment-form-email">
            <label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> 
            <input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="Ваш e-mail" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />
            </p>'
        );
        $args = array(
            'comment_notes_after' => '',
            'label_submit' => 'Опубликовать отзыв',
            'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" class="comment-form" aria-required="true" placeholder="Ваш комментарий"></textarea></p>',
            'fields' => apply_filters('comment_form_default_fields', $fields)
        );

        comment_form($args);
        ?>
    </div> 
    <?php get_template_part( 'template_parts/blog-post-slider' ); ?>

    <div class="casino-review-reviews">
        <div class="casino-review-reviews-title">
            Отзывы о казино:
        </div>
       
        <div class="for-comments"></div>  
  
    </div>
</div>



<?php get_footer(); ?>