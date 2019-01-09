<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/21/2018
 * Time: 1:45 PM
 */
get_header();
?>

<!--CODE START-->
<div class="section__bg"
     style="background-image: url(<?php echo get_theme_file_uri('/images/background-pattern.jpg') ?>);">

    <?php
    pageBanner(array(
        'title' => 'All Series',
        'subtitle' => 'Find all the series',
    ));
    ?>

    <div class="section__margin">
        <div class="container-fluid">
            <div class="row mx-0 justify-content-center">

                <h2 class="font__section-title font__anton mb-5">Series</h2>
                <div class="section__gallery">
                    <div class="card-columns">
                        <?php
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/content-series');
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