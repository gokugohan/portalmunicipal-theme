<div id="modal-about" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h4 class="modal-title"><?= lang('about_municipality_portal') ?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body p-0">
                <div class="head_bg">
                    <div id="overlay1"></div>
                    <div class="corsal-div">
                        <h2 class="text-center white-text"><?= lang('about_municipality_portal') ?></h2>
                        <p><?php lang('second_description') ?></p>
                    </div>
                </div>

                <div class="container-fluid" style="margin-top: 60px; margin-bottom: 60px;">
                    <h5 class="d1"><?php echo lang('about_question1'); ?></h5>
                    <hr class="linebold">
                    <p class="ppad30"><br>
                        <?php echo lang('about_answer1') ?>
                    </p><br><br>


                    <h5 class="d1"><?php echo lang('about_question2'); ?></h5>
                    <hr class="linebold">
                    <p class="ppad30"><br>
                        <?php echo lang('about_answer2') ?>
                    </p><br><br>

                    <h5 class="d1"><?php echo lang('about_question3'); ?></h5>
                    <hr class="linebold">
                    <p class="ppad30"><br>
                        <?php echo lang('about_answer3') ?>
                    </p><br><br>

                    </p>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<?php //include 'includes/modal_datacatalog_window.php' ?>

<?php //include 'includes/modal_library_window.php' ?>


<div class="modal fade" id="modal-login" role="dialog">
    <div class="modal-dialog" style="max-width: 25%;">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"><?php echo lang('login') ?></h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <form action="<?= wp_login_url() ?>" method="post" name="loginform">
                    <div class="form-field">
                        <label><?= lang('Username') ?>:</label>
                        <input type="text" class="form-control" name="log"/>
                    </div>
                    <div class="form-field">
                        <label><?= lang('Password') ?>:</label>
                        <input type="password" class="form-control" name="pwd"/>
                    </div>

                    <div class="mt-4">
                        <button type="submit" name="wp-submit"
                                class="btn btn-primary btn-block m-0"><?= lang('login') ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<style>
    #modal-iframe .modal-dialog {
        width: 95vw;
        height: 95vh;
        margin: 0 auto;
        padding-top: 30px;
        max-width: none;
    }

    #modal-iframe .modal-dialog .modal-header {
        background: transparent;
        border: none;
    }

    #modal-iframe .modal-dialog .modal-content {
        height: 95vh;
        border-radius: 0;
        border: none;
    }

    #modal-iframe .modal-dialog .modal-content .modal-body {
        overflow-y: auto;
        padding: 0;
    }

    #modal-iframe .modal-dialog .modal-content .modal-body iframe {
        width: 100%;
        height: 100%;
    }
</style>

<div class="modal fade" id="modal-iframe" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"></h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <iframe data-src="http://ipg.tl" id="modal_iframe" frameborder="0" title="Iframe Example"></iframe>
            </div>
        </div>
    </div>
</div>

<div id="scrollUp" style="bottom: 45px; right: 24px;">
    <a class="btn btn-floating">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<?php
$footer_img = get_theme_mod('municipality_footer_education_platform_image');

$sponsor1_img = get_theme_mod('municipality_footer_education_platform_sponsor1');
$sponsor2_img = get_theme_mod('municipality_footer_education_platform_sponsor2');
$sponsor3_img = get_theme_mod('municipality_footer_education_platform_sponsor3');
$sponsor4_img = get_theme_mod('municipality_footer_education_platform_sponsor4');


$sponsor1_url = filter_text_wpglobus(get_theme_mod('municipality_footer_education_platform_sponsor1_url', '#!'));
$sponsor2_url = filter_text_wpglobus(get_theme_mod('municipality_footer_education_platform_sponsor2_url', '#!'));
$sponsor3_url = filter_text_wpglobus(get_theme_mod('municipality_footer_education_platform_sponsor3_url', '#!'));
$sponsor4_url = filter_text_wpglobus(get_theme_mod('municipality_footer_education_platform_sponsor4_url', '#!'));
?>
<?php
$home_url = site_url();

if (is_page(['plataforma-de-treinamentu', 'kona-ba-plataforma-treinamentu'])) {
    $home_url = site_url() . "/plataforma-de-treinamentu";
}

if (is_page(['plataforma-de-treinamentu', 'kona-ba-plataforma-treinamentu'])) {
    $menu_logo = get_theme_mod('municipality_education_platform_logo');
    if ($menu_logo == null) {
        $menu_logo = get_stylesheet_directory_uri() . '/assets/img/municipality_01.png';
    }
}


?>

