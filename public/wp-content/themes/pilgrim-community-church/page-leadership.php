<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/19/2018
 * Time: 11:14 PM
 */
?>

<?php
get_header();
?>

<div class="section__bg" style="background-image: url(<?php echo get_theme_file_uri('/images/background-pattern.jpg') ?>)";>
    <?php
    pageBanner();
    ?>

    <?php
    $pastors = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'pastor',
    ));
    ?>


    <div class="section__container">
        <div class="section__margin">
            <div class="container">
                <h2 class="text-center font__korean font-weight-bold font__section-title my-5"><span
                            class="heading__line">LEADERSHIP</span></h2>
                <?php
                while ($pastors->have_posts()) {
                $pastors->the_post();
                $count = $pastors->current_post + 1;
                ?>

                <article class="row mx-0">
                    <div class="col-sm-12">
                        <div class="dash">
                            <div class="dash__num"><?php if($count < 10){echo '0'.$count;} else {echo $count;} ?></div>
                            <div class="dash__long"></div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <div>
                            <?php the_post_thumbnail('pastorPortrait');?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3 class="font__section-sub__title"><?php echo get_the_title(); ?></h3>
                        <h4 class="font__section-sub__title"><?php echo get_field('paster_position') ?></h4>
                        <div class="font__section-content"><p><?php echo get_the_content(); ?></p>
                        </div>
                    </div>
                </article>
                <?php  } ?>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
</div>
