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
        'title' => 'Past Events',
        'subtitle' => 'A recap of our past events.'
    ));

    ?>

    <div class="section__margin">
        <div class="section__event">
            <div class="container">
                <?php
                $today = date('Ymd');
                $pastEvents = new WP_query(array(
                    'paged' => get_query_var('paged', 1),
                    'posts_per_page' => 5,
                    'post_type' => 'event',
                    'meta_key' => 'event_start',
                    'orderby' => 'meta_value',
                    'order' => 'DSC',
                    'meta_query' => array(
                        array(
                            'key' => 'event_start',
                            'compare' => '<',
                            'value' => $today,
                            'type' => 'DATETIME'
                        )
                    ),
                ));
                while ($pastEvents->have_posts()) {
                    $pastEvents->the_post();
                    $countPosts = $pastEvents->current_post + 1;
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
                echo paginate_links(array(
                    'total' => $pastEvents->max_num_pages,
                ));
                ?>
            </div>
        </div>

        <div class="container">
            <a class="btn main__btn text-white bg-dark" href="<?php echo esc_url(site_url('/events')) ?>"> <<
                Upcoiming Events </a>
        </div>
    </div>


    <?php get_footer(); ?>
</div>
