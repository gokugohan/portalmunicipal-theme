<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container-fluid">

        <div class="row justify-content-center hero-title">
            <div class="col-md-12 text-center">

                <a class="navbar-brand mb-3" href="<?php echo bloginfo('url'); ?>">
                    <?php
                    $header_logo = get_theme_mod('municipality_header_logo');
                    if ($header_logo == null) {
                        $header_logo = get_stylesheet_directory_uri() . '/assets/img/municipality_01.png';
                    }

                    $header_title = get_theme_mod('municipality_hero_title');
                    if ($header_title == null) {
                        $header_title = lang('first_heading');
                    }

                    $header_description = get_theme_mod('municipality_hero_description');
                    if ($header_description == null) {
                        $header_description = lang('first_description');
                    }
                    ?>

                    <img class="header_logo" src="<?= $header_logo ?>">
                </a>

                <div class="container">
                    <h2 class="text-white bold text-uppercase text-center">
                        <?= filter_text_wpglobus(get_theme_mod('municipality_hero_title')) ?>
                    </h2>
                </div>

                <p class="text-white" id="dash2">
                    <?= filter_text_wpglobus(get_theme_mod('municipality_hero_description')) ?>
                </p>
            </div>
        </div>

        <div class="row justify-content-center profile-catalog">
            <div class="col-xl-2 col-lg-3 col-md-4">
                <div class="icon-box hoverable wow fadeInLeft">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/front/08d916f9d739fc65496e16fbcbd38af4.png' ?>"
                         alt="">
                    <h3><a href="#perfil-dos-municipios"
                           class="btn-load-municipalities"><?= lang('municipality-profile') ?></a></h3>
                </div>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-4">
                <div class="icon-box hoverable wow fadeInLeft" data-toggle="modal"
                     data-target="#modal-data-catalog">
                    <!--                    <img src="images/catalog.png" alt="">-->
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/front/a3c7bddf8c15cc48e2e74077aaa0e69c.png' ?>"
                         alt="">
                    <h3><a href="#!" data-toggle="modal"
                           data-target="#modal-data-catalog"><?= lang('data_catalog') ?></a></h3>
                </div>
            </div>

            <!--            <div class="col-xl-2 col-lg-3 col-md-4">-->
            <!--                <div class="icon-box hoverable wow fadeInLeft">-->
            <!--                    <img src="-->
            <?php //echo get_stylesheet_directory_uri() . '/assets/img/front/e75a590fa7ea0df6cd9212a1459ae68b.png'?><!--" alt="">-->
            <!--                    <h3><a href="#!" id="btn-view-library">--><? //= lang('library') ?><!--</a></h3>-->
            <!--                </div>-->
            <!--            </div>-->
            <div class="col-xl-2 col-lg-3 col-md-4">
                <div class="icon-box hoverable wow fadeInLeft" data-target="#modal-service-to-citizen"
                     data-toggle="modal">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/front/d56b07fa25b1c546b415c695ae197aef.png' ?>"
                         alt="">
                    <h3><a href="<?= bloginfo('url') ?>/Service-to-citizen"><?= lang('service-to-citizen') ?></a>
                    </h3>
                </div>
            </div>

            <?php
            if (get_option('setting_settings_general')['setting_enable_training_platform']) {
                ?>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="icon-box hoverable wow fadeInLeft">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/front/training.png' ?>" alt="">
                        <h3><a href="<?= bloginfo('url') ?>/plataforma-de-treinamentu"><?= lang('training-platform') ?></a>
                        </h3>
                    </div>
                </div>
                <?php
            }
            ?>

            <div class="col-xl-2 col-lg-3 col-md-4">
                <div class="icon-box hoverable wow fadeInLeft">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/front/fd06b8ea02fe5b1c2496fe1700e9d16c.png' ?>"
                         alt="">
                    <h3><a href="<?= bloginfo('url') ?>/Mapa"><?= lang('map') ?></a></h3>
                </div>
            </div>

        </div>

    </div>

</section>
