<?php
/*

  Template Name: Home

*/
$heading = get_field('heading');
$sub_headiong = get_field('sub_heading');
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
<!--   <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css">
 -->  <?php wp_head(); ?>
</head>


    <body>


      <header class="main-header">
        
    
        

    </header> <!-- /. main-header -->




    <!-- Carousel
    ================================================== -->
    <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

          <!-- Indicators -->
          <ol class="carousel-indicators">
           
      
          </ol>

          <div class="carousel-inner" role="listbox">

            <div class="item active">

               <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/landingchua.png" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow"><?php echo $heading ?></h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow "><?php echo $sub_heading ?></h4>
                  <a href="http://50.87.248.187/~twooneu9/USHWP/missions/" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" >ENGLISH</a><a href="/missiones" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#mission.html">SPANISH</a>
                 <br> <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE</a>
                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->


            



          </div>

         

    </div><!-- /.carousel -->

<?php get_footer() ?>