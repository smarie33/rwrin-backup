<?php
/*
	 * Template Post Type: post
	 */

get_header();  ?>

<div id="content" class="site-content container-fluid mt-5 pt-5 gx-0">
  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

        <main id="main" class="site-main">

          <header class="entry-header">
            <?php the_post(); ?>
            <div class="row">
              <div class="text-center col-10 offset-1 py-5">
                <h1>Event: <?php the_field('date_of_event'); ?></h1>
              </div>
            </div>
            <div class="row">
              <div class="title col-10 col-lg-8 offset-1 offset-lg-2 pb-5">
                <h2><?php the_title(); ?></h2>
              </div>
            </div>
            <?php bootscore_category_badge(); ?>
          </header>

          <div class="entry-content">
            <div class="row">
              <div class="col-10 offset-1 col-lg-8 offset-1 offset-lg-2">
                <?php the_content(); ?>
              </div>
            </div>
          </div>

        </main> <!-- #main -->

      </div><!-- col -->
    </div><!-- row -->

  </div><!-- #primary -->
</div><!-- #content -->

<?php get_footer(); ?>
