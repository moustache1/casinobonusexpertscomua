<div class="affiliate__horizontal-item">
<?php $casinoparameter = get_field('casino_parameter'); ?>
    <div class="affiliate__horizontal-number">
        <?php echo $args + 1 ?>
    </div>
    <div class="affiliate__horizontal-img">
        <img src="<?php echo $casinoparameter['casino_parameter_image']['url'] ?>" alt="<?php echo $casinoparameter['casino_parameter_image']['alt']; ?>">
    </div>
    <div class="affiliate__horizontal-about">
        <div class="affiliate__horizontal-rating">
            <div class="affiliate__horizontal-stars">
                <img src="<?php bloginfo("template_url"); ?>/images/icons_stars.png" alt="Stars">   
            </div>
            <div class="affiliate__horizontal-mark">
                (4.1) - Отлично
            </div>
        </div>
        <div class="affiliate__horizontal-title">
            <span><?php echo $casinoparameter['casino_parameter_name']; ?></span>
        </div>
        <div class="affiliate__horizontal-read">
            <a href="<?php the_permalink(); ?>">Read review ></a>
        </div>
    </div>
    <div class="affiliate__horizontal-detail">
        <div class="affiliate__horizontal-price">
            <span><?php echo $casinoparameter['casino_parameter_prize']; ?></span>
        </div>
        <div class="affiliate__horizontal-descr">
            <span><?php echo $casinoparameter['casino_parameter_description']; ?></span>
        </div>
    </div>
    <div class="affiliate__horizontal-btn">
        <div class="btn-main" data-link="Z28tcGxheQ==">Select a payout speed</div>
    </div>

</div>
