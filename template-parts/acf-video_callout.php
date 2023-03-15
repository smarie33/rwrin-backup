<?php

/**
 * Template part for displaying Advanced Custom Fields Content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

?>

<div class="row video_callout my-5">
  <div class="col-10 offset-1 py-5">
    <h2><?php the_sub_field('title') ?></h2>
    <?php echo createVideoIframe(get_sub_field('video_url')) ?>
  </div>
</div>
