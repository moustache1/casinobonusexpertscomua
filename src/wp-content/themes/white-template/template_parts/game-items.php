<div class="game-card b-r">

  <div class="game-card-image">
    <?php if (has_post_thumbnail()) {
      $default_attr = array('title' => $post->post_title);
      echo get_the_post_thumbnail(null, 'full', $default_attr);
    } 
    else {
      echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
      . '/images/default-slots.jpg" alt=""/>';
    }
    ?>
  </div>              

  <div class="game-card-name"><?php the_title(); ?> </div>  


  <a href="<?php the_permalink(); ?>" class="game-card-overlay b-r">
    <span data-link="cG0=" class="play-btn"><span>Играть на деньги</span></span>
    <div class="demo-btn">демо игра</div>
  </a> 
 

</div>
