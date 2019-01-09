<?php
get_header();
?>

<div class="section__bg"
     style="background-image: url(<?php echo get_theme_file_uri('/images/background-pattern.jpg') ?>);">
    <?php
    pageBanner(array(
        'title' => 'All Sermons',
        'subtitle' => 'this section needs to be changed',
    ));
    while (have_posts()) {
        the_post();  ?>
        <h3 class="text-center font__section-title my-5 font__anton"><span
                    class="heading__line"><?php echo get_the_title(); ?> Series</span></h3>
        <?php
    }

    wp_reset_postdata();
    $relatedSeries = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'sermon',
        'orderby' => 'title',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'related_series', // array();
                'compare' => 'LIKE',
                'value' => '"' . get_the_ID() . '"',
            )
        ),
    ));
    ?>

    <div class="section__margin">
        <div class="container">
            <?php
            while ($relatedSeries->have_posts()) {
                $relatedSeries->the_post();
                get_template_part('template-parts/content-sermon');
            }
            echo paginate_links();
            ?>
        </div>
    </div>
    <?php get_footer(); ?>
</div>