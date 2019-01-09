<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/23/2018
 * Time: 10:57 PM
 */
get_header();
?>

<div class="section__bg" style="background-image: url(<?php echo get_theme_file_uri('/images/background-pattern.jpg') ?>);">
    <?php
    pageBanner(array(
        'title' => get_the_title(),
        'subtitle' => get_field('subtitle')
    ));

    while (have_posts()) {
        the_post();
        $today = date('Ymd');
        $eventStart = new DateTime(get_field('event_start'));
        $eventEnd = new DateTime(get_field('event_end'));
//        echo $today;
//        echo $eventStart->format('Ymd');
        ?>

        <div class="container px-3">
            <div class="section__margin">
                <div class="text-center text-white m-5 py-4 bg-dark">
                    <!--{{--Check event has passed or not--}}-->
                    <?php
                        if($today < $eventStart->format('Ymd')) {
                            echo '<h3 class="font__md">UPCOMING EVENT </h3>';
                        }
                        else {
                            echo '<h3 class="font__md">THIS EVENT HAS PASSED</h3>';
                        }
                    ?>
                </div>

                <div class="row p-0">
                    <div class="col-md-6 order-md-1">
                        <!--{{--When Event Start--}}-->
                        <div class="dash">
                            <div class="dash__num">START</div>
                            <div class="dash__long"></div>
                        </div>
                        <p class="mb-5 font__post-date">
                            <?php echo $eventStart->format('F j, Y') ?>
                            <br>
                            <?php echo $eventStart->format('g:i a') ?>
                        </p>

                        <!--{{--When Event End--}}-->
                        <div class="dash">
                            <div class="dash__num">END</div>
                            <div class="dash__long"></div>
                        </div>
                        <p class="mb-5 font__post-date">
                            <?php echo $eventEnd->format('F j, Y') ?>
                            <br>
                            <?php echo $eventEnd->format('g:i a') ?>
                        </p>
                        <!--{{--Location--}}-->
                        <div class="dash">
                            <div class="dash__num">LOCATION</div>
                            <div class="dash__long"></div>
                        </div>
                        <?php
                        $eventLocation = get_field('event_location');
                        ?>
                        <a class="mb-5 font__post-link d-block"
                           href="<?php echo 'https://www.google.ca/maps/place/' . $eventLocation['address'] ?>"
                           target="_blank">
                            <span>
                              <?php
                              echo $eventLocation['address'];
                              ?>
                            </span>
                            <div class="font__md mt-4">
                                GET DIRECTION >>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 order-md-0">
                        <!--{{--Details--}}-->
                        <div class="dash">
                            <div class="dash__num">DETAILS</div>
                            <div class="dash__long"></div>
                        </div>
                        <p class="mb-5 font__post font__post-content font__playfair font-italic mt-5">
                            <!--{{$event->body}}-->
                        </p>
                    </div>
                </div>

                <div class="container">
                    <a class="btn main__btn text-white bg-dark" href="<?php if( wp_get_referer()) echo wp_get_referer(); ?>"> < BACK TO LIST </a>
                </div>
            </div>
        </div>
    <?php }
    get_footer(); ?>
</div>
