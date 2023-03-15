<?php

/**
 * Template Name: Default Component Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>
<div id="content" class="site-content container-fluid mt-5 pt-5 gx-0">
  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

    <main id="main" class="site-main">

      <div class="entry-content">
        <?php
        if( have_rows('components') ):

          // Loop through rows.
          while ( have_rows('components') ) : the_row();

            get_template_part('template-parts/acf', get_row_layout());
          // End loop.
          endwhile;

      // No value.
      else :
          // Do something...
      endif;
        ?>
      </div>

    </main><!-- #main -->

  </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
