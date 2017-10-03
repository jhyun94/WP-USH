<?php 
/* 
  Template Name: News
*/  

$main_image = get_field('main_image');
$main_content = get_field('main_content');
get_header(); ?>

  <div class="page-heading text-center">

    <div class="container zoomIn animated">
      
      <h1 class="page-title">ABOUT US <span class="title-under"></span></h1>
      <p class="page-description">FIND US PUBLISHED</p>
    </div>

  </div>

  <div class="main-container">

    <div class="container">

      <div class="row fadeIn animated">

        <div class="col-md-6">

          <img src= <?php echo $main_image['url'] ?> alt="" class="img-responsive">

        </div>

        <div class="col-md-6">
          <h2>SHARING THE WORK</h2>
          <p><?php echo $main_content ?></p>
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

          <div class="container">
            <h2 class="title-style-1">publications<span class="title-under"></span></h2>
            <div class="row">
<div class="section-home our-causes animate-onscroll fadeIn">

        <div class="container">
      

      <h2>Book:</h2>
      <?php $books_array = new WP_Query( array('cat' => 4) ); ?>
      <?php while( $books_array->have_posts() ) : $books_array->the_post(); ?>
        <p><span><a href="<?php the_field('link') ?>" target="_blank"> <?php the_title() ?></a></span></p>
      <?php endwhile; ?>


     
      <h2>Radio</h2>
      <?php $radio_array = new WP_Query( array('cat' => 5) ); ?>

      <?php while( $radio_array->have_posts() ) : $radio_array->the_post(); ?>
        <p><span><a href="<?php the_field('link') ?>" target="_blank"> <?php the_title() ?></a></span></p>
      <?php endwhile; ?>
     
          
      <h2>Journals & Magazines</h2>
      <?php $journal_array = new WP_Query( array('cat' => 6) ); ?>
      <?php while( $journal_array->have_posts() ) : $journal_array->the_post(); ?>
        <p><span><a href="<?php the_field('link') ?>" target="_blank"> <?php the_title() ?></a></span><p>
      <?php endwhile; ?>
          
      <h2>In The News</h2>
          <?php $news_array = new WP_Query( array( 'cat' => 7) ); ?>
          <?php while( $news_array->have_posts() ) : $news_array->the_post(); ?>
            <p><span><a href="<?php the_field('link')?>" target="_blank"> <?php the_title() ?></a></span></p>
          <?php endwhile; ?>

          
      <h2>Grants</h2>
        <?php $grants_array = new WP_Query( array( 'cat' => 8) ); ?>
        <?php while( $grants_array->have_posts() ) : $grants_array->the_post(); ?>
          <p><span><a href="<?php the_field('link')?>" target="_blank"> <?php the_title() ?></a></span></p>
        <?php endwhile; ?>

<!-- /.row -->
    </div>
      
                      </div>
                      

                      
                  </div> <!-- /.row --></div>

<?php get_footer(); ?>