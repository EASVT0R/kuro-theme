<?php /*
Template Name: Products
Template Post Type: page
*/ ?>
<?php get_header() ?>

<?php

$args = array("post_type" => "post");

$posts = new WP_query($args);

?>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="<?php the_field("product_image")?>" alt="<?php the_title() ?>" />
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder"><?php the_title() ?></h5>
                            <p>$<?php the_field("product_price")?></p>
                            <p><?php the_field("product_desc")?></p>
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                href="<?php the_permalink();?>">View</a></div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata();?>
        </div>
</section>

<?php get_footer() ?>