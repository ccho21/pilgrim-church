<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/28/2018
 * Time: 12:05 PM
 */
get_header();

?>

<!--CODE START-->
<div class="section__bg"
     style="background-image: url(<?php echo get_theme_file_uri('/images/background-pattern.jpg') ?>);">

    <?php
    pageBanner(array(
        'title' => 'Event Calendar',
        'subtitle' => 'See all the events at once.'
    ));
    ?>

    <div class="section__margin">
        <div class="container d-none d-md-block">
            <div class="row mx-0">
                <div class="col-md-12 d-none d-md-block mb-5">
                    <ul class="list-group list-unstyled  font__xl list flex-row justify-content-md-end align-items-md-center">
                        <li class="mr-3">
                            <a href="<?php echo esc_url(site_url('/events'))?>" class="d-block font__pilgrim-dark">
                                <i class="fas fa-list"></i>
                                <strong class="font__xs">LIST</strong>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo esc_url(site_url('/event-calendar')) ?>" class="d-block font__pilgrim-dark">
                                <i class="far fa-calendar-alt"></i>
                                <strong class="font__xs">CALENDAR</strong>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="panel panel-default text-black">
<!--                --><?php
//                $today = date('Ymd');
//                $pastEvents = new WP_query(array(
//                    'paged' => get_query_var('paged', 1),
//                    'post_type' => 'event',
//                    'meta_key' => 'event_start',
//                    'meta_query' => array(
//                        array(
//                            'key' => 'event_start',
//                            'compare' => '<',
//                            'value' => $today,
//                            'type' => 'DATETIME'
//                        )
//                    ),
//                ));
//                while ($pastEvents->have_posts()) {
//                    $pastEvents->the_post();
//                    print_r($pastEvents->get_posts());
//
//                }
//                ?>

                <div id="calendar"></div>
            </div>
        </div>

        <div class="container mt-5">
            <a class="btn main__btn text-white bg-dark" href="{{route('list_events')}}"> < VIEW LIST EVENT </a>
        </div>
    </div>
    <?php get_footer(); ?>
</div>