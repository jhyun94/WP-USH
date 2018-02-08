<?php 
/*
  Template Name: Volunteer

*/ 

$main_image = get_field('main_image');
$main_content = get_field('main_content');
get_header(); ?>

<div class="page-heading text-center">

    <div class="container zoomIn animated">
      <h1 class="page-title">LEADERSHIP<span class="title-under"></span></h1>
      <p class="page-description">OUR START: OUR TEAMS</p>
    </div>

  </div>

  <div class="main-container">
    
    <div class="container">
            <h2 class="title-style-1">OUR VALUABLE VOLUNTEERS<span class="title-under"></span></h2>
            <div class="row">

    <div class="container">

      <div class="row fadeIn animated">

        <div class="col-md-6">

          <img src=<?php echo $main_image['url'] ?> alt="" class="img-responsive">

        </div>

        <div class="col-md-6">
          <h2>LIKE EXTRAS IN A FILM!</h2>
            <p><?php echo $main_content ?></p>
          <button class="volunteer-btn  form-btn volunteer">Volunteer</button> 
                        <div class="modal" id="volunteer">
                          <div class="form-content">
                            <span class="close">&times;</span>
                            <form class="ajax-form" method="post" action="<?php bloginfo('template_directory'); ?>/php/volunteer-mail.php">
                              <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                              </div>

                              <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="email" required>
                              </div>

                              <div class="form-group">
                                <select name="opportunity" class="form-control" required>
                                  <option value="opportunity">Type of Opportunity</option>
                                  <option value="country">Country</option>
                                  <option value="internship">Internship</option>
                                  <option value="course-credit">Course Credit</option>
                                  <option value="virtual">Virtual</option>
                                  <option value="research">Research</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label class="form-control">Do you speak Spanish?</label>
                                <select name="spanish" class="form-control" required>
                                  <option value=""></option>
                                  <option value="yes">Yes</option>
                                  <option value="no">No</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label class="form-control">If yes, what is your level?</label>
                                <select name="level" class="form-control" required>
                                  <option value="none">I do not speak Spanish</option>
                                  <option value="beginner">Beginner</option>
                                  <option value="intermediate">Intermediate</option>
                                  <option value="fluent">Fluent</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Start Date</label>
                                <input type="date" name="start" class="form-control" required>
                              </div>

                              <div class="form-group">
                                <label>End Date</label>
                                <input type="date" name="end" class="form-control" required>
                              </div>


                             <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                              </div>
                              <button type="submit" class="submit-btn">Submit</button> 
                            </form>
                          </div>
                        </div>
              </div>
          <p>&nbsp;</p>
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

         

                  

                    <?php $volunteer_array = new WP_Query( array( 'cat' => 9) ); ?>
                      <?php while( $volunteer_array->have_posts() ) : $volunteer_array->the_post(); ?>
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
                                <img src=<?php the_field('image') ?> alt="" class="w-100"/>
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
    


      </div><div class="row">

                      <div class="col-md-3 col-sm-6">
                
                
                  
                        
                      </div>
                      

                      
                  </div> <!-- /.row -->
      
      
      
      </div>

<?php get_footer(); ?>      