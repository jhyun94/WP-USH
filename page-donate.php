<?php 

/* 
  Template Name: Donate

*/  
$main_image = get_field('main_image');
$main_content = get_field('main_content');
$donate_read_more_popup = get_field('donate_read_more_popup');
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
          <h2 class="title-style-1">HOW YOUR FUNDS UNLOCK INDIGENOUS YOUTH VOICE AND LEADERSHIP<span class="title-under"></span></h2>
          <div class="row">

    <div class="container">

      <div class="row fadeIn animated">

        <div class="col-md-6">

          <img src=<?php echo $main_image['url'] ?> alt="" class="img-responsive">

        </div>

        <div class="col-md-6">
          <p> <?php echo $main_content ?> </p>
        </div>

      </div> <!-- /.row -->

    
                
     
                       
    
    <div class="section-home our-causes animate-onscroll fadeIn">

        <div class="container">
          <h2 class="title-style-1">Funding levels<span class="title-under"></span></h2>
          <div class="row">
            <?php $donate_array = new WP_Query( array( 'cat' => 14) ); ?>
            <?php while ($donate_array->have_posts() ) : $donate_array->the_post() ?>
              <div class="col-md-3 col-sm-6">

                    <div class="cause">

                        <img src="<?php the_field('image') ?>" alt="" class="cause-img">

                        <h4 class="cause-title"><?php the_field('title') ?></h4>
                        <div class="cause-details"> <?php the_field('content') ?></div>

                        <div class="btn-holder text-center">

                         <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                          <input type="hidden" name="cmd" value="_donations">
                          <input type="hidden" name="business" value="info@unlockingsilenthistories.org">
                          <input type="hidden" name="lc" value="US">
                          <input type="hidden" name="item_name" value="Unlocking Silent Histories">
                          <input type="hidden" name="no_note" value="0">
                          <input type="hidden" name="currency_code" value="USD">
                          <input type="hidden" name="bn" value="PP-DonationsBF:donate.png:NonHostedGuest">
                          <button name="submit" class="btn btn-primary">INVEST</button>
                        </form>
                          
                        </div>

                        

                    </div> <!-- /.cause -->
                    
                </div>

            <?php endwhile; ?>

            </div>

        </div>
        
    </div> <!-- /.our-causes -->
    
    <div class="section-home our-causes animate-onscroll fadeIn">

        <div class="container">
          <h2 class="title-style-1">HOW YOUR FUNDS UNLOCK INDIGENOUS YOUTH VOICE AND LEADERSHIP<span class="title-under"></span></h2>
          <div class="row">

            <?php $donate_array = new WP_Query( array( 'cat' => 14) ); ?>
            <?php while ($donate_array->have_posts() ) : $donate_array->the_post() ?>
              <div class="col-md-3 col-sm-6">

                    <div class="cause">

                        <img src="<?php the_field('image') ?>" alt="" class="cause-img">

                        <h4 class="cause-title"><?php the_field('title') ?></h4>
                        <div class="cause-details"> <?php the_field('content') ?></div>

                        <div class="btn-holder text-center">

                          <div class="btn btn-primary donate-read-btn" id="<?php the_field('class_id_name') ?>"> Read more </div>
                          <div class="donate-<?php the_field('class_id_name') ?> modal">
                            <div class="modal-content">
                              <span class="close">&times;</span>
                              <p> <?php the_field('description') ?></p>
                            </div>
                          </div>
                          
                        </div>

                        

                    </div> <!-- /.cause -->
                    
                </div>

            <?php endwhile; ?>
          </div>
        </div>
      </div>

                

    </div>
    </div>
  </div>
<?php get_footer(); ?>
<script><?php echo $donate_read_more_popup ?></script>