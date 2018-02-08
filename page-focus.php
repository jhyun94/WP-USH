<?php 
/*


Template Name: Focus

*/
$youth = get_field('youth');
$work = get_field('work');
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

      <div class="main-container">

    <div class="container">

      <div class="row">
<div class="section-home our-causes animate-onscroll fadeIn">

        <div class="container">
      
        
<h2 class="title-style-1">Why Indigenous youth<span class="title-under"></span></h2>
        <img src=<?php echo $youth['url'] ?> alt="" class="img-responsive">

<!-- /.row -->
      </div>
      
                      </div>
                      

                      
                  </div> <!-- /.row -->

            
          </div> 

    </div> <!-- /.about-us -->



    <div class="section-home our-causes animate-onscroll fadeIn">

        <div class="container">
          <h2 class="title-style-1">Where we work<span class="title-under"></span></h2>
          <div class="row">

                <div class="col-md-12">

                    <div class="cause">

                        <img src=<?php echo $work['url'] ?> alt="" class="img-responsive">

                       

                      
                        

                    </div> <!-- /.cause -->
                    
                </div> 

                
                    
                </div>

                <div class="col-md-3 col-sm-6">

                    
                    
                </div>

            </div>

        </div>
        
    </div> <!-- /.our-causes -->



    <div class="section-home our-sponsors animate-onscroll fadeIn">
    
        <div class="container">
          <h2 class="title-style-1">PRESENTATION VENUES<span class="title-under"></span></h2>
          <ul class="owl-carousel list-unstyled list-sponsors">

            <li> <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/ArtinBloom.png" alt=""></li>
             <li> <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/AFS.png" alt=""></li>
              <li> <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/atitlan.png" alt=""></li>
              <li> <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/aviary.png" alt=""></li>
              <li> <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/BHCC.png" alt=""></li>
              <li> <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/casahererra.png" alt=""></li>
              <li> <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/CECAP.png" alt=""></li>
              <li> <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/cenote.png" alt=""></li>
              <li> <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/espanol.png" alt=""></li>
              <li> <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/flytrap.png" alt=""></li>
              <li> <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/galeria.png" alt=""></li>
              <li> <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/jos.png" alt=""></li>
              <li> <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/piano.png" alt=""></li>
              <li> <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/NMAI.png" alt=""></li>
              <li> <img src="http://50.87.248.187/~twooneu9/USHWP/wp-content/uploads/2017/08/UNCW.png" alt=""></li>
              

            </ul>

        </div>

    </div> <!-- /.our-sponsors -->

<?php get_footer() ?>