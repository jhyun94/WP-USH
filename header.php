<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UnlockingSilentHistories
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>USH | Non-profit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.carousel.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'unlockingsilenthistories' ); ?></a>

<header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        
                        <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="https://www.facebook.com/UnlockingSilentHistories/"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="https://twitter.com/UnSilentHistory"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="https://www.linkedin.com/company/unlocking-silent-histories"> <i class="fa fa-linkedin"></i>  </a> </li>
                            <li> <a href="https://vimeo.com/channels/733452"> <i class="fa fa-vimeo-square"></i>  </a> </li>
                            <li> <a href="https://www.instagram.com/unlockingsilenthistories/"> <i class="fa fa fa-instagram"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->
                      
                    </div>



                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a href="http://50.87.248.187/~twooneu9/USHWP/"><img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/USHbriefLogo.png" alt="logo" width="98" height="68"></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a class="is-active has-child" href="http://50.87.248.187/~twooneu9/USHWP/vision/">OUR WORK</a>
                    <ul class="submenu">
                      <li class="submenu-item"><a href="http://50.87.248.187/~twooneu9/USHWP/missions">Mission</a></li>
                    </ul>
                    </li>
                    <li class="has-child"><a href="#">PRODUCTIONS</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="http://50.87.248.187/~twooneu9/USHWP/guatemala">Guatemala </a></li>
                         <li class="submenu-item"><a href="http://50.87.248.187/~twooneu9/USHWP/lumbee">Lumbee Tribe</a></li>
                      </ul>

                    </li>
                    
            <li class="has-child"><a href="#">TAKE ACTION</a>
                    <ul class="submenu">
                         <li class="submenu-item"><a href="http://50.87.248.187/~twooneu9/USHWP/collaborate/">Collaborate</a></li>
                         <li class="submenu-item"><a href="http://50.87.248.187/~twooneu9/USHWP/events">Events </a></li>
                         <li class="submenu-item"><a href="http://50.87.248.187/~twooneu9/USHWP/donate">Invest </a></li>
                      </ul>
            </li>
                   <li class="has-child"><a href="#">LEADERSHIP</a>
                   <ul class="submenu">
                         <li class="submenu-item"><a href="http://50.87.248.187/~twooneu9/USHWP/teams">Teams</a></li>
                         <li class="submenu-item"><a href="http://50.87.248.187/~twooneu9/USHWP/boards">Board </a></li>
                         <li class="submenu-item"><a href="http://50.87.248.187/~twooneu9/USHWP/volunteers">Volunteers </a></li>
                      </ul>
            </li>
                 <li class="has-child"><a href="#">CONNECT</a>
                    <ul class="submenu">
                         <li class="submenu-item"><a href="http://50.87.248.187/~twooneu9/USHWP/news">In The Media</a></li>
                         <li class="submenu-item"><a href="http://50.87.248.187/~twooneu9/USHWP/reports">Reports</a></li>
                      </ul>
                      <li>
                        <div class="header_donate">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                          <input type="hidden" name="cmd" value="_donations">
                          <input type="hidden" name="business" value="info@unlockingsilenthistories.org">
                          <input type="hidden" name="lc" value="US">
                          <input type="hidden" name="item_name" value="Unlocking Silent Histories">
                          <input type="hidden" name="no_note" value="0">
                          <input type="hidden" name="currency_code" value="USD">
                          <input type="hidden" name="bn" value="PP-DonationsBF:donate.png:NonHostedGuest">
                          <button name="submit" class="btn btn-lg btn-secondary">INVEST</button>
                          </form>
                        </div>
                      </li>
            </li> </ul>
                  
                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->
