<?php

/**
 * Template part for displaying Advanced Custom Fields Content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

?>

<div class="row d-none d-lg-flex interview_list py-4 align-items-stretch">

<?php
$icnt = 0;
$pst_cnt = 0;
$args = array(
  'post_type' => 'interview',
  'post_status' => 'publish',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args );

$sortedPosts = [];
$onlyName = [];
$fullpost = [];
$allPosts = $the_query->posts;
foreach($allPosts as $p){
  $namePieces = explode(' ',$p->post_title);
  $fullpost[end($namePieces)] = $p;
  $onlyName[] = end($namePieces);
}
	
sort($onlyName);

foreach($onlyName as $oname){
	foreach($fullpost as $key=>$fp){
		if($oname == $key){
			$sortedPosts[] = $fp;
		}
	}
}


if( $the_query->have_posts() ):
    $pst_amt = $the_query->found_posts;
    foreach( $sortedPosts as $sp ) :
?>
  <div class="col-lg-3<?php if($icnt == 0): ?> offset-lg-1<?php endif; ?>  d-flex align-items-stretch justify-content-end flex-column">
    <a class="align-self-end" href="<?php the_permalink($sp->ID) ?>">
      <div class="photo align-self-end" style="background-image: url(<?php echo get_the_post_thumbnail_url($sp->ID, 'medium-large' ); ?>)"></div>
    </a>
    <a href="<?php the_permalink($sp->ID) ?>">
      <div class="blurb py-3 px-3">
        <h4 class="bold"><?php echo $sp->post_title ?></h4>
        <p><?php echo $sp->post_excerpt ?></p>
      </div>
    </a>
  </div>
<?php
      $icnt++; $pst_cnt++;
      if($icnt == 3 && $pst_cnt != $pst_amt):
          $icnt = 0;
?>
      </div>
      <div class="row d-none change-margin d-lg-flex interview_list py-4 align-items-stretch">
<?php
      endif;
      if($pst_cnt == $pst_amt): ?>
      </div>
<?php
        endif;
    endforeach;
endif;
wp_reset_postdata();
?>

<div class="row d-none d-md-flex d-lg-none interview_list pt-5 align-items-stretch">
<?php
$icnt_sm = 0;
$pst_cnt_sm = 0;

$the_query_sm = new WP_Query( $args );

if( $the_query_sm->have_posts() ):
    $pst_amt = $the_query_sm->found_posts;
    foreach( $sortedPosts as $sp ) :
?>
  <div class="col-5<?php if($icnt_sm == 0): ?> offset-1 <?php endif; ?> d-flex align-items-stretch justify-content-end flex-column">
    <a class="align-self-end" href="<?php the_permalink($sp->ID) ?>">
      <div class="photo align-self-end" style="background-image: url(<?php echo get_the_post_thumbnail_url( $sp->ID, 'medium-large' ); ?>)"></div>
    </a>
    <a href="<?php the_permalink($sp->ID) ?>">
      <div class="blurb py-3 px-3">
        <h4 class="bold"><?php echo $sp->post_title ?></h4>
        <p><?php echo $sp->post_excerpt ?></p>
      </div>
    </a>
  </div>
<?php
      $icnt_sm++; $pst_cnt_sm++;
      if($icnt_sm == 2 && $pst_cnt_sm != $pst_amt):
          $icnt_sm = 0;
?>
      </div>
      <div class="row change-margin d-none d-md-flex d-lg-none interview_list py-0 align-items-stretch">
<?php
      endif;
      if($pst_cnt_sm == $pst_amt): ?>
      </div>
<?php
        endif;
    endforeach;
endif;
wp_reset_postdata();
?>

<?php
$icnt_xs = 0;
$pst_cnt_sm = 0;

$the_query_sm = new WP_Query( $args );

if( $the_query_sm->have_posts() ):
    $pst_amt = $the_query_sm->found_posts;
    foreach( $sortedPosts as $sp ) :
?>
<div class="row d-md-none interview_list <?php if($icnt_xs != 0): ?>change-margin <?php endif; ?><?php if($icnt_xs == 0): ?>pt-5 <?php endif; ?>py-0 py-md-4 align-items-stretch">
  <div class="col-9 offset-2 d-flex align-items-stretch justify-content-end flex-column">
    <a class="align-self-end" href="<?php the_permalink($sp->ID) ?>">
      <div class="photo align-self-end" style="background-image: url(<?php echo get_the_post_thumbnail_url( $sp->ID, 'medium-large' ); ?>)"></div>
    </a>
    <a href="<?php the_permalink($sp->ID) ?>">
      <div class="blurb py-3 px-3">
        <h4 class="bold"><?php echo $sp->post_title ?></h4>
        <p><?php echo $sp->post_excerpt ?></p>
      </div>
    </a>
  </div>
</div>
<?php
    $icnt_xs++;
    endforeach;
endif;
wp_reset_postdata();
?>
