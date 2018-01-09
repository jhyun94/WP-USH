<?php
/*
  Template Name: Mission
 */
$title = get_field('title');
$description = get_field('description');
$section_1_image = get_field('section_1_image');
$section_1_title = get_field('section_1_title');
$section_1_content = get_field('section_1_content');
$section_2_image = get_field('section_2_image');
$section_2_title = get_field('section_2_title');
$section_2_content = get_field('section_2_content');
$section_3_image = get_field('section_3_image');
$section_3_title = get_field('section_3_title');
$section_3_content = get_field('section_3_content');
$vision_content = get_field('vision_content');
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
          <h2 class="title-style-1">our mission<span class="title-under"></span></h2>
    </div>


      <div class="main-container">
    

<div class="container"> 
    

      <div class="row">

      <div class="col-md-6">
        
        <h2 class="title-style-2"><?php echo $title ?><span class="title-under"></span></h2>
        <p> <?php echo $description ?></p>
      </div>

        

        <div class="col-md-6">
          
          <p style="text-align: center;"><iframe width="500" height="280" frameborder="0" src="https://player.vimeo.com/video/147147615?title=0&amp;byline=0&amp;portrait=0"><br />
</iframe></p>
          
        </div>

      </div><!-- /.row -->
  </div>
      
                   
                      

                      
                   <!-- /.row -->

            
       

     <!-- /.about-us -->
     
       <div class="container">  
<div class="row">
  </div></div>
    <div class="container">
          <h2 class="title-style-1"><span class="title-under"></span></h2>
    </div>
                 
                 <div class="row">
  </div>   
                   



    <div class="section-home our-causes animate-onscroll fadeIn">
  <div class="container">  
<div class="row">
  </div></div>
      <div class="row">
  </div>
                     
  


        <div class="col-md-6">
          <h2 class="title-style-2"></h2>
          <p style="text-align: left;">  </p>
        </div>

    </div>  

        <div class="row about-us-new">
          <div class="col-md-6">
            <div class="mission-image-container">
              <img src=<?php echo $section_1_image['url'] ?> alt=<?php echo $section_1_image['alt'] ?> class="img-responsive">
            </div>
          </div>  

          <div class="col-md-6 about-us-content">
            <div class="about-us-content">
              <h2 class="title-style-2"> <?php echo $section_1_title ?> <span class="title-under"></span></h2>
              <p style="text-align: left;"> <?php echo $section_1_content ?> </p>   
            </div>
          </div>
        </div> <!-- /.row -->
   
                      
 <div class="section-home our-causes animate-onscroll fadeIn">
  <div class="container">  
<div class="row">
  </div></div>
      <div class="row">
  </div>
                     
  

      

        <div class="col-md-6">
          <h2 class="title-style-2"></h2>
          <p style="text-align: left;">  </p>
        </div>

    </div> 
                 
  <div class="about-us-new row">
    <div class="col-md-6">
      <div class="mission-image-container">
        <img src=<?php echo $section_2_image['url'] ?> alt=<?php echo $section_2_image['alt'] ?> class="img-responsive mission-image">
      </div>
    </div>

    <div class="col-md-6">
      <div class="about-us-content">
        <h2 class="title-style-2"> <?php echo $section_2_title ?> <span class="title-under"></span></h2>
        <p style="text-align: left;"> <?php echo $section_2_content ?> </p>
      </div>
    </div>
  </div> <!-- /.row -->
                  
  
 <div class="section-home our-causes animate-onscroll fadeIn">
  <div class="container">  
<div class="row">
  </div></div>
      <div class="row">
  </div>
                     
  

      
        <div class="col-md-6">
          <h2 class="title-style-2"></h2>
          <p style="text-align: left;">  </p>
        </div>

    </div> 
                 
  <div class="about-us-new row">
    <div class="col-md-6">
      <div class="mission-image-container">
        <img src=<?php echo $section_3_image['url'] ?> alt=<?php echo $section_3_image['alt'] ?> class="img-responsive mission-image">
      </div>    
    </div>

    <div class="col-md-6">
      <div class="about-us-content">
        <h2 class="title-style-2"><?php echo $section_3_title ?> <span class="title-under"></span></h2>
        <p style="text-align: left;"> <?php echo $section_3_content ?> </p>
      </div>
    </div>
  </div> <!-- /.row -->   
  <div class="section-home our-causes animate-onscroll fadeIn animated">
  <div class="container">  
<div class="row">
  </div></div>
      <div class="row">
  </div>
                     
  

      
        <div class="col-md-6">
          <h2 class="title-style-2"></h2>
          <p style="text-align: left;">  </p>
        </div>

    </div>        
       
     <!-- /.about-us -->





<?php get_footer(); ?>