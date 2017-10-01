<?php
/*
  Template Name: Reports
*/
$main_image = get_field('main_image');
$main_content = get_field('main_content');
get_header(); ?>


<div class="page-heading text-center">

    <div class="container zoomIn animated">
      
      <h1 class="page-title">ABOUT US <span class="title-under"></span></h1>
      <p class="page-description" data_temp_dwid="1">WHAT WE ARE DOING</p>
    </div>

  </div>

  <div class="main-container">
    
    <div class="container">
            <h2 class="title-style-1">Annual Reports &amp; Newsletters<span class="title-under"></span></h2>
            <div class="row">

    <div class="container">

      <div class="row fadeIn animated">

        <div class="col-md-6">

          <img src= <?php echo $main_image['url'] ?> alt="" class="img-responsive">

        </div>

        <div class="col-md-6">
          <h2>Reporting our Progress</h2>
          <p> <?php echo $main_content ?> </p>
          
        </div>

      </div> <!-- /.row -->

      <div class="section-home about-us">


                  <div class="row">

                      <div class="col-md-3 col-sm-6">
                
                
                  
                        
                      </div>
                      

                      
                  </div> <!-- /.row -->

            
          </div> 

    </div> <!-- /.about-us -->


  
<div class="section-home our-causes animate-onscroll fadeIn">

        <div class="container">
          <h2>Annual Reports:</h2>
          
          <?php $annual_array = new WP_Query( array( 'post_type' => 'annual_reports') ); ?>
          <?php while( $annual_array->have_posts() ) : $annual_array->the_post(); ?>
            <p><span> <a href="<?php the_field('link') ?>" target="_blank"> <?php the_title() ?></a></span></p>
          <?php endwhile; ?>


          <h2>Newsletters:</h2>
          <?php $newsletter_array = new WP_Query( array( 'post_type' => 'newsletter') ); ?>
          <?php while( $newsletter_array->have_posts() ) : $newsletter_array->the_post(); ?>
            <p><span> <a href="<?php the_field('link') ?>" target="_blank"> <?php the_title() ?></a></span></p>
          <?php endwhile; ?>



          </div>

      </div>
    


      </div></div>

<?php get_footer(); ?>