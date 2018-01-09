<?php
/*
  Template Name: Focus
 */

get_header(); ?>

<div>
  <div class="container">
    <h2 class="title-style-1">OUR VISION<span class="title-under"></span></h2>
    <div class="row">
      <?php $vision_video = new WP_Query( array('cat' => 22) ); ?>
        <?php while ( $vision_video->have_posts() ) : $vision_video->the_post() ?>
          <div class="col-md-6">
            <p class="vision-content"><?php the_field('video_content') ?></p>
          </div>
          <div class="col-md-6">
            <p style="text-align: center;"><iframe width="500" height="280" frameborder="0" src="<?php the_field(video_source) ?>"><br />
            </iframe></p>
          </div>
        <? endwhile; ?>
    </div>
  </div>
</div>




<?php get_footer(); ?>