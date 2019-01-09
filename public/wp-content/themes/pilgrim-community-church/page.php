<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/19/2018
 * Time: 9:01 PM
 */
get_header();
?>

<div class="section__bg" style="background-image: url(<?php echo get_theme_file_uri('/images/background-pattern.jpg') ?>);">
    <?php
    pageBanner();
    echo 'this is page.php';
    ?>

    <?php
    while (have_posts()) {
        the_post();
        echo get_the_content();
    }
    ?>

    <?php get_footer(); ?>
</div>


