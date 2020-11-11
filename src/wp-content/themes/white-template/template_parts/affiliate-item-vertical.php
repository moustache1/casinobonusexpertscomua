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
        <a href="#">Играть сейчас</a>
    </div>
    <div class="affiliate__vertical-read">
        <a href="<?php the_permalink(); ?>">Read review ></a>
    </div>
</div>
