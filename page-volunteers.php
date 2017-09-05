<?php 
/*
  Template Name: Volunteer

*/ 

$jerome_atger = get_field('jerome_atger');
$lacey_schauwecker = get_field('lacey_schauwecker');
$shani_leigh_searcy = get_field('shani_leigh_searcy');
$jonathan_hyun = get_field('jonathan_hyun');
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

          <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/boards.png" alt="" class="img-responsive">

        </div>

        <div class="col-md-6">
          <h2>LIKE EXTRAS IN A FILM!</h2>
          <p>Our volunteers have a passion for working with youth and film.  Like extras on a set, these people play key roles to ensure that the productions come to fruition. &nbsp;They selflessly dedicate their time to various aspects of our organization's development.&nbsp;</p>
          <p> As a Volunteer, you join our creative process in person or remotely. Visit sites, where you apply film, storytelling, editing, entrepreneur, or language skills. Participate from home, helping us reach our ambitious aim of amplifying youth voice and leadership worldwide! </p>
          <p>Scroll down to meet our current volunteers.</p>
          <p>Feel free to reach out to them, ask them what they are doing, and how their experiences have helped us reach our goals. </p>
          <p>To send a request or inquiry, please click the button below and fill out our form: </p>
          <button class="collab-btn  form-btn volunteer">Volunteer</button> 
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

         

                  <div class="col-md-3 col-sm-6">

                      <div class="team-member">

                          <div class="thumnail">

                              <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/jerome.png" alt="" class="cause-img">
                              
                          </div>



                          <h4 class="member-name" id=jerome>Jerome Atger</h4>

                          <div class="member-position">
                              Leadership Development
                          </div>

                          <div class="btn-holder">

                            <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
                            
                          </div>
                          
                          <div class="bio-jerome modal">
                            <div class="modal-content">
                              <div class="header">                               
                                <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/jerome.png" alt="" class="cause-img"/>
                                <span class="close">&times;</span>
                              </div>
                              <div class="description">
                                <p><?php echo $jerome_atger ?></p>
                              </div>
                            </div>
                          </div>

                          

                      </div> <!-- /.team-member -->
                      
                </div>

                  <div class="col-md-3 col-sm-6">

                      <div class="team-member">

                          <div class="thumnail">

                              <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/Lacey.png" alt="" class="cause-img">
                              
                          </div>



                          <h4 class="member-name" id=lacey>Lacey Schauwecker</h4>

                          <div class="member-position"> Leadership Development</div>

                          <div class="btn-holder">

                            <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
                            
                          </div>
                          
                          <div class="bio-lacey modal">
                            <div class="modal-content">
                              <div class="header">                               
                                <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/Lacey.png" alt="" class="cause-img"/>
                                <span class="close">&times;</span>
                              </div>
                              <div class="description">
                                <p><?php echo $lacey_schauwecker ?></p>
                              </div>
                            </div>
                          </div>

                          

                      </div> <!-- /.team-member -->
                      
                  </div>


                  <div class="col-md-3 col-sm-6">

                      <div class="team-member">

                          <div class="thumnail">

                              <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/shani.png" alt="" class="cause-img">
                              
                          </div>



                          <h4 class="member-name" id=shani>Shani-Leigh Searcy</h4>

                          <div class="member-position">Fundraising</div>

                          <div class="btn-holder">

                            <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
                            
                          </div>
                          
                          <div class="bio-shani modal">
                            <div class="modal-content">
                              <div class="header">                               
                                <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/shani.png" alt="" class="cause-img"/>
                                <span class="close">&times;</span>
                              </div>
                              <div class="description">
                                <p><?php echo $shani_leigh_searcy ?></p>
                              </div>
                            </div>
                          </div>

                          

                      </div> <!-- /.team-member -->
                      
                  </div>


                  <div class="col-md-3 col-sm-6">

                      <div class="team-member">

                          <div class="thumnail">

                              <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/jonathan.png" alt="" class="cause-img">
                              
                          </div>



                          <h4 class="member-name" id='jonathan'>Jonathan Hyun</h4>

                          <div class="member-position">Web Design</div>

                          <div class="btn-holder">

                            <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
                            <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
                            
                          </div>
                          
                          <div class="bio-jonathan modal">
                            <div class="modal-content">
                              <div class="header">                               
                                <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/jonathan.png" alt="" class="cause-img"/>
                                <span class="close">&times;</span>
                              </div>
                              <div class="description">
                                <p><?php echo $jonathan_hyun ?></p>
                              </div>
                            </div>
                          </div>

                          

                      </div> <!-- /.team-member -->
                      
                  </div>

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