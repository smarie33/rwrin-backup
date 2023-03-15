<?php

/**
 * Template part for displaying Advanced Custom Fields Content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */
$cnt = 1;
$cards = get_sub_field('4_up');
?>

<div class="row py-5 four_up">
  <h2><?php the_sub_field('tile') ?></h2>
  <?php foreach($cards as $card): ?>
  <div class="col-10 col-md-5 col-xl-2 <?php if($cnt>4): ?>offset-xl-0<?php endif; ?> offset-1 <?php if($cnt==2 || $cnt==4): ?>offset-md-0 <?php endif; ?> <?php if($cnt==3): ?>offset-xl-0 <?php endif; ?> <?php if($cnt==1): ?> offset-xl-1<?php endif; ?> mb-4 mb-xl-0 d-flex align-items-stretch flex-column">
    <div class="photo align-self-end" style="background-image: url(<?php echo $card["image"]["sizes"]["medium"]; ?>)"></div>
    <div class="blurb px-3 py-3 align-self-end">
      <h4 class="bold"><?php echo $card["title"] ?></h4>
      <p><?php echo $card["blurb"] ?></p>
    </div>
  </div>
  <?php $cnt++; ?>
  <?php endforeach; ?>
</div>
