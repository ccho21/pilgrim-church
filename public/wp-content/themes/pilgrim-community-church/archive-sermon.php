<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/22/2018
 * Time: 1:34 PM
 */
get_header();
?>

<div class="section__bg" style="background-image: url(<?php echo get_theme_file_uri('/images/background-pattern.jpg') ?>);">
    <?php
    pageBanner(array(
        'title' => 'All Sermons',
        'subtitle' => 'this section needs to be changed',
    ))
    ?>

    <div class="section__margin">
        <div class="container">
<!--            @foreach($sermons as $sermon)-->
<!--            -->
            <?php
            while(have_posts()) {
                the_post();
                get_template_part('template-parts/content-sermon');
            }
            echo paginate_links();
            ?>
<!--            @endforeach-->
        </div>
    </div>
   <?php get_footer(); ?>
</div>