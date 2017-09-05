<?php
/*
  Template Name: Collaborate
 */

get_header(); ?>

  <div class="page-heading text-center">

    <div class="container zoomIn animated">
      <h1 class="page-title">TAKE ACTION<span class="title-under"></span></h1>
      <p class="page-description">
        VOLUNTEER, PARTNER, DONATE!
      </p>
      
    </div>

  </div>

  <div class="main-container">

    <div class="container">

      <div class="row fadeIn animated">

        <div class="col-md-6">

          <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/collaborate2.png" alt="" class="img-responsive">

        </div>

        <div class="col-md-6">
          <h2 class="title-style-2">Collaborate! <span class="title-under"></span></h2>
          <p> We welcome hosts, voulunteers, fundrasiers, and partners to join our passionate and visionary team. </p>
          <p>As a <strong>Host,</strong> you can organize your own signature event or become a USH film distributor. &nbsp;You will spread the word about USH films and our innovative ways that we work with youth and their communities! </p>
          <p> As a <strong>Volunteer</strong>, you join our creative process in person or remotely. Visit sites, where you apply film<strong>, </strong>storytelling, editing, entrepreneur, or language skills. Participate from home, helping us reach our ambitious aim of amplifying youth voice and leadership worldwide! </p>
          <p><strong>Fundraise</strong> by organizing a small house party or initiating a larger crowd funding campaign and gain valuable strategy, business, and fundraising skills. We have starter booklets to help you plan. &nbsp;We also look forward to your imaginative ideas! </p>
          <p>As a fervent <strong>Partners</strong> you can start your own chapter or connect us to new organization. &nbsp;Help expand our global reach. Work closely with local, Indigenous-run organization to expand the program in and beyond Guatemala. </p>
          </p>
          </p>
        </div>

      </div> <!-- /.row -->

      <div class="section-home about-us">


                  <div class="row">

                      <div class="col-md-3 col-sm-6">
                
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/host_final.png" alt="">
                        </div>
                        <h3 class="col-title">Host</h3>
                        <div class="col-details">
                          <p><center>Screening or Signature Event</center></p>
                        </div>
<button class="collab-btn form-btn host">Host</button>
                        <div class="modal" id="host">
                          <div class="form-content">
                            <span class="close">&times;</span>
                            <form class="ajax-form" action="<?php bloginfo('template_directory'); ?>/php/host-mail.php" method="post"> 
                              <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                              </div>

                              <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="email" required>
                              </div>

                              <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="phone" required>
                              </div>
                              <div class="form-group">
                                <input type="text" name="eventType" class="form-control" placeholder="Type of Event" required>
                              </div>

                              <div class="form-group">
                                <input type="text" name="location" class="form-control" placeholder="Location"required>
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
                                <textarea name="idea" class="form-control" placeholder="Tell us about your idea and what help you need" required></textarea>
                              </div>

                              <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                              </div>
                              <button type="submit" class="submit-btn">Submit</button> 
                              </form>
                          </div>
                        </div>

                    
                  </div>
                  
                </div>


                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/volunteer.png" alt="">
                        </div>
                        <h3 class="col-title">Volunteer</h3>
                        <div class="col-details">
                          <p><center>Join us Onsite or Remotely</center></p>
                        </div>
<button class="collab-btn form-btn volunteer"> Volunteer</button>
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
                  
                </div>


                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/fundraise.png" alt="">
                        </div>
                        <h3 class="col-title">Fundraise</h3>
                        <div class="col-details">
                          <p><center>Create a Buzz or Raise Funds</center></p>
                        </div>
<button class="collab-btn form-btn fundraise"> Fundraise</button>
                        <div class="modal" id="fundraise">
                          <div class="form-content">
                            <span class="close">&times;</span>
                            <form class="ajax-form" action="<?php bloginfo('template_directory'); ?>/php/fundraise-mail.php" method="post">
                              <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                              </div>

                              <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email" required>
                              </div>

                              <div class="form-group">
                                <select name="type" class="form-control" required>
                                  <option value="type">Type</option>
                                  <option value="party">Party</option>
                                  <option value="event">Event</option>
                                  <option value="crowdsource">Crowdsourcing</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <input type="text" name="location" class="form-control" placeholder="Location" required>
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
                  
                </div>


                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/partner.png" alt="">
                        </div>
                        <h3 class="col-title">Partner</h3>
                        <div class="col-details">
                          <p><center>Start a Local Chapter</center></p>
                        </div>
<button class="collab-btn form-btn partner"> Partner</button>
                        <div class="modal" id="partner">
                          <div class="form-content">
                            <span class="close">&times;</span>
                            <form class="ajax-form" action="<?php bloginfo('template_directory'); ?>/php/partner-mail.php">
                              <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                              </div>

                              <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email" required>
                              </div>

                              <div class="form-group">
                                <label class="form-control">Organizational Partner</label>
                                <select name="partner" class="form-control" required>
                                  <option value="Nonprofit/organization">NonProfit/Organization</option>
                                  <option value="Financial/Individual">Financial/Individual</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                              </div>
                              <button type="submit" class="submit-btn">Submit</button>
                            </form>
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