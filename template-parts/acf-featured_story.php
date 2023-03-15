<?php

/**
 * Template part for displaying Advanced Custom Fields Content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

?>

<div class="row featured_story py-5">
  <div class="img-behind col-8 col-md-4 offset-4 offset-md-6">
    <h1 class="d-md-none">Featured Story</h1>
    <img class="img-fluid" src="<?php echo get_sub_field('image')['sizes']['1536x1536'] ?>" alt="<?php echo get_sub_field('image')['alt'] ?>">
  </div>
  <div class="blurb col-10 col-md-6 col-lg-5 offset-1 offset-lg-2 mt-5 pt-5">
    <h1 class="d-none d-md-block pl-2 px-4">Featured Story</h1>
    <div class="word-box px-4 py-4">
      <h3 class="bold black"><?php the_sub_field('title') ?></h3>
      <p class="py-4"><?php the_sub_field('blurb') ?></p>
      <div class="row">
        <div class="col-8 col-md-4">
          <a class="button" href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_title') ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
