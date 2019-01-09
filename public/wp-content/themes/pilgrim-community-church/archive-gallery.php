<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/21/2018
 * Time: 1:45 PM
 */
get_header(); ?>

<!--CODE START-->
<div class="section__bg"
     style="background-image: url(<?php echo get_theme_file_uri('/images/background-pattern.jpg') ?>);">

    <?php
    pageBanner(array(
        'title' => 'All Events',
        'subtitle' => 'All are welcome, and we would love to see you',
    ));
    ?>

    <div class="section__margin">
        <div class="container-fluid">
            <div class="row mx-0 justify-content-center">

                <h2 class="font__section-title font__anton mb-5">Gallery</h2>
                <div class="section__gallery">
                    <div class="card-columns">
                        <?php
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/content-gallery');
                        }
                        echo paginate_links();
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php get_footer(); ?>
</div>