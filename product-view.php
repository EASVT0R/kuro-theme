<?php /*
Template Name: Product-View
Template Post Type: post
*/ ?>

<?php get_header() ?>
<?php if(have_posts()):?>
<?php while(have_posts()): the_post() ?>
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?php the_field("product_image")?>"
                    alt="<?php the_title() ?>" /></div>
            <div class="col-md-6">
                <h1 class="display-5 fw-bolder"><?php the_title();?></h1>
                <div class="fs-5 mb-5">
                    <span>$<?php the_field("product_price")?></span>
                </div>
                <p class="lead"><?php the_content();?></p>
                <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1"
                        style="max-width: 3rem" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="button" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Added to cart</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Item has been successfully added to cart!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>