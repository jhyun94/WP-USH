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
            <p> <a href="<?php the_field('link') ?>" target="_blank"> <?php the_title() ?></a> </p>
          <?php endwhile; ?>


          <h2>Newsletters:</h2>
          <p><span><a href="http://mailchi.mp/12b5af2c975e/2016-annual-report-2756018" style="color: #328d88;" target="_blank">May 2017</a></span></p>
          <p><span><a href="http://us3.campaign-archive2.com/?u=73e8b8cb16ba80affc09c7cb6&id=7948eb6249" style="color: #328d88;" target="_blank">October 2016</a></span></p>
          <p><span><a href="http://us3.campaign-archive2.com/?u=73e8b8cb16ba80affc09c7cb6&id=7a30c93771" style="color: #328d88;" target="_blank">August 2016</a></span></p>
          <p><span><a href="http://us3.campaign-archive1.com/?u=73e8b8cb16ba80affc09c7cb6&id=8bf6c32647" style="color: #328d88;" target="_blank">May 2016</a></span></p>
          <p><span><a href="http://us3.campaign-archive2.com/?u=73e8b8cb16ba80affc09c7cb6&id=a0e39813f5" style="color: #328d88;" target="_blank">March 2016</a></span></p>
          <p><span><a href="http://us3.campaign-archive2.com/?u=73e8b8cb16ba80affc09c7cb6&id=248aaa56e1" style="color: #328d88;" target="_blank">December 2015</a></span></p>
          <p><span><a href="http://us3.campaign-archive1.com/?u=73e8b8cb16ba80affc09c7cb6&id=6f5803245f" style="color: #328d88;" target="_blank">November 2015</a></span></p>
          <p><span><a href="http://us3.campaign-archive1.com/?u=73e8b8cb16ba80affc09c7cb6&id=ab10ee01ce" style="color: #328d88;" target="_blank">October 2015</a></span></p>
          <p><span><a href="http://us3.campaign-archive2.com/?u=73e8b8cb16ba80affc09c7cb6&id=7c6d7fda4e" style="color: #328d88;" target="_blank">September 2015</a></span></p>
          <p><span><a href="http://us3.campaign-archive2.com/?u=73e8b8cb16ba80affc09c7cb6&id=e52e8df199" style="color: #328d88;" target="_blank">August 2015</a></span></p>
          <p><span><a href="http://us3.campaign-archive2.com/?u=73e8b8cb16ba80affc09c7cb6&id=d3883cf186" style="color: #328d88;" target="_blank">July 2015</a></span></p>
          <p><span><a href="http://us3.campaign-archive1.com/?u=73e8b8cb16ba80affc09c7cb6&id=130e03905a" style="color: #328d88;" target="_blank">June 2015</a></span></p>
          <p><span><a href="http://us3.campaign-archive1.com/?u=73e8b8cb16ba80affc09c7cb6&id=99a690b37a" style="color: #328d88;" target="_blank">May 2015</a></span></p>


          </div>

      </div>
    


      </div></div>

<?php get_footer(); ?>