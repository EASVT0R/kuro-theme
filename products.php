<?php /* Template Name: products */ ?>
<?php get_header() ?>
<div class="header-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg.jpg);">
      <div class="container">
        <h1>
         <?php bloginfo("name"); ?>
        </h1>
        <p>
          <?php bloginfo("description"); ?>
        </p>
      </div>
    </div>
    <div class="container mt-5">
        <main class="row" id="home">
            <section class="col-12">
                <?php while(have_posts()): the_post() ?>
                   
                    <p><?php the_content() ?></p>
                <?php endwhile ?>
            </section>
        </main>
    </div>
<?php get_footer() ?>