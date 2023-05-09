<?php
/*
  Template Name: Balkaun Úniku Page - Inner page
 */
include "balkaun_uniku_header.php";
?>

<main id="main">
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url(<?= $hero_background_image?>);">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">

                    <div class="col-lg-12 text-center">
                        <h2><?= the_title() ?></h2>
                        <p><?= the_excerpt() ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php get_balkaun_uniku_breadcrumb(); ?>
    </div>
    <section>
        <div class="container">
            <div class="content">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        ?>
                        <div class="text-justify">
                            <?php the_content(); ?>
                        </div>
                        <?php
                    }
                }

                ?>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php
include "balkaun_uniku_footer.php";
