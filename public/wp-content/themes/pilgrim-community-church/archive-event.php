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
        'subtitle' => 'All are welcome, and we would live to see you',
    ));
    ?>

    <div class="section__margin">
        <div class="section__event">
            <div class="container">
                <div class="row align-items-md-center mx-0">
                    <div class="col-md-8">
                        <h2 class="font__section-title font__anton">UPCOMING EVENTS</h2>
                    </div>
                    <div class="col-md-4 d-none d-md-block">
                        <ul class="list-group list-unstyled  font__xl list flex-row justify-content-md-end align-items-md-center">
                            <li class="mr-3">
                                <a href="<?php echo esc_url(site_url('/events')) ?>" class="d-block font__pilgrim-dark">
                                    <i class="fas fa-list"></i>
                                    <strong class="font__xs">LIST</strong>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?php echo esc_url(site_url('/event-calendar')) ?>"
                                   class="d-block font__pilgrim-dark">
                                    <i class="far fa-calendar-alt"></i>
                                    <strong class="font__xs">CALENDAR</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php

                while (have_posts()) {
                    the_post();
                    $countPosts = $wp_query->current_post + 1;
                    ?>
                    <!-- EVENTS CONTENTS -->
                    <div class="row my-5 mx-0">
                        <div class="col-sm-12">
                            <div class="dash">
                                <div class="dash__num"><?php if($countPosts < 10){ echo '0'.$countPosts; } else { echo $countPosts;} ?></div>
                                <div class="dash__long"></div>
                            </div>
                        </div>
                        <?php get_template_part('template-parts/content-event'); ?>
                    </div>
                    <?php
                }
                echo paginate_links();
                ?>
            </div>
        </div>

        <div class="container">
            <a class="btn main__btn text-white bg-dark" href="<?php echo esc_url(site_url('/past-events')) ?>"> <
                Previous
                Events </a>
        </div>
    </div>


    <?php get_footer(); ?>
</div>