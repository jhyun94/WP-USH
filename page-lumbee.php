<?php 
/* 

  Template Name: Lumbee

*/
$lumbee_resize = get_field('lumbee_resize');
get_header();  
?>

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
        <?php $lumbee_array = new WP_Query( array('cat' => 16) ); ?>
        <?php while ( $lumbee_array->have_posts() ) : $lumbee_array->the_post() ?>
          <div class="col-md-3">
          <div class="img__wrap">
            <img src="<?php the_field('image') ?>" class="img-responsive video-btn">
            <p class="lumbee__description"> <?php the_field('description') ?> </p>
          </div>
        </div>
        <? endwhile; ?>

        
      </div>
      
    </div>







<?php get_footer(); ?>
<script><?php echo $lumbee_resize ?></script>