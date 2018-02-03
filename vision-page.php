<?php
/*
  Template Name: Vision
 */

get_header(); ?>
<div class="page-heading text-center">

    <div class="container zoomIn animated">
      <h1 class="page-title">MISSION &amp; VISION<span class="title-under"></span></h1>
      <p class="page-description"> JOIN US: BE PART OF THE STORY! </p>
    </div>

</div>

<div class="container">  
<div class="row">
  </div></div>
    <div class="container">
          <h2 class="title-style-1">WHAT WE DO<span class="title-under"></span></h2>
    </div>
    
        <div class="section-home home-reasons">

        <div class="container">

            <div class="row">
                
                <div class="col-md-6">

                    <div class="reasons-col animate-onscroll fadeIn ">

                        <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2018/02/DSC09692.jpg" class="youth-img" alt="">

                        <div class="reasons-titles">

                            <h3 class="reasons-title">Indigenous Media Producers</h3>
                            <h5 class="reason-subtitle">Telling stories from Within</h5>
                            
                        </div>

                        <div class="on-hover hidden-xs">
                           
                           <p> Youth participating in USH are using media to discover their cultures, traditions, and knowledges first hand within their communities, a learning model aimed to overcome the indigenous vs non-indigenous education gap.</p>

                                <p></p><p><ul> <li>3.4 year gap in years of schooling</li><li>51.4 % drop out rate</li><li>
              14:8 Ratio working w/ no school</li><li>53.5%:32.2% ratio of young people aged 15-19 have not completing primary education</li></ul> 
                            
              </p>
                                
                        </div>
                    </div>
                    
                </div>


                <div class="col-md-6">

                    <div class="reasons-col animate-onscroll fadeIn">

                        <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2018/02/20150813_101948.jpg" alt="">

                        <div class="reasons-titles">

                            <h3 class="reasons-title">Indigenous Leadership Development</h3>
                            <h5 class="reason-subtitle">One Country at a Time</h5>
                        </div>

                        <div class="on-hover hidden-xs">
                            
                                 <p> At USH we cultivate communities of Indigenous youth leaders who harness the power of media to bring awareness to important cultural traditions and social issues in order to address the following statistics: </p>


              <p></p><p><ul> <li>24:14 Ratio work and school</li><li>2:1 wage disparit</li>y<li>
              25-50 per cent of this income gap is “due to discrimination and non-observable characteristics, such as quality of schooling”.</li><li>5 per cent of the world’s population; 15 per cent of the world’s poor</li></ul> 
</p>
                                 

                        </div>


                    </div>
                    
                </div>


            </div>
          
  

        </div>



<div>
  <div class="container">
    <h2 class="title-style-1">OUR VISION<span class="title-under"></span></h2>
    <div class="row">
      <div class="col-md-6">
        <p style="text-align: left;&nbsp;italics">We envision a future where Indigenous youth leaders around the world inspire teams of young people to capture, revive, and reinvigorate their cultures, traditions, and languages through creating and discussing documentary films. </p>
        <p style="text-align: left; italics"> We imagine these Indigenous youth leaders making social impacts, locally and globally by sharing their films across generational and geographical boundaries.</p> <p style="text-align: left; italics"> Listen to their visions!</p>
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