<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UnlockingSilentHistories
 */

?>


<?php wp_footer(); ?>

    <footer class="main-footer">

        <div class="footer-top">
            
        </div>


 <div class="footer-main">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-4">

                        <div class="footer-col">
                            
							<p></p>
							<img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/USHLogo.png" width="300" height="195" alt=""/>


                            <div class="footer-content">
                              
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">LAST TWEETS <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <ul class="tweets list-unstyled">
                                    <li class="tweet"> 

                                        20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://t.co/fTSazikPd4 

                                    </li>

                                    <li class="tweet"> 

                                        20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://t.co/fTSazikPd4 

                                    </li>

                                    <li class="tweet"> 

                                        20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://t.co/fTSazikPd4 

                                    </li>

                                </ul>
                            </div>
                            
                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <div class="footer-form">
                                    
                                    <div class="footer-form" >
                                    
                                    <div class="form-messages">
                                      </div>
                                      <form action="<?php bloginfo('template_directory'); ?>/php/mail.php" class="ajax-form" method="post">
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="name" placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                          <textarea class="form-control" name="message" placeholder="message" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-submit">Submit</button>
                                      </form>

                                </div>

                                </div>
                            </div>
                            
                        </div>

                    </div>
                    <div class="clearfix"></div>



                </div>
                
                
            </div>

            
        </div>

        <div class="footer-bottom">

            <div class="container text-right"> UnlockingSilentHistories @ copyrights 2017 </div>
        </div>
        
    </footer> <!-- main-footer -->




       
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

        <script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.js"></script>

        <!-- Template main javascript -->
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
</body>
</html>
