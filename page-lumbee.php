<?php 
/* 

  Template Name: Lumbee

*/

get_header();  
?>


<div class="video-modal">
  <span class="video-close">&times;</span>
  <div class="video-content">
  </div>
</div>

<div class="page-heading text-center">

    <div class="container zoomIn animated">
      
      <h1 class="page-title">LUMBEE GALLERY <span class="title-under"></span></h1>
      <p class="page-description">
        Lumbee life and vision by Youth
      </p>
      
    </div>

  </div>

  <div class="main-container">

    <div class="container gallery fadeIn animated">

      <div class="row">
        <?php $lumbee_array = new WP_Query( array('cat' => 23) ); ?>
        <?php while ( $lumbee_array->have_posts() ) : $lumbee_array->the_post() ?>
          <div class="col-md-3">
          <div class="img__wrap">
            <img src="<?php the_field('image') ?>" class="img-responsive video-btn">
            <p class="img__description" data-link="<?php the_field('video_url') ?>"> <?php the_field('description') ?> </p>
          </div>
        </div>
        <? endwhile; ?>

        
      </div>
      
    </div>







<?php get_footer(); ?>
<script><?php echo $lumbee_resize ?></script>
