<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/19/2018
 * Time: 4:49 PM
 */
?>

<?php
get_header();
?>
<main id="one-page-scroll">
    <div id="loading">
        <div class="logo-container">
            <div class="logo-container__background">
                <img src="<?php echo get_theme_file_uri('/images/letter-logo-white.png') ?>">
            </div>
        </div>
    </div>
    <div data-offset="500" class="scrollspy" id="p-scrollspy">
        <section class="front-page front-page__main" id="main__page"
                 style="background-image: url(<?php echo get_theme_file_uri('/images/pilgrim-main.jpg') ?>);">

            <div class="main-content__box movingLetter">
                <div class="row mx-0 mb-5">
                    <h1>
                        <span class="font font__main d-flex justify-content-center">Pilgrim</span>
                        <span class="font font__sub">Community Church</span>
                    </h1>
                </div>
                <div class="row mx-0 main-content__box-link">
                    <div class="col-sm-12 d-flex justify-content-center">
                        <a href="<?php echo esc_url(site_url('/sundays'))?>" class="btn main__btn font__sm" role="button">Visit Us This weekend</a>
                    </div>
                </div>
            </div>

            <div class="mobile__page-scroll">
                <div class="mobile__page-scroll__box">
                    <div class="mobile__page-scroll__up">
                        UP
                    </div>
                    <div class=""><span class="">1 — 3</span></div>

                    <div class="mobile__page-scroll__down">
                        DOWN
                    </div>
                </div>
            </div>
        </section>

        <section class="front-page front-page__info" id="info__page"
                 style="background-image: url(<?php echo get_theme_file_uri('/images/temp-main1.jpg') ?>);">

            <div class="main-content__box">
                <div class="row mb-5 justify-content-md-center">
                    <h2 class="font font__heading-main font__anton" id="WrappingSpan"> Our church gathers
                        on
                        Sundays at 11:45am
                    </h2>
                    <h3 class="font font__heading-sub font__serif"> All are welcome, and we would love to see you.</h3>
                </div>
                <div class="row mt-5 main-content__box-link">
                    <div class="col-sm-12 d-flex justify-content-center">
                        <a href="<?php echo esc_url(site_url('/sundays'))?>" class="btn main__link font__sm">More Info</a>
                    </div>
                </div>
            </div>

            <div class="mobile__page-scroll">
                <div class="mobile__page-scroll__box">
                    <div class="mobile__page-scroll__up">
                        UP
                    </div>
                    <div class=""><span class="">2 — 3</span></div>

                    <div class="mobile__page-scroll__down">
                        DOWN
                    </div>
                </div>
            </div>
        </section>

        <section class="front-page front-page__event section" id="event__page"
                 style="background-image: url(<?php echo get_theme_file_uri('/images/temp-main4.jpg') ?>);">
            <div class="main-content__box ">
                <div class="row mx-0 mb-5">
                    <h2 class="font font__heading-main font__anton">
                        Join us at any one of our
                        many
                        events.
                    </h2>
                </div>
                <div class="row mx-0 main-content__box-link">
                    <div class="col-sm-12 d-flex justify-content-center">
                        <a href="<?php echo esc_url(site_url('/events'))?>" class="btn main__link font__sm">VIEW OUR EVENT</a>
                    </div>
                </div>
            </div>

            <div class="mobile__page-scroll">
                <div class="mobile__page-scroll__box">
                    <div class="mobile__page-scroll__up">
                        UP
                    </div>
                    <div class=""><span class="">3 — 3</span></div>

                    <div class="mobile__page-scroll__down">
                        DOWN
                    </div>
                </div>
            </div>
        </section>
    </div>

</main>

<?php wp_footer(); ?>
