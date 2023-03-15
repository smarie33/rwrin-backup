<?php

/**
 * Template part for displaying Advanced Custom Fields Content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

$columns = get_sub_field('columns');
$amt = count($columns);
$col = "col-4";

switch ($amt){
  case 1:
    $col = "col-11 col-md-10";
    break;
  case 2:
    $col = "col-md-5";
    break;
}
?>

<div class="row callout_blurb_bleeding my-5">
  <?php $cnt = 1; ?>
  <div class="col-11 col-md-10<?php if(get_sub_field('bleed') == 'right'): ?> offset-1 offset-md-2 <?php endif; ?>">
    <?php if(get_sub_field('bleed') == 'left'): ?><div class="row"><div class="col-10 offset-1"><?php endif; ?>
    <h1><?php the_sub_field('title') ?></h1>
    <?php if(get_sub_field('bleed') == 'left'): ?> </div></div><?php endif; ?>
    <div class="row info py-4">
      <?php foreach($columns as $column): ?>
      <div class="info <?php if($cnt == 2): ?>col-12 col-md-6 py-5 py-md-0 ps-5 px-md-4<?php else: echo 'pe-4 pe-md-1 col-11 '.$col; endif; ?> <?php if(get_sub_field('bleed') == 'left' && $cnt == 1): ?> offset-1<?php endif; ?>">
        <?php if($column['subtitle'] != ''): ?><h3><?php echo $column['subtitle'] ?></h3><?php endif; ?>
        <?php if(!empty($column['image'])): ?><img src="<?php echo $column['image']['sizes']['medium'] ?>" /><?php endif; ?>
        <?php if($column['information'] != ''): ?><p><?php echo $column['information'] ?></p><?php endif; ?>
      </div>
      <?php $cnt++ ?>
    <?php endforeach; ?>
    </div>
  </div>
</div>
