<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WZ024KKC17"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-WZ024KKC17');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logowhitesvg.svg" alt="logo" width="90"
                    height="90">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" ria-controls="navbarSupportedContent" aria-expanded="false"
                ria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php wp_nav_menu(array(
            "theme_location" => "main-menu",
            'depth'           => 1,
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarSupportedContent',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
            
            )); 
          ?>
        </div>
    </nav>
    <!-- <div class="container"> -->