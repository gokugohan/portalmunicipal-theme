<?php
/*
  Template Name: Balkaun Úniku Page - Inner page
 */
include "balkaun_uniku_header.php";

$post_image_feature = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

if (has_post_thumbnail($post) && $post_image_feature != null) {
    $post_image_feature_url = $post_image_feature;
} else {
    $post_image_feature_url = show_default_background_image(); //get_template_directory_uri() . "/img/wave.png";
}

?>

<main id="main">
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url(<?= $post_image_feature?>);">
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
