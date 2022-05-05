<?php
get_header();
?>
<main id="main">

<!-- ======= Intro Single ======= -->


<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Our Amazing Properties</h1>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url();?>">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              All Properties 
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section><!-- End Intro Single-->

<!-- ======= Property Grid ======= -->


<section class="property-grid grid">
  <div class="container">
    <div class="row">   
          
      <?php 
   
      while(have_posts())
      {
        
        the_post();
      ?>
          <div class="col-md-4">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
          <?php the_post_thumbnail('propertiesFrontPage',array('class' => 'img-a img-fluid'));?>
          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="#"><?php the_title();?></a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">rent | $ <?php the_field('rent');?></span>
                </div>
                <a href="<?php the_permalink();?>" class="link-a">Click here to view
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title">Area</h4>
                    <span><?php the_field('area');?> m
                      <sup>2</sup>
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Beds</h4>
                    <span><?php the_field('beds');?></span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Baths</h4>
                    <span><?php the_field('bath');?></span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Garages</h4>
                    <span><?php the_field('garages');?></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
     
      }
      ?>
            

    </div>
    <div class="row">
      <div class="col-sm-12">
        <nav class="pagination-a">
          <ul class="pagination justify-content-end">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">
                <!-- <span class="bi bi-chevron-left"></span> -->
              </a>
            </li>
            <li class="page-item">
            <?php echo paginate_links(); ?>
            </li>
            
          </ul>
        </nav>
      </div>
    </div> 
  </div>
</section><!-- End Property Grid Single-->

</main><!-- End #main -->
<?php
get_footer();
?>