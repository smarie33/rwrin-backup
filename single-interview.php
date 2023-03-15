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
            <?php bootscore_category_badge(); ?>
            <div class="row">
              <div class="breadcrumbs col-6 offset-1 mb-5">
                <?php get_breadcrumb('interview') //the_breadcrumb(); ?>
              </div>
            </div>
          </header>

          <div class="entry-content">
            <div class="row">
              <div class="video col-10 col-lg-6 offset-1">
                <?php echo createVideoIframe(get_field('video_link')); ?>
              </div>
              <div class="col-10 offset-1 col-sm-9 offset-sm-2 col-lg-5 offset-lg-6 col-xl-4 offset-xl-7 mt-5 blurb">
                <div class="info py-3 px-3">
                  <p class="primary-color mb-0"><?php the_field('min') ?> MIN</p>
                  <?php
                  $tags = get_the_terms( get_the_ID(), 'post_tag' );
                  $tag_urls = [];
                  foreach($tags as $tag):
                    $tag_link = get_tag_link( $tag->term_id );
                    $tag_urls[] = '<a class="tag" href="'.$tag_link.'" title="'.$tag->name.'">'.$tag->name.'</a>';
                  endforeach; ?>
                  <p class="primary-color">TOPICS: <?php echo implode(', ',$tag_urls); ?></p>
                  <?php the_title('<h1 class="semibold black my-4">', '</h1>'); ?>
                  <p><?php the_field('information') ?></p>
                  <div class="row mt-4 mb-4 mt-md-5">
                    <div class="col-12 col-md-6 mt-2">
                      <a class="button" href="<?php echo home_url("/documentaries") ?>">Thematic Explorations</a>
                    </div>
                    <?php if(get_field("transcript_link") != ""): ?>
                    <div class="col-12 col-md-6 mt-2">
                      <a class="button gray d-flex align-items-center justify-content-center" target="_blank" href="<?php the_field("transcript_link") ?>">Transcript</a>
                    </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </main> <!-- #main -->

      </div><!-- col -->
    </div><!-- row -->

  </div><!-- #primary -->
</div><!-- #content -->

<?php get_footer(); ?>
