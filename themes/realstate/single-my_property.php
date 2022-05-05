<?php
get_header();
?>
    <main id="main">
<?php 
while(have_posts())
{
    the_post();

?>        

<!-- ======= Intro Single ======= -->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single"><?php the_title();?></h1>
          <span class="color-text-a"><?php the_field('location');?></span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url();?>">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('properties');?>">Properties</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
            <?php the_title();?>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section><!-- End Intro Single-->

<!-- ======= Property Single ======= -->
<section class="property-single nav-arrow-b">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div id="property-single-carousel" class="swiper">
          <div class="swiper-wrapper">
            <div class="carousel-item-b swiper-slide">
            <?php the_post_thumbnail('propertiesDeatilsPage');?>            </div>
            </div>
        </div>
        <div class="property-single-carousel-pagination carousel-pagination"></div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">

        <div class="row justify-content-between">
          <div class="col-md-5 col-lg-4">
            <div class="property-price d-flex justify-content-center foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-cash">$</span>
                </div>
                <div class="card-title-c align-self-center">
                  <h5 class="title-c"><?php the_field('rent');?></h5>
                </div>
              </div>
            </div>
            <div class="property-summary">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d section-t4">
                    <h3 class="title-d">Quick Summary</h3>
                  </div>
                </div>
              </div>
              <div class="summary-list">
                <ul class="list">
                  <li class="d-flex justify-content-between">
                    <strong>Property ID:</strong>
                    <span><?php the_field('property_id');?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Location:</strong>
                    <span><?php the_field('location');?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Property Type:</strong>
                    <span><?php the_field('property_type');?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Status:</strong>
                    <span><?php the_field('status');?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Area:</strong>
                    <span><?php the_field('area');?> m
                      <sup>2</sup>
                    </span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Beds:</strong>
                    <span><?php the_field('beds');?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Baths:</strong>
                    <span><?php the_field('bath');?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Garage:</strong>
                    <span><?php the_field('garages');?></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-7 col-lg-7 section-md-t3">
            <div class="row">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Property Description</h3>
                </div>
              </div>
            </div>
            <div class="property-description">
              <p class="description color-text-a">
                <?php the_content();?>
              </p>
              
            </div>
            <!--<div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Amenities</h3>
                </div>
              </div>
            </div>
            <div class="amenities-list color-text-a">
              <ul class="list-a no-margin">
                <li>Balcony</li>
                <li>Outdoor Kitchen</li>
                <li>Cable Tv</li>
                <li>Deck</li>
                <li>Tennis Courts</li>
                <li>Internet</li>
                <li>Parking</li>
                <li>Sun Room</li>
                <li>Concrete Flooring</li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
     
     
    </div>
  </div>
</section><!-- End Property Single-->

</main><!-- End #main -->
<?php
}
get_footer();
?>