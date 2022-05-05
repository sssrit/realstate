<?php
get_header();
?>
      <main id="main">
          <?php
            $homePageService = new WP_Query(array(
                'post_per_page' => 3,
                'post_type' => 'service',
                'order' => 'ASC',
            ));

            $homePageProperties = new WP_Query(array(
                'post_per_page' => 1,
                'post_type' => 'my_property',
                'order' => 'ASC',
            ));

            $homePageAgents = new WP_Query(array(
                'post_per_page' => 1,
                'post_type' => 'agents',
                'order' => 'ASC',
            ));

            $homePageTestimonials = new WP_Query(array(
                'post_per_page' => 1,
                'post_type' => 'testimonials',
                'order' => 'ASC',
            ));
            ?>
            <section class="section-services section-t8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Our Services</h2>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                            while($homePageService->have_posts())
                            {
                                $homePageService->the_post();
                                ?>
                                    <div class="col-md-4">
                                        <div class="card-box-c foo">
                                        <div class="card-header-c d-flex">
                                            <div class="card-box-ico">
                                            <span class="bi bi-house"></span>
                                            </div>
                                            <div class="card-title-c align-self-center">
                                            <h2 class="title-c"><?php echo the_title();?></h2>
                                            </div>
                                        </div>
                                        <div class="card-body-c">
                                            <p class="content-c">
                                            <?php echo wp_trim_words(get_the_content(),10);?>
                                            </p>
                                        </div>
                                        <div class="card-footer-c">
                                            <a href="<?php the_permalink();?>" class="link-c link-icon">Read more
                                            <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        
                        ?>
                    </div>
                </div>   
            </section>     
            <?php wp_reset_postdata(); ?> 
        <!-- ======= Services Section ======= -->        

            <section class="section-property section-t8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-wrap d-flex justify-content-between">
                                <div class="title-box">
                                    <h2 class="title-a">Latest Properties</h2>
                                </div>
                                <div class="title-link">
                                    <a href="<?php echo site_url('properties');?>">All Property
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="property-carousel" class="swiper">
                    <div class="swiper-wrapper">
                    <?php
                        while($homePageProperties->have_posts())
                        {
                            $homePageProperties->the_post();
                            ?>
                            
                            <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                <?php the_post_thumbnail('propertiesFrontPage',array('class' => 'img-a img-fluid'));?>
                                </div>
                                <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="<?php the_permalink();?>"><?php echo the_title();?></a>

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
                            </div><!-- End carousel item --> 

                            <?php
                        }

                    ?>
                    </div>
                    </div>
                    <div class="propery-carousel-pagination carousel-pagination"></div>

                </div>
                </section><!-- End Latest Properties Section -->
            <?php wp_reset_postdata(); ?> 

        <!-- ======= Latest Properties Section ======= -->

        <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Testimonials</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
          <div class="swiper-wrapper">
            <?php 
            while( $homePageTestimonials->have_posts())
            {
                $homePageTestimonials->the_post();
                ?>
                    <div class="carousel-item-a swiper-slide">
                        <div class="testimonials-box">
                            <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-img">
                                <?php the_post_thumbnail(null,array('class' => 'img-fluid'));?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-ico">
                                <i class="bi bi-chat-quote-fill"></i>
                                </div>
                                <div class="testimonials-content">
                                <p class="testimonial-text">
                                    <?php the_content(); ?>
                                </p>
                                </div>
                                <div class="testimonial-author-box">
                                <?php the_post_thumbnail('testimonialShort',array('class' => 'testimonial-avatar'));?>

                                <h5 class="testimonial-author"><?php the_title();?></h5>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->
                <?php
            }
            ?> 
          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

      </div>
      <?php wp_reset_postdata(); ?> 
    </section><!-- End Testimonials Section -->

     
    </main><!-- End #main -->
<?php
get_footer();
?>