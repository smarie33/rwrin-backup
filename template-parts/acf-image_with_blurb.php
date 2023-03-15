<?php

/**
 * Template part for displaying Advanced Custom Fields Content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

?>

<div class="row image_with_blurb clearfix">
  <div class="img-behind col-10 col-md-7">
    <img class="img-fluid" src="<?php echo get_sub_field('image')['sizes']['1536x1536'] ?>" alt="<?php echo get_sub_field('image')['alt'] ?>">
  </div>
  <div class="blurb col-10 col-md-8 col-lg-6 offset-1 offset-md-3 offset-lg-5">
    <h3 class="bold"><?php the_sub_field('blurb') ?></h3>
  </div>
</div>
