<?php

/**
 * Template part for displaying Advanced Custom Fields Content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

?>

<?php
$args = array(
  'post_type' => 'committee',
  'post_status' => 'publish',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ):
    while ( $the_query->have_posts() ) :
      $the_query->the_post();
?>
<div class="row committee_list my-5 py-4 py-md-0 align-items-center">
  <div class="col-3 offset-1 offset-lg-2 photo px-0">
    <div style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium-large' ); ?>)"></div>
  </div>
  <div class="col-10 offset-1 col-sm-9 offset-sm-2 col-md-7 col-lg-6 offset-md-4 blurb">
    <div class="py-3 px-3">
      <h4 class="bold"><?php the_title() ?></h4>
      <p><?php the_content() ?></p>
    </div>
  </div>
</div>
<?php
    endwhile;
endif;
wp_reset_postdata();
?>
