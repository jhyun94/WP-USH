<?php 
/*
  Template Name: Boards
*/
$main_image = get_field('main_image');
$main_content = get_field('main_content');
get_header(); ?>

  <div class="page-heading text-center">

    <div class="container zoomIn animated">
      <h1 class="page-title">LEADERSHIP<span class="title-under"></span></h1>
      <p class="page-description">Our Leaders : Our Talent</p>
    </div>

  </div>

  <div class="main-container">


    <div class="container">

      <div class="row fadeIn animated">

        <div class="col-md-6">

          <img src=<?php echo $main_image['url'] ?> alt="" class="img-responsive">

        </div>

        <div class="col-md-6">
          <h2>The Board Mission</h2>
          <p><?php echo $main_content ?></p>
        </div>

      </div> <!-- /.row -->

      <div class="section-home about-us">


                  <div class="row">

                      <div class="col-md-3 col-sm-6">
                
                
                  
                        
                      </div>
                      

                      
                  </div> <!-- /.row -->

            
          </div> 

    </div> <!-- /.about-us -->


      <div class="our-team animate-onscroll fadeIn">

          <div class="container">
            <h2 class="title-style-1">Our EXECUTIVE Team <span class="title-under"></span></h2>
            <div class="row">

            <?php $exec_array = new WP_Query( array('cat' => 11) ); ?>
            <?php while( $exec_array->have_posts() ) : $exec_array->the_post() ?>
              <div class="col-md-3 col-sm-6 exec-container">
                      <div class="team-member">

                          <div class="thumnail">

                              <img src=<?php the_field('image') ?> alt="" class="w-100">
                              
                          </div>



                          <h4 class="member-name" id="<?php the_field('class_id_name') ?>"> <?php the_field('name') ?></h4>

                          <div class="member-position">
                              <?php the_field('position') ?>
                          </div>
                          
                          <div class="bio-<?php the_field('class_id_name') ?> modal">
                            <div class="modal-content">
                              <div class="header">                               
                                <img src=<?php the_field('image') ?> alt="" class="w-60"/>
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
              


      <div class="our-team animate-onscroll fadeIn">

          <div class="container">
            <h2 class="title-style-1">OUR ADVISORY TEAM<span class="title-under"></span></h2>
            <div class="row">
              <?php $advisory_array = new WP_Query( array( 'cat' => 10) ); ?>
                      <?php while( $advisory_array->have_posts() ) : $advisory_array->the_post(); ?>
                      <div class="col-md-3 col-sm-6">
                      <div class="team-member">

                          <div class="thumnail">

                              <img src=<?php the_field('image') ?> alt="" class="w-100">
                              
                          </div>



                          <h4 class="member-name" id="<?php the_field('class_id_name') ?>"> <?php the_field('name') ?></h4>

                          <div class="member-position">
                              <?php the_field('position') ?>
                          </div>
                          
                          <div class="bio-<?php the_field('class_id_name') ?> modal">
                            <div class="modal-content">
                              <div class="header">                               
                                <img src=<?php the_field('image') ?> alt="" class="w-60"/>
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

                  



      </div> <!-- closes container -->

          </div> <!-- closes our team -->

      </div>
    


  </div><div class="section-home about-us">


                  <div class="row">

                      <div class="col-md-3 col-sm-6">
                
                
                  
                        
                      </div>
                      

                      
                  </div> <!-- /.row -->

            
      </div>
    </div>
 <?php get_footer(); ?>