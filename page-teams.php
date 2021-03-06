<?php 
/*
  Template Name: Teams
*/


$main_image = get_field('main_image');
$main_content = get_field('main_content');
get_header(); ?>


  <div class="page-heading text-center">

    <div class="container zoomIn animated">
      
      <h1 class="page-title">TEAMS<span class="title-under"></span></h1>
      <p class="page-description">Our Leaders : Our Talent</p>
    </div>

  </div>


<div class="main-container">
    

    <div class="container">

      <div class="row fadeIn animated">

        <div class="col-md-6">

          <img src=<?php echo $main_image['url'] ?>  alt="" class="img-responsive">

        </div>

        <div class="col-md-6">
          <h2 data_temp_dwid="1">OUR START</h2>
          <p> <?php echo $main_content ?> </p>
        </div>

      </div> <!-- /.row -->


    </div> <!-- /.about-us -->


      <div class="our-team animate-onscroll fadeIn">

          <div class="container">
            <h2 class="title-style-1">Our maya Guatemala Team <span class="title-under"></span></h2>
            <div class="row">
              <?php $maya_array = new WP_Query( array('cat' => 13) ); ?>
              <?php while ( $maya_array->have_posts() ) : $maya_array->the_post() ?>
                <div class="col-md-3 col-sm-6">

                      <div class="team-member">

                          <div class="thumnail">

                              <img src="<?php the_field('image') ?>" alt="" class="w-100">
                              
                          </div>



                          <h4 class="member-name" id="<?php the_field('class_id_name') ?>"> <?php the_title() ?> </h4>

                          <div class="member-position">
                              <?php the_field('position') ?>
                          </div>


                          <div class="bio-<?php the_field('class_id_name') ?> modal">
                            <div class="modal-content">
                              <div class="header">                               
                                <img src="<?php the_field('image') ?>" alt="" class="w-60"/>
                                <span class="close">&times;</span>
                              </div>
                              <div class="description">
                                <p><?php the_field('description') ?></p>
                              </div>
                            </div>
                          </div>

                          

                      </div> <!-- /.team-member -->
                      
                </div>

              <?php endwhile; ?>

              </div>

            
          </div> 

    </div> <!-- /.about-us -->


      <div class="our-team animate-onscroll fadeIn">

          <div class="container">
            <h2 class="title-style-1">Our Lumbee tribe Team <span class="title-under"></span></h2>
            <div class="row">

              <?php $lumbee_array = new WP_Query( array('cat' => 12) ); ?>
              <?php while ( $lumbee_array->have_posts() ) : $lumbee_array->the_post() ?>
                <div class="col-md-3 col-sm-6">

                      <div class="team-member">

                          <div class="thumnail">

                              <img src="<?php the_field('image') ?>" alt="" class="w-100">
                              
                          </div>



                          <h4 class="member-name" id="<?php the_field('class_id_name') ?>"> <?php the_title() ?> </h4>

                          <div class="member-position">
                              <?php the_field('position') ?>
                          </div>


                          <div class="bio-<?php the_field('class_id_name') ?> modal">
                            <div class="modal-content">
                              <div class="header">                               
                                <img src="<?php the_field('image') ?>" alt="" class="w-50"/>
                                <span class="close">&times;</span>
                              </div>
                              <div class="description">
                                <p><?php the_field('description') ?></p>
                              </div>
                            </div>
                          </div>

                          

                      </div> <!-- /.team-member -->
                      
                </div>

              <?php endwhile; ?> 
      </div> <!-- /.row -->


      </div>

          </div>
    
        
</div>

 <?php get_footer(); ?>