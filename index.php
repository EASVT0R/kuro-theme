<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1><?php the_field("product_slide_title1")?></h1>
            <p><?php the_field("product_slide_desc1")?></p>
            <p><a class="btn btn-lg btn-primary" href="#">View Product</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
          <h1><?php the_field("product_slide_title2")?></h1>
            <p><?php the_field("product_slide_desc2")?></p>
            <p><a class="btn btn-lg btn-primary" href="#">View Product</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
          <h1><?php the_field("product_slide_title3")?></h1>
            <p><?php the_field("product_slide_desc3")?></p>
            <p><a class="btn btn-lg btn-primary" href="#">View Product</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



    <div class="container">
        
    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="<?php the_field('product_view_image'); ?>" width="500" height="500" alt="Kuro Pro Mousepad">
      </div>
      <div class="col-md-7">
        <h2 class="featurette-heading"><?php the_field("product_view_title")?><span class="text-muted"></span></h2>
        <p class="lead"><?php the_field("product_view_desc")?></p>
      </div>
      
    </div>

    <hr class="featurette-divider">


  </div>
  </div>
    <div class="row main-body testimonials  p-md-5 mx-0 ">
        <div class="col-12 d-flex justify-content-center">
            <h2>Testimonials</h2>
            
        </div>
        
        <div class="col-12">
        <div class="container marketing">

    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" src="<?php the_field('testimonial_image1'); ?>" width="140" height="140" alt="customer image">
        <h2><?php the_field("testimonial_name1")?></h2>
        <p><?php the_field("testimonial_comment1")?></p>
      </div>
      <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" src="<?php the_field('testimonial_image2'); ?>" width="140" height="140" alt="customer image">
        <h2><?php the_field("testimonial_name2")?></h2>
        <p><?php the_field("testimonial_comment2")?></p>
      </div>
      <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" src="<?php the_field('testimonial_image3'); ?>" width="140" height="140" alt="customer image">
        <h2><?php the_field("testimonial_name3")?></h2>
        <p><?php the_field("testimonial_comment3")?></p>
      </div>
    </div>

    </div>
        </div>
    </div>
    
    
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>