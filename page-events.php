<?php
/*
  Template Name: Events

*/

$main_image = get_field('main_image');
$main_content = get_field('main_content');
$event_popup = get_field('event_popup');
get_header(); ?>

<div class="page-heading text-center">

    <div class="container zoomIn animated">
      <h1 class="page-title">TAKE ACTION<span class="title-under"></span></h1>
      <p class="page-description">PAST &amp; UPCOMING EVENTS</p>
    </div>

  </div>

  <div class="main-container">

    <div class="container">

      <div class="row fadeIn animated">

        <div class="col-md-6">

          <img src= <?php echo $main_image['url'] ?> alt="" class="img-responsive">

        </div>

        <div class="col-md-6">
          <h2 class="title-style-2">Events! <span class="title-under"></span></h2>
          <p> <?php echo $main_content ?> </p>
        </div>

      </div> <!-- /.row -->

      <div class="section-home about-us">


                  <div class="row">
                    <?php $event_array = new WP_Query( array('cat' => 15) ); ?>
                    <?php while( $event_array->have_posts() ) : $event_array->the_post() ?>

                      <div class="col-md-3 col-sm-6">
                
                
                        <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="<?php the_field('image') ?>" alt="">
                        </div>
                        <h3 class="col-title"> <?php the_field('title') ?></h3>
                        <div class="col-details">
                          <p><center> <?php the_field('sub_title') ?></center></p>
                        </div>
                        <div class="btn btn-primary event-btn" id="<?php the_field('class_id_name') ?>"> Read more </div>
                        <div class="event-<?php the_field('class_id_name') ?> modal">
                          <div class="modal-content">
                            <span class="close">&times;</span>
                            <p> <?php the_field('description') ?></p>
                          </div>
                        </div>
                    
                  </div>
                  
                  </div>


                <?php endwhile; ?>

                     
                      

                      
                  </div> <!-- /.row -->


    </div> <!-- /.about-us -->


      

                          

                      </div> <!-- /.team-member -->
                      
                  </div>

              </div> <!-- /.row -->

          </div>

      </div>
    


  </div>

<?php get_footer(); ?>
<script><?php echo $event_popup ?></script>