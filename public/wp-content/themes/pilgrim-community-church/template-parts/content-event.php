<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/21/2018
 * Time: 2:00 PM
 */
?>

<!-- EVENTS CONTENTS -->
<!--<div class="row my-5 mx-0">-->
<!--    <div class="col-sm-12">-->
<!--        <div class="dash">-->
<!--            <div class="dash__num">--><?php //echo $wp_query->current_post + 1; ?><!--</div>-->
<!--            <div class="dash__long"></div>-->
<!--        </div>-->
<!--    </div>-->

    <?php
    $eventStart = new DateTime(get_field('event_start'));
    $eventEnd = new DateTime(get_field('event_end'));
    ?>
    <!--                {{--EVENT DATE --}}-->
    <div class="col-md-1 d-none d-lg-block">
        <div class="section__event font__section-event">
            <div class="font__section-event__month">
                <?php echo $eventStart->format('M') ?>
            </div>
            <div class="section__event-line">

            </div>
            <div class="font__section-event__date">
                <?php echo $eventStart->format('d') ?>
            </div>
        </div>
    </div>

    <div class="col-lg-5 col-md-12 mb-4">
        <div class="">
            <a href="<?php the_permalink(); ?>"
               class="section__event-thumbnail">
                <?php the_post_thumbnail('eventLandscape'); ?>
                <span class="text-white">VIEW DETAIL >></span>
            </a>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <h2 class="font__post font__post-title"><?php echo get_the_title(); ?></h2>
        <div class="font__post font__post-date">
            <span>
                <?php echo $eventStart->format('F j, g:i a');
                echo ' ㅡ ';
                echo $eventEnd->format('F j, g:i a');
                ?>
            </span>
        </div>

        <div class="section__event-body font__post font__post-content font__playfair font-italic">
            <p><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                } else {
                    echo wp_trim_words(get_the_content(), 18);
                } ?>
                <br>
                <a class="font__post font__post-link"
                   href="<?php echo get_the_permalink(); ?>">View Event Details
                    <span>>></span></a>
        </div>

    </div>
<!--</div>-->