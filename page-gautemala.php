<?php
/*
  Template Name: Guatemala
 */
//2015 
$armed_conflict = get_field('armed_conflict');
$child_labor = get_field('child_labor');
$contaminationc2 = get_field('contaminationc2');
$foundation_pantantic = get_field('foundation_pantantic');
$fruits = get_field('fruits');
$grinding_stone = get_field('grinding_stone');
$lake_of_life = get_field('lake_of_life');
$life_santiago = get_field('life_santiago');
$medicinal_plants = get_field('medicinal_plants');
$religion_of_sa = get_field('religion_of_sa');
$unprotected = get_field('unprotected');
$tocoyal = get_field('tocoyal');
$weaving = get_field('weaving');
//2014
$baskets = get_field('baskets');
$contamination = get_field('contamination');
$fisher = get_field('fisher');
$maize = get_field('maize');
$murals = get_field('murals');
$respect = get_field('respect');
$semana_santa = get_field('semana_santa');
$traditional_food = get_field('traditional_food');
$traje_santa_clara = get_field('traje_santa_clara');
//2013
$alcoholism = get_field('alcoholism');
$ceremonial_maya = get_field('ceremonial_maya');
$fighting_women = get_field('fighting_women');
$nature = get_field('nature');
$sheep_weaving = get_field('sheep_weaving');
$success = get_field('success');
$temaszcal = get_field('temaszcal');
$trajesanjuan = get_field('trajesanjuan');
$traditional_dance = get_field('traditional_dance');

get_header(); ?>

<div class="video-modal">
  <span class="video-close">&times;</span>
  <div class="video-content">
  </div>
</div>

  <div class="page-heading text-center">

    <div class="container zoomIn animated">
      
      <h1 class="page-title">GUATEMALA GALLERY <span class="title-under"></span></h1>
      <p class="page-description">
        Maya life through the eyes of Youth
      </p>
      
    </div>

  </div>

  <div class="main-container">

    <div class="container gallery fadeIn animated">
      
      <div class="container">
            <h2 class="title-style-1">2015 PRODUCTIONS<span class="title-under"></span></h2>


      <div class="row">
        <?php $video_2015_array = new WP_Query( array('cat' => 19) ); ?>
        <?php while( $video_2015_array -> have_posts() ) : $video_2015_array -> the_post() ?>
          <div class="col-md-3">
            <div class="img__wrap">
              <img src="<?php the_field('image') ?>" class="img-responsive video-btn"/>
              <p class="img__description" data-link="<?php the_field('video_url') ?>"> <?php the_field('description') ?></p>
            </div>
          </div>

        <?php endwhile; ?>

      </div>
        





        
        <div class="section-home about-us">


                  <div class="row">

                      <div class="col-md-3 col-sm-6">
                
                
                  
                        
                      </div>
                      

                      
                  </div> <!-- /.row -->

            
          </div> 

    </div> <!-- /.about-us -->
        <div class="container">
            <h2 class="title-style-1">2014 PRODUCTIONS<span class="title-under"></span></h2>
      <div class="row">
        <?php $video_2014_array = new WP_Query( array('cat' => 18) ); ?>
        <?php while( $video_2014_array -> have_posts() ) : $video_2014_array -> the_post() ?>
          <div class="col-md-3">
            <div class="img__wrap">
              <img src="<?php the_field('image') ?>" class="img-responsive video-btn"/>
              <p class="img__description" data-link="<?php the_field('video_url') ?>"> <?php the_field('description') ?></p>
            </div>
          </div>

        <?php endwhile; ?>
       



            

      </div> <!-- /.about-us -->
    </div>
        
        <div class="container">
          <h2 class="title-style-1">2013 PRODUCTIONS<span class="title-under"></span></h2>




      <div class="row">
        <?php $video_2013_array = new WP_Query( array('cat' => 17) ); ?>
        <?php while( $video_2013_array -> have_posts() ) : $video_2013_array -> the_post() ?>
          <div class="col-md-3">
            <div class="img__wrap">
              <img src="<?php the_field('image') ?>" class="img-responsive video-btn"/>
              <p class="img__description" data-link="<?php the_field('video_url') ?>"> <?php the_field('description') ?></p>
            </div>
          </div>

        <?php endwhile; ?>
        </div>

      </div>

        

          
        
      </div>
      
    </div>



  </div> <!-- /.main-container  -->
  <div class="section-home about-us">


                  <div class="row">

                      <div class="col-md-3 col-sm-6">
                
                
                  
                        
                      </div>
                      

                      
                  </div> <!-- /.row -->

            
          </div> 

    </div> <!-- /.about-us -->



<?php get_footer() ?>