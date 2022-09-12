<nav class="navbar navbar-expand-lg py-0 fixed-top navbar-dark">
    <div class="container" style="max-width: 85% !important;">
        <?php
        $home_url = site_url();

        if (is_page(['plataforma-de-treinamentu' ,'kona-ba-plataforma-treinamentu'])) {
            $home_url = site_url()."/plataforma-de-treinamentu";
        }
        ?>
        <a href="<?=$home_url?>" class="navbar-brand">
            <?php

            if (is_page(['plataforma-de-treinamentu' ,'kona-ba-plataforma-treinamentu'])) {
                $menu_logo = get_theme_mod('municipality_education_platform_logo');
                if ($menu_logo == null) {
                    $menu_logo = get_stylesheet_directory_uri() . '/assets/img/municipality_01.png';
                }
                ?>
                <!-- Logo Image -->
                <img src="<?= $menu_logo ?>" width="75" alt="" class="d-inline-block align-middle mr-2" style="max-height: 65px;">
                <!-- Logo Text -->
                <!--                <span class="text-uppercase font-weight-bold">Company</span>-->
            <?php
            }else{
//                $menu_logo = get_theme_mod('municipality_header_logo');
//                if($menu_logo==null){
//                    $menu_logo = get_stylesheet_directory_uri() . '/assets/img/municipality_01.png';
//                }
            }

            ?>

        </a>

        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
<!--                <li class="nav-item about-portal">-->
<!--                    <a class="nav-link" href="--><?//=bloginfo('url')?><!--" title="--><?//= lang('home') ?><!--">-->
<!--                        <span class="hide-on-med-and-downa">--><?//= lang('home') ?><!--</span>-->
<!--                    </a>-->
<!--                </li>-->

<!--                <li class="nav-item dropdown" title="--><?php //echo $lang['tooltip']['portal_municipal']; ?><!--">-->
<!--                    <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions"-->
<!--                       data-toggle="dropdown"-->
<!--                       aria-expanded="true">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"-->
<!--                             class="bi bi-grid-fill" viewBox="0 0 16 16">-->
<!--                            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>-->
<!--                        </svg>-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu dropdown-menu-md-right">-->
<!--                        <li>-->
<!---->
<!--                            <a class="aa" href="/">-->
<!--                                --><?php //echo lang('home') ?>
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!---->
<!--                            <a class="aa" href="--><?//= bloginfo('url') ?><!--#perfil-dos-municipios">-->
<!--                                --><?php //echo lang('municipality-profile'); ?>
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a class="aa" href="#!" data-toggle="modal"-->
<!--                               data-target="#modal-data-catalog">-->
<!--                                --><?php //echo lang('data_catalog'); ?>
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a class="aa" href="--><?//= bloginfo('url') ?><!--/plataforma-de-treinamentu">-->
<!--                                --><?php //echo lang('training-platform'); ?>
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a class="aa" href="--><?//= bloginfo('url') ?><!--#biblioteka" id="btn-view-librarysss">-->
<!--                                --><?php //echo lang('library') ?>
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a class="aa" href="--><?//= bloginfo('url') ?><!--/Service-to-citizen">-->
<!--                                --><?php //echo lang('service-to-citizen') ?>
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a class="aa" href="--><?//= bloginfo('url') ?><!--/Mapa">-->
<!--                                --><?php //echo lang('map') ?>
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->

                <li class="nav-item">
                    <a class="nav-link" href="<?= bloginfo('url') ?>" title="<?= lang('home') ?>"><?= lang('home') ?></a>
                </li>


                <li class="nav-item about-portal">
                    <a class="nav-link" href="#" title="<?= lang('about_municipality_portal') ?>"
                       data-toggle="modal" data-target="#modal-about">
                        <span class="hide-on-med-and-downa"><?= lang('about_municipality_portal') ?></span>
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/front/ec5f0df17254e41323bec17028331577.png' ?>"
                             class="img-fluid about-icon-img">
                    </a>
                </li>
                <?php

                if (!is_page(['plataforma-de-treinamentu' ,'kona-ba-plataforma-treinamentu']) &&
                    get_option('setting_settings_general')['setting_enable_faq']) {
                    ?>

                    <li class="nav-item faq-portal">
                        <a class="nav-link text-white" title="<?= lang('faq_desc') ?>" href="#" data-toggle="modal"
                           data-target="#modal-faq">
                            <span class="hide-on-med-and-downa"><?= lang('faq') ?></span>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/front/icons8-ask-question-50.png' ?>"
                                 class="img-fluid about-icon-img">
                        </a>
                    </li>
                    <?php
                }
                ?>


                <?php

                /**
                 * WPGlobus language switcher.
                 * Example 1: with using module `Publish` from WPGlobus Plus.
                 */
                if (class_exists('WPGlobus')): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" title="<?= lang('switch_language') ?>" href="#"
                           id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img_size language_image dropdown-toggle mt-0" data-toggle="dropdown"
                                 style=""
                                 src="<?php echo WPGlobus::Config()->flags_url . WPGlobus::Config()->flag[WPGlobus::Config()->language] ?>">
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            $enabled_languages = apply_filters('wpglobus_extra_languages', WPGlobus::Config()->enabled_languages, WPGlobus::Config()->language);
                            foreach ($enabled_languages as $language) {
                                $url = null;
                                $is_current = true;
                                if ($language != WPGlobus::Config()->language) {
                                    $url = WPGlobus_Utils::localize_current_url($language);

                                    $is_current = false;
                                    $flag = '<img style="width:23px;" League="' . WPGlobus::Config()->flags_url . WPGlobus::Config()->flag[$language] . '" /> ' . WPGlobus::Config()->language_name[$language];

                                    printf('<a %s %s>%s</a></>', (empty($url) ? '' : 'href="' . esc_url($url) . '"'), ($is_current ? 'class="wpglobus-current-languages dropdown-item"' : 'class ="dropdown-item"'), $flag);

                                }
                            }
                            ?>
                        </div>
                    </li>

                <?php
                endif;
                ?>
                <?php
                                add_logout_menu();
                ?>


            </ul>
            <?php
            if (is_page(['plataforma-de-treinamentu' ,'kona-ba-plataforma-treinamentu'])) {
                ?>
                <a class="btn-getstarted btn-join-now" id="btn-login-sso" href="#!"><?= lang('join now') ?></a>
                <?php
            }
            ?>

        </div>
    </div>
</nav>

