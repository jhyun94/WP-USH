<?php
/*
  Template Name: Vision
 */

get_header(); ?>

<div>
  <div class="container">
    <h2 class="title-style-1">OUR VISION<span class="title-under"></span></h2>
    <div class="row">
      <div class="col-md-6">
        <p style="text-align: center;&nbsp;italics">We envision a future where Indigenous youth leaders around the world inspire teams of young people to capture, revive, and reinvigorate their cultures, traditions, and languages through creating and discussing documentary films. </p>
        <p style="text-align: center; italics"> We imagine these Indigenous youth leaders making social impacts, locally and globally by sharing their films across generational and geographical boundaries.</p> <p style="text-align: center; italics"> Listen to their visions!</p>
      </div>
      <?php $vision_video = new WP_Query( array('cat' => 22) ); ?>
        <?php while ( $vision_video->have_posts() ) : $vision_video->the_post() ?>
          <div class="col-md-6">
            <p style="text-align: center;"><iframe width="500" height="280" frameborder="0" src="<?php the_field(video_source) ?>"><br />
            </iframe></p>
          </div>
        <? endwhile; ?>
    </div>
  </div>
</div>




<?php get_footer(); ?>