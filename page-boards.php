<?php 
/*
  Template Name: Boards
*/
$donna_degennaro = get_field('donna_degennaro');
$ingrid_sub_cuc = get_field('ingrid_sub_cuc');
$jennifer_baker = get_field('jennifer_baker');
$mark_mcmullen = get_field('mark_mcmullen');
$temis_quiroga = get_field('temis_quiroga');
$nikki_young = get_field('nikki_young');
$heather_lascano = get_field('heather_lascano');
$janelle_babington = get_field('janelle_babington');
$chico_colvard = get_field('chico_colvard');
$rachel_fox = get_field('rachel_fox');
$ricardo_duque = get_field('ricardo_duque');
$jk_presnal = get_field('jk_presnal');

get_header(); ?>

  <div class="page-heading text-center">

    <div class="container zoomIn animated">
      <h1 class="page-title">LEADERSHIP<span class="title-under"></span></h1>
      <p class="page-description">OUR START: OUR TEAMS</p>
    </div>

  </div>

  <div class="main-container">
    
    <div class="container">
            <h2 class="title-style-1">FILMMAKING AND LEADERSHIP SUPPORT<span class="title-under"></span></h2>
            <div class="row">

    <div class="container">

      <div class="row fadeIn animated">

        <div class="col-md-6">

          <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/about-us.png" alt="" class="img-responsive">

        </div>

        <div class="col-md-6">
          <h2>The Board Mission</h2>
          <p>Our board consists of members dedicatd to amplifying the voices and identities of Indigenous youth and their communities through film. &nbsp;We have two functioning boards, an Executive Team and a Consulting Team. &nbsp;Our Executive team is responsible for ensuring that we stay true to our Mission and Vision. </p>
          <p>Our role as board members is to work within the vision of USH. &nbsp;Specifically, we agree on two things that can not try to change: </p>
          <p><li>Youth, and local Program directors are actually the leaders of USH. For example these are the owners of the project, way of
learning and research, and performed as follow; and</li></p>
          <p><li>Young people have rights to select their subjects, and make their own stories. We favor the ideas and voices of young and older
          participants of our own indigenous.</li></p>
            <p> We listen first and ask questions that evoke the inner thought and not impose ideas. </p>
             <p>Our consulting board advises our Executive Team on varioius aspects of the organization.  These include organizational structure, research, fundraising, finances, and film development.</p>
             <p>Please scroll down to meet our teams.</p>
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
              <div class="col-md-3 col-sm-6">
                      <div class="team-member">

                          <div class="thumnail">

                              <img src=<?php the_field('image') ?> alt="" class="cause-img">
                              
                          </div>



                          <h4 class="member-name" id="<?php the_field('class_id_name') ?>"> <?php the_field('name') ?></h4>

                          <div class="member-position">
                              <?php the_field('position') ?>
                          </div>

                          <div class="btn-holder">

                            <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
                            
                          </div>
                          
                          <div class="bio-<?php the_field('class_id_name') ?> modal">
                            <div class="modal-content">
                              <div class="header">                               
                                <img src=<?php the_field('image') ?> alt="" class="cause-img"/>
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

                              <img src=<?php the_field('image') ?> alt="" class="cause-img">
                              
                          </div>



                          <h4 class="member-name" id="<?php the_field('class_id_name') ?>"> <?php the_field('name') ?></h4>

                          <div class="member-position">
                              <?php the_field('position') ?>
                          </div>

                          <div class="btn-holder">

                            <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
                            
                          </div>
                          
                          <div class="bio-<?php the_field('class_id_name') ?> modal">
                            <div class="modal-content">
                              <div class="header">                               
                                <img src=<?php the_field('image') ?> alt="" class="cause-img"/>
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