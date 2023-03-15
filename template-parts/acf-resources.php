<?php

/**
 * Template part for displaying Advanced Custom Fields Content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */
$resources = get_sub_field("resources")
?>

<div class="row">
  <div class="col-12 col-md-9 offset-md-3 ps-3 py-3 mt-3"><h1><?php the_sub_field("title"); ?></h1></div>
</div>

<div class="row resources">
  <div class="col-12 col-md-9 offset-md-3 py-4 ps-4">
    <?php
      foreach($resources as $resource):
    ?>
        <h3 class="py-3"><?php echo $resource['title'] ?></h3>
    <?php

        foreach($resource['links'] as $link):
    ?>
          <a target="_blank" href="<?php echo $link["link"] ?>"><?php echo $link["title"] ?></a>
          <?php if($link["description"] != ''): ?><p><?php echo $link["description"] ?></p><?php else: ?><p></p><?php endif; ?>
    <?php
        endforeach;
      endforeach;
    ?>
  </div>
</div>