<!-- Footer -->
<footer style="background-color: #960807e6">
    <div class="container py-5">
        <div class="row py-4">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!--                <img src="--><? //= $menu_logo ?><!--" alt="" width="180" class="mb-3">-->
                <h4 class="text-white"><?= filter_text_wpglobus(get_theme_mod('municipality_address_entity_name', 'Ministério da Administração Estatal')) ?></h4>
                <p class="text-white">
                    <?= filter_text_wpglobus(get_theme_mod('municipality_address_entity_address', 'Rua 20 de Maio, nº43, Dili, Timor-Leste')) ?>
                    <br>
                    <?= filter_text_wpglobus(get_theme_mod('municipality_address_entity_phone', '(+670) 333 9077')) ?>
                    <br>
                    <?= filter_text_wpglobus(get_theme_mod('municipality_address_entity_email', 'portalmunicipal.mae@gmail.com')) ?>
                    <br>
                </p>
                <!--                <ul class="list-inline mt-4">-->
                <!--                    <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i-->
                <!--                                    class="fa fa-twitter"></i></a></li>-->
                <!--                    <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i-->
                <!--                                    class="fa fa-facebook"></i></a></li>-->
                <!--                    <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i-->
                <!--                                    class="fa fa-instagram"></i></a></li>-->
                <!--                    <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i-->
                <!--                                    class="fa fa-pinterest"></i></a></li>-->
                <!--                    <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i-->
                <!--                                    class="fa fa-vimeo"></i></a></li>-->
                <!--                </ul>-->
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold text-white mb-4"><?= lang('External Link') ?></h6>
                <?php get_menu_training_platform_external_links(); ?>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4 text-white"><?= lang('Legal') ?></h6>
                <?php get_menu_training_platform_legal_links(); ?>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4 text-white"><?= lang('Sponsors') ?></h6>
                <div class="p-1 rounded">
                    <ul class="list-unstyled list-inline sponsors text-left">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-fb mx-1" href="<?= $sponsor1_url ?>">
                                <?php
                                if ($sponsor1_img) {
                                    ?>
                                    <img class="sponsors-logo" alt="" src="<?= $sponsor1_img ?>">
                                    <?php
                                }

                                ?>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-tw mx-1" href="<?= $sponsor2_url ?>">
                                <?php
                                if ($sponsor2_img) {
                                    ?>
                                    <img class="sponsors-logo" alt="" src="<?= $sponsor2_img ?>">
                                    <?php
                                }
                                ?>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-gplus mx-1"
                               href="<?= $sponsor3_url ?>">
                                <?php
                                if ($sponsor3_img) {
                                    ?>
                                    <img class="sponsors-logo" alt="" src="<?= $sponsor3_img ?>">
                                    <?php
                                }
                                ?>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-li mx-1" href="<?= $sponsor4_url ?>">
                                <?php
                                if ($sponsor4_img) {
                                    ?>
                                    <img class="sponsors-logo" alt="" src="<?= $sponsor4_img ?>">
                                    <?php
                                } ?>

                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyrights -->
    <div class="bg-red py-4">
        <div class="container text-center">
            <p class="text-white mb-0 py-2">
                © <?= date('Y') ?> <span
                        class="font-weight-bold">Ministério da Administração Estatal de Timor-Leste</span>. All
                Rights Reserved.
            </p>
        </div>
    </div>
</footer>
<!-- End -->

<script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/jquery.min.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/popper.min.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/wow.js' ?>"></script>

<script src="<?php echo get_stylesheet_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js' ?>"></script>
<!--    <script src="--><?php //echo get_stylesheet_directory_uri() . '/assets/vendor/purecounter/purecounter.js' ?><!--"></script>-->
<script src="<?php echo get_stylesheet_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js' ?>"></script>
<!--<script src='https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js'></script>-->
<!--<script src='https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js'></script>-->
<h1><?= get_general_setting('setting_api_coursera_access_code') ?></h1>


<script>
    $(document).ready(function () {

        $('#hero-carousel').carousel({
            // interval: 10000,
        })
        new WOW().init();
        const glightbox = GLightbox({
            selector: '.glightbox'
        });

        /**
         * Init swiper slider with 1 slide at once in desktop view
         */
        new Swiper('.slides-why-us', {
            speed: 600,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            slidesPerView: 'auto',
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });

        $(window).scroll(function () {

            if ($(this).scrollTop() > 100) {

                $('#scrollUp').fadeIn();
                $(".front-lang-switcher").addClass("bg-red");
                $(".fixed-top").addClass("bg-red");
            } else {
                $('#scrollUp').fadeOut();
                $(".front-lang-switcher").removeClass("bg-red");
                $(".fixed-top").removeClass("bg-red");
            }
        });
        // scroll body to 0px on click
        $('#scrollUp').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 300);
            return false;
        });

        /*

                $(".btn-view-course-details").on("click", function () {
                    // alert("It's just a sample data, not from coursera");
                    var iframe = $("#modal_iframe");
                    $("#modal-iframe .modal-title").html("<a href='" + $(this).data("src") + "' target='_blank'>Click here to view in new page</a>");
                    iframe.attr("src", $(this).data("src"));
                    $("#modal-iframe").modal("show");
                });

                $(".btn-join-now").on("click", function () {
                    //window.location.href = '<?php //echo home_url(); ?>///authentication';
            window.location.href = '<?php echo home_url(); ?>/plataforma-de-treinamentu/mooc';
            // $("#modal-sso-login").modal();
        })
*/

        function getAccessToken() {
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'post',
                data: {action: 'get_last_access_token', id: 1},
                success: function (data) {
                    console.log(data);
                }
            });
        }//getLastAccessToken

        function saveAccessToken(access_token) {
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'post',
                data: {action: 'add_new_access_token', access_token: access_token},
                success: function (data) {

                }
            });
        }//getLastAccessToken

        // getNewAccessToken();

        function getNewAccessToken() {
            let data = {
                'grant_type': 'refresh_token',
                'refresh_token': "<?=get_general_setting('setting_api_coursera_refresh_token')?>",
                'client_id': "<?=get_general_setting('setting_api_coursera_client_id')?>",
                'client_secret': "<?=get_general_setting('setting_api_coursera_client_secret')?>",
            };

            $.ajax({
                type: "POST",
                url: "https://accounts.coursera.org/oauth2/v1/token",
                crossDomain: true,
                data: data,
                dataType: 'json',
                success: function (result, status, xhr) {
                    console.log(result);
                    //saveAccessToken();
                    listPrograms(result.access_token);
                },
                error: function (xhr, status, error) {
                    console.log(xhr, status, error);
                }
            });
        }//getNewAccessToken


        function listPrograms(access_token) {
            let program_id = "<?=get_general_setting('setting_api_coursera_program_id') ?>";
            let api_url = "https://api.coursera.org/api/businesses.v1/" + program_id + "/programs";

            $.ajax({
                type: "POST",
                url: api_url,
                crossDomain: true,
                headers: {
                    Authorization: 'Bearer ' + access_token
                },
                dataType: 'json',
                success: function (result, status, xhr) {
                    console.log(result);
                },
                error: function (xhr, status, error) {
                    console.log(xhr, status, error);
                }
            });

        }//listPrograms


        function get_access_token_and_refresh_token() {
            let url_token = 'https://accounts.coursera.org/oauth2/v1/token';
            let redirect_uri = 'http://localhost:9876/callback';
            let client_id = 'lGnU9BpQKKc5FWVmz7PjQQ';
            let client_secret = 'j4nPpIe7LOUgx_CSz_be5Q';
            let access_type = 'offline';
            let grant_type = 'authorization_code';
            let one_time_code = '27IP5dxtf5Z0rjez_OvxRlrrY4iu8-xCPANptgyHXlc';

            let data = {
                'redirect_uri': redirect_uri,
                'client_id': client_id,
                'client_secret': client_secret,
                'Access_type': access_type,
                'grant_type': grant_type,
                'code': one_time_code,
            };


        }

        /!* BEGIN ABOUT *!/
        let bgimg = "<?=lang_code() ?>";
        let asset_path = "<?php //echo get_stylesheet_directory_uri()?>";
        //  alert("images/About-section_"+bgimg+".jpg");
        $("#modal-about .head_bg").css('background-image', 'url("' + asset_path + '/assets/img/About-section_' + bgimg + '.jpg")');
        $("#modal-faq .head_bg").css('background-image', 'url("' + asset_path + '/assets/img/About-section_' + bgimg + '.jpg")');

        /!* END ABOUT *!/
        /*
                // BEGIN FAQ
                $.ajax({
                    url: "<?php // echo api_url(); ?>/" + bgimg + "/faqs",
            type: "get",
            success: function (res) {
                $(".faqs-list-container").html(res);
            }
        });
        // END FAQ

        /!* BEGIN LIBRARY *!/
        //
        $("#btn-view-library").on("click", function () {
            loadLibrary();
        })

        $("body").on("click", "ul.download-list>li>a.active", function () {
            let counterHtmlItem = $(this).data("download-classname");
            download_lib_counter($(this).data("id"), counterHtmlItem);
        });

        function loadLibrary() {
            $.ajax({
                url: "<?php //echo api_url(); ?>/library-list",
                type: "get",
                success: function (res) {
                    $(".library-content").html(res);
                    $(".table-library").DataTable({
                        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
                    });

                    // $("#bibilioteca-container").removeClass("hide");
                    $("#modal-library").modal("show");
                }
            }).done(function () {
                hidePreLoader();
            });
        }

        function download_lib_counter(id, counterHtmlItemClassName) {
            // library-download-counter
            $.ajax({
                url: "<?php //echo api_url(); ?>/library-download-counter",
                type: "post",
                data: {id: id},
                success: function (res) {
                    console.log(res);
                    $("." + counterHtmlItemClassName).html(res.download_counter);
                }
            }).done(function () {
                hidePreLoader();
            });
        }

        /!* END LIBRARY *!/
        new WOW().init();
*/

        function showPreLoader() {
            $(".please-wait").css('display', 'block');
            $(".load-wrapper").css('opacity', 1);
        }

        function hidePreLoader() {
            $(".please-wait").css('display', 'none');
            $(".load-wrapper").css('opacity', 0);
        }

        function getDate() {
            let d = new Date();
            let datestring = d.getDate() + "-" + (d.getMonth() + 1) + "-" + d.getFullYear() + " " + d.getHours() + ":" + d.getMinutes();
            return (datestring.replace(':', '.'))

        } //getDate

        hidePreLoader();
        $(window).on('load', function () {
            hidePreLoader();
        });
    });

</script>

<?php wp_footer(); ?>
</body>
</html>
