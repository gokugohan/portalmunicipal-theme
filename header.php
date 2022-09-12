<?php
$hero_background_image = get_theme_mod('municipality_hero_image');
if ($hero_background_image == null) {
    $hero_background_image = get_stylesheet_directory_uri() . '/assets/img/kotalama_0.jpg';
}
//
?>


    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebPage">
    <head>
        <title>
            <?php
            $site_description = get_bloginfo('description', 'display');
            $site_name = get_bloginfo('name');
            if (is_front_page()) {
                echo $site_name;
            } else {
                print_custom_page_title();
            }

            echo ' | ';
            echo $site_description;
            ?>
        </title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>


        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/animate.css' ?>">
        <link rel="stylesheet"
              href="<?php echo get_stylesheet_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css' ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/colors.css' ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/homepage.css' ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/footer.css' ?>">


        <link rel="stylesheet"
              href="<?php echo get_stylesheet_directory_uri() . '/assets/owlcarousel/assets/owl.carousel.min.css' ?>">
        <link rel="stylesheet"
              href="<?php echo get_stylesheet_directory_uri() . '/assets/owlcarousel/assets/owl.theme.default.min.css' ?>">

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/profile_list.css' ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/home_tab.css' ?>">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet"
              href="<?php echo get_stylesheet_directory_uri() . '/assets/css/service-to-citizen-municipality.css' ?>">

        <?php
        if (is_page('Services')) {
            ?>

            <link href="<?php echo get_stylesheet_directory_uri() . '/assets/css/map/leaflet.css' ?>" rel="stylesheet"/>
            <link href="<?php echo get_stylesheet_directory_uri() . '/assets/css/map/MarkerCluster.css' ?>"
                  rel="stylesheet"/>
            <link href="<?php echo get_stylesheet_directory_uri() . '/assets/css/map/MarkerCluster.Default.css' ?>"
                  rel="stylesheet"/>
            <link href="<?php echo get_stylesheet_directory_uri() . '/assets/css/map/styledLayerControl.css' ?>"
                  rel="stylesheet"/>
            <link href="<?php echo get_stylesheet_directory_uri() . '/assets/css/map/leaflet.groupedlayercontrol.css' ?>"
                  rel="stylesheet"/>
            <link rel="stylesheet"
                  href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css">
            <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css'
                  rel='stylesheet'/>

            <?php
        }
        ?>
        <link href="<?php echo get_stylesheet_directory_uri() . '/assets/css/map/map.css' ?>" rel="stylesheet"/>

        <link href="<?php echo get_stylesheet_directory_uri() . '/assets/css/index.css' ?>" rel="stylesheet"/>

        <link href="<?php echo get_stylesheet_directory_uri() . '/assets/css/top_bar_menu.css' ?>" rel="stylesheet"/>

        <link href="<?php echo get_stylesheet_directory_uri() . '/assets/css/style.css' ?>" rel="stylesheet">

        <link href="<?php echo get_stylesheet_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css' ?>"
              rel="stylesheet">

        <style>
            .breadcrumbs-custom-path li::after {
                color: white;
            }
        </style>

        <?php

        if (is_page('plataforma-de-treinamentu') || is_page('kona-ba-plataforma-treinamentu')) {

            ?>
            <link href="<?php echo get_stylesheet_directory_uri() . '/assets/vendor/animate.css/animate.min.css' ?>"
                  rel="stylesheet">

            <link href="<?php echo get_stylesheet_directory_uri() . '/assets/css/education_platform.css' ?>"
                  rel="stylesheet">

            <link href="<?php echo get_stylesheet_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css' ?>"
                  rel="stylesheet">
            <link href="<?php echo get_stylesheet_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css' ?>"
                  rel="stylesheet">


            <style>


                .services-area {
                    margin-top: -50px;
                }

                .services-area .service-area-header {
                    margin: 0 auto;
                }

                .services-area .service-area-header h3 {
                    font-size: 1.875rem;
                    font-weight: bold;
                    text-transform: uppercase;
                    color: #093366;
                    margin-bottom: .5em;
                }

                @media (min-width: 1024px) {
                    .services-area .service-area-header {
                        text-align: center;
                        width: 50%;
                        margin-bottom: 6em;
                    }
                }

                @media (max-width: 768px) {
                    .services-area {
                        /*margin-top: -20px;*/
                    }

                    #hero {
                        height: auto !important;
                    }
                }

                .services-area .single-services {
                    display: flex;
                    box-shadow: 0px 25px 60px rgba(150, 8, 7, 0.05);
                    padding: 29px 24px;
                    border-radius: 20px;
                    background: #fff;
                    margin-bottom: 30px;
                    transition: 1s;

                }

                .services-area .single-services:hover {
                    box-shadow: 0px 25px 60px rgba(150, 8, 7, .3);
                }

                .services-area .single-services .features-icon {
                    position: relative;
                    top: 8px;
                }

                .services-area .single-services .features-icon img {
                    display: block;
                    width: 100px;
                }

                .services-area .single-services .features-caption {
                    padding-left: 19px;
                }

                .services-area .single-services .features-caption h3 {
                    font-size: 20px;
                    line-height: 1.2;
                    margin-bottom: 10px;
                    font-weight: 700;
                    color: #960807;
                }

                .services-area .single-services .features-caption p {
                    font-size: 1.2rem;
                    line-height: 1.5;
                    margin-bottom: 0;
                    margin-top: 0;
                }


                .about-training-content ul {
                    list-style: none;
                }

                .about-training-content ul li:before {
                    content: "\f26b";
                    display: inline-block;
                    font-family: bootstrap-icons !important;
                    font-style: normal;
                    font-weight: normal !important;
                    font-variant: normal;
                    text-transform: none;
                    line-height: 1;
                    vertical-align: -.125em;
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale;
                }

            </style>
            <?php
        }

        ?>
        <!--    Form Comment -->
        <style>
            .comment-form {
                margin-bottom: 20px;
            }

            .comment-form > p > label {
                padding: 10px 0;
                font-weight: 600;
            }

            .comment-form #comment {
                display: block;
                width: 100%;

                padding: .375rem .75rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: .25rem;
                transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }

            .comment-form #submit {
                padding: 10px 20px;
                background: #960807;
                border: unset;
                color: #fff;
                cursor: pointer;
                box-shadow: 0 0 2px #960807;
                outline: 0;
                position: relative;
                border-radius: 6px;
                font-weight: 500;
            }

            .comment-form #submit:after {
                content: "\f017";
                display: inline-block;
                font: normal normal normal 14px/1 FontAwesome;
                font-size: inherit;
                text-rendering: auto;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }

            #checkout-payment #checkout-order-action button {
                margin: 0 !important;
                background: #960807 !important;
            }

            .lp-user-profile.guest .lp-content-area {
                padding: 20px;
                font-size: 24px;
                text-align: center;
            }

        </style>

        <style>
            <?php



            if(is_page('plataforma-de-treinamentu')){
                 $hero_background_image = get_theme_mod('municipality_education_platform_hero_image');
        if ($hero_background_image == null) {
            $hero_background_image = get_stylesheet_directory_uri() . '/assets/img/lib3.jpg';
        }
?>
            #hero {
                background-image: url("<?= $hero_background_image ?>");
                background-size: cover;

                background-attachment: fixed;
                background-repeat: no-repeat;

            }


            <?php
                        }else{
                ?>
            #hero {
                background-image: url("<?= $hero_background_image ?>");
                background-size: cover;

                background-attachment: fixed;
                background-repeat: no-repeat;
                height: 100vh;
            }

            <?php

                    }
                    ?>
            @media (max-width: 576px) {
                .title a {
                    font-size: 12px;
                }
            }

            @media (max-width: 767px) {
                .title a {
                    font-size: 13px;
                }
            }

            @media (min-width: 768px) {
                .title a {
                    font-size: 14px;
                }
            }

            @media (min-width: 992px) {
                .title a {
                    font-size: 16px;
                }
            }

        </style>

        <?php
        if (is_page('Services')) {
            ?>
            <style>
                #map {
                    height: 70vh !important;
                }


                .breadcrumbs-custom-inner .breadcrumbs-custom-title {
                    color: white;
                }

                #news-list-container .post-modern > p {
                    text-align: justify;
                }

                .post-modern p, .post-modern .post-modern-title {
                    padding-right: 0px;
                }

                #map .leaflet-top.leaflet-left {
                    top: 0px;
                }

                .head_bg {
                    height: auto;
                }

                ul.population_ul li img {
                    height: 40px !important;
                }

                ul.population_ul li .fnt-wgt {
                    padding: 0px !important;
                }

                .agency-marker-icon {
                    background-color: #d0d2d0;
                    padding: 2px;
                    border-radius: 5px;
                }


            </style>
            <?php
        }
        ?>


        <link href="<?php echo get_stylesheet_directory_uri() . '/style.css' ?>"
              rel="stylesheet">
        <?php
        wp_head();

        if (get_theme_mod('themeslug_logo')) {
            $url_img = esc_url(get_theme_mod('themeslug_logo'));
            $alt = esc_attr(get_bloginfo('name', 'display'));
        }
        ?>

        <style>
            .custom-menu-list {
                flex-direction: row;
            }

            .custom-menu-list a.dropdown-item {
                padding: 0;
            }

            .custom-menu-list .dropdown-item:focus, .dropdown-item:hover {
                background: transparent !important;
            }

            .download-list li:first-child a, .download-list li:first-child a span {
                padding-left: 0px;
            }

            .download-counter {
                margin: 0 0 0 30px;
                padding: 7px;
                background: #960707;
                color: #e9e9e9;
                border-color: transparent;
                border-radius: 5px;
                font-weight: 600;
                font-size: 16px;
                cursor: text !important;
            }


            /*    Navbar */


            #modal-sso-login .modal-dialog {
                width: 25%;
            }

            @media only screen and
            (min-device-width: 768px) and
            (max-device-width: 1023px) {
                #modal-sso-login .modal-dialog {
                    width: 50%;
                }
            }


            @media (max-width: 359px) {
                #modal-sso-login .modal-dialog {
                    width: 90%;
                }
            }

            @media (min-width: 360px) and (max-width: 767px) {
                #modal-sso-login .modal-dialog {
                    width: 90%;
                }
            }

            .btn-getstarted {
                background: #960807;
                color: #fff;
                margin: 10px 10px !important;
                padding: 10px 10px !important;
            }


            #accordion_faq .card {
                border-top: 3px solid #960707 !important;
            }

            #accorditon_faq .content > h6, #accordion_faq .content > h6 a {
                color: #960807 !important;
            }

            #accordion_faq > .card > .card-header h6 a {
                color: #960807 !important;
            }

            #accordion_faq .card-body p {
                line-height: 1.5em;
                font-size: 1.175rem;
            }

            li.nav-item {
                transition: 0.3s;
            }

            li.nav-item:hover {
                background: #960807;
                border-radius: 4px;
            }

            /*--------------------------------------------------------------
        # Cta
        --------------------------------------------------------------*/
            .cta {
                background: linear-gradient(rgba(150, 8, 7, .1), rgba(150, 8, 7, .25)), url("<?php echo get_stylesheet_directory_uri() . '/assets/img/corosal.jpg' ?>") fixed center center;
                background-size: cover;
                padding: 100px 0;
            }


            .cta p {
                font-size: 1.2rem;
            }

            @media (min-width: 992px)
                .text-lg-start {
                    text-align: left !important;
                }
            }

            @media (max-width: 1024px) {
                .cta {
                    background-attachment: scroll;
                }
            }

        </style>
    </head>
<body>

    <!-- NAVBAR-->
<?php
//var_dump(WPGlobus::Config()->language_name["pt"]);
include("includes/top_bar_menu.php");
?>

    <div class="please-wait d-none" style="display: block;">
        <div class="load-wrapper"><img
                    src="<?php echo get_stylesheet_directory_uri() . '/assets/img/sdg_circle.svg' ?>"/>
        </div>
        <div class="please-wait-bg"></div>
    </div>


<?php

if (is_front_page()) {
    include("includes/hero.php");
    ?>
    <style>


    </style>
    <section id="cta" class="cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-lg-start">
                    <h2 class="text-uppercase text-white wow fadeInUp"><?php echo lang('second_heading'); ?></h2>
                    <p class="text-white  wow fadeInUp"> <?php echo lang('second_description'); ?></p></div>
            </div>
        </div>
    </section>
    <?php
}


