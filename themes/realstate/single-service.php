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
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                        <a href="<?php echo site_url();?>">Home</a>
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

            <section class="section-about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                             <?php the_content();?>
                        </div>
                    </div>      
                </div>
            </section>


            </main><!-- End #main -->
        <?php
    }
 ?>


<?php
get_footer();
?>