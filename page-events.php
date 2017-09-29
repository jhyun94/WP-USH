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

                      <div class="col-md-3 col-sm-6">
                
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/show.png" alt="">
                        </div>
                        <h3 class="col-title">Past Shows</h3>
                        <div class="col-details">
                          <p><center>Where We've Been</center></p>
                        </div>
                        <div class="btn btn-primary event-btn" id="past"> Read more </div>
                        <div class="event-past modal">
                          <div class="modal-content">
                            <span class="close">&times;</span>
                            <h2>Default text</h2>
                            <p>default text</p>
                          </div>
                        </div>
                    
                  </div>
                  
                </div>


                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/past.png" alt="">
                        </div>
                        <h3 class="col-title">New premieres</h3>
                        <div class="col-details">
                          <p><center>Come See Us</center></p>
                        </div>
                        <div class="btn btn-primary event-btn" id="premieres"> Read more </div>
                        <div class="event-premieres modal">
                          <div class="modal-content">
                            <span class="close">&times;</span>
                            <h2>Default text</h2>
                            <p>default text</p>
                          </div>
                        </div>
                    
                  </div>
                  
                </div>


                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/talks.png" alt="">
                        </div>
                        <h3 class="col-title">Interactives</h3>
                        <div class="col-details">
                          <p><center>Meet and Greet</center></p>
                        </div>
                        <div class="btn btn-primary event-btn" id="interactive"> Read more </div>
                        <div class="event-interactive modal">
                          <div class="modal-content">
                            <span class="close">&times;</span>
                            <h2>Default text</h2>
                            <p>default text</p>
                          </div>
                        </div>
                    
                  </div>
                  
                </div>


                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/organize.png" alt="">
                        </div>
                        <h3 class="col-title">Organize</h3>
                        <div class="col-details">
                          <p><center>Bring Us to You</center></p>
                        </div>
                        <a href="#" class="btn btn-primary event-btn" id="organize"> Read more </a>
                        <div class="event-organize modal">
                          <div class="modal-content">
                            <h2>Default text</h2>
                            <p>default text</p>
                          </div>
                        </div>
                          
                        </div>
                        
                      </div>
                      

                      
                  </div> <!-- /.row -->

            
          </div> 

    </div> <!-- /.about-us -->


      

                          

                      </div> <!-- /.team-member -->
                      
                  </div>

              </div> <!-- /.row -->

          </div>

      </div>
    


  </div>

<?php get_footer(); ?>
<script><?php echo $event_popup ?></script>