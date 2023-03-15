<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.2.0.0
 */

?>

<footer>

  <div class="bootscore-footer pt-5 pb-3">
    <form action="https://rn-reckoning.us18.list-manage.com/subscribe/post?u=4fa2cbda305bedd008c7fc9eb&amp;id=4c3b8b6623&amp;f_id=00b302e7f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate footer-form" target="_blank" novalidate>
      <div class="container-fluid">
        <div class="row">
          <div class="col-10 offset-1 col-lg-6 offset-lg-3">
            <small class="d-block mb-3">stay in touch</small>
            <h2 class="semibold mb-5">Join Our Mailing List</h2>
            <div class="row py-3">
              <div class="col-12 col-md-6 pb-3 pb-md-0">
                <input type="text" value="" name="FNAME" class="" placeholder="first name" id="mce-FNAME">
              </div>
              <div class="col-12 col-md-6 pt-3 pt-md-0">
                <input type="text" value="" name="LNAME" class="" placeholder="last name" id="mce-LNAME">
              </div>
            </div>
            <div class="row py-3">
              <div class="col-12 col-md-6 pb-3 pb-md-0">
                <input type="text" value="" name="POSITION" class="" placeholder="position" id="mce-POSITION">
              </div>
              <div class="col-12 col-md-6 pt-3 pt-md-0">
                <input type="email" value="" name="EMAIL" class="required email" placeholder="email" id="mce-EMAIL" required>
              </div>
            </div>
            <div class="row pt-4 pb-5">
              <div class="col-6 offset-6 offset-md-9 col-md-3 justify-content-end">
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4fa2cbda305bedd008c7fc9eb_4c3b8b6623" tabindex="-1" value=""></div>
    </form>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[6]='POSITION';ftypes[6]='text';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';fnames[3]='MMERGE3';ftypes[3]='address';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

    <div class="container-fluid">
      <!-- Top Footer Widget -->
      <?php if (is_active_sidebar('top-footer')) : ?>
        <div>
          <?php dynamic_sidebar('top footer'); ?>
        </div>
      <?php endif; ?>

      <div class="row">

        <!-- Footer 1 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-1')) : ?>
            <div>
              <?php dynamic_sidebar('footer-1'); ?>
            </div>
          <?php endif; ?>
        </div>

        <!-- Footer 2 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-2')) : ?>
            <div>
              <?php dynamic_sidebar('footer-2'); ?>
            </div>
          <?php endif; ?>
        </div>

        <!-- Footer 3 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-3')) : ?>
            <div>
              <?php dynamic_sidebar('footer-3'); ?>
            </div>
          <?php endif; ?>
        </div>

        <!-- Footer 4 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-4')) : ?>
            <div>
              <?php dynamic_sidebar('footer-4'); ?>
            </div>
          <?php endif; ?>
        </div>
        <!-- Footer Widgets End -->

      </div>

      <!-- Bootstrap 5 Nav Walker Footer Menu -->
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container' => false,
        'menu_class' => '',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
        'depth' => 1,
        'walker' => new bootstrap_5_wp_nav_menu_walker()
      ));
      ?>
      <!-- Bootstrap 5 Nav Walker Footer Menu End -->

    </div>
  </div>

  <div class="bootscore-info py-4 text-center">
    <div class="container">
      <small>&copy;&nbsp;<?php echo Date('Y'); ?> Reckoning with Racism in Nursing Committee- Produced by StoryCenter in association with Seedworks Films</small>
    </div>
  </div>

</footer>

<!-- To top button -->
<a href="#" class="btn btn-primary shadow top-button position-fixed zi-1020"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
