<div class="affiliate__vertical">
<?php $casinoparameter = get_field('casino_parameter'); ?>
    <div class="affiliate__vertical-img">
        <img src="<?php echo $casinoparameter['casino_parameter_image']['url'] ?>" alt="<?php echo $casinoparameter['casino_parameter_image_alt']; ?>">
    </div>
    <div class="affiliate__vertical-rating">
        <div class="affiliate__vertical-stars">
            <img src="<?php bloginfo("template_url"); ?>/images/icons_stars.png" alt="Stars">   
        </div>
        <div class="affiliate__vertical-mark">
            (4.1) - Отлично
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
    </div>
    <div class="affiliate__vertical-title">
        <span><?php echo $casinoparameter['casino_parameter_name']; ?></span>
    </div>
    <div class="affiliate__vertical-subtitle">
        - Выбор редакции -
    </div>
    <div class="affiliate__vertical-price">
        <span><?php echo $casinoparameter['casino_parameter_prize']; ?></span>
    </div>
    <div class="affiliate__vertical-descr">
        <span><?php echo $casinoparameter['casino_parameter_description']; ?></span>
    </div>
    <div class="btn-main">
        <div data-link="Z28tcGxheQ==">Играть сейчас</div>
    </div>
    <div class="affiliate__vertical-read">
        <a href="<?php the_permalink(); ?>">Read review ></a>
    </div>
</div>
