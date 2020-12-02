<?php
  $post = $wp_query->post;
 
  if (in_category('luchshie-sloty')) { //slug  категории
      include('single-luchshie-sloty.php');
  } elseif (in_category('blog')) {
      include('single-blog.php');
  } elseif (in_category('casino-review')) {
    include('single-casino-review.php');
    } else {
    include('single-default.php');
}
?>