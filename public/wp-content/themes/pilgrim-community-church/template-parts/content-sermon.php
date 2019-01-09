<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/22/2018
 * Time: 1:34 PM
 */
?>
<?php

?>


<div class="section__sermon my-5">
    <div class="row mx-0 mb-4">
        <div class="col-sm-12 col-lg-3 mb-5">
            <div class="section__sermon-thumb">
                <a href="<?php the_permalink();?>"
                   class="section__sermon-thumb__play">
                    <?php the_post_thumbnail('eventLandscape'); ?>
                    <div class="section__sermon-thumb__play-box">
                        <div class="section__sermon-thumb__play-icon"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-lg-8">
            <div class="section__sermon-details">
                <div class="col-sm-12">
                    <h2><a class="font__post font__post-title"
                           href="<?php the_permalink();?>">
                            <?php echo get_the_title(); ?></a></h2>
                </div>
                <div class="col-sm-12">
                    <div class="font__post font__post-content mb-3">
                        <?php echo get_field('verse') ?>
                    </div>
                </div>

                <div class="col-sm-12 d-md-flex flex-md-row mb-3 px-0">
                    <div class="col-md-4 font__post font__post-content">
                        <span class=""><i class="far fa-calendar-alt"></i></span>
                        <span class="px-3"><?php
                            $sermonDate = new DateTime(get_field('sermon_date'));
                            print_r($sermonDate->format('M j, Y'));
                            ?></span>
                    </div>
                    <div class="col-md-4 font__post font__post-content">
                        <span><i class="fas fa-user"></i></span>

                        <?php
                        $relatedPastor = get_field('preacher');
                        foreach($relatedPastor as $pastor) { ?>
                            <span class="px-3"><?php echo get_the_title($pastor) ?></span>
                        <?php } ?>

                    </div>
                    <div class="col-md-4 font__post font__post-content">
                        <span><i class="far fa-clock"></i></span>
                        <span class="px-3">11:45am</span>
                    </div>
                </div>

                <div class="col-sm-12 my-5 px-0">
                    <div class="font__post font__post-content d-md-flex align-content-center">
                        <a class="btn grey__btn font__sm m-2"
                           href="<?php the_permalink(); ?>">View Sermon
                            Detail</a>
                        <a class="btn grey__btn font__sm m-2"
                           href="<?php echo 'https://www.youtube.com/watch?v='.get_field('sermon_url') ?>" target="_blank">Watch Sermon on Youtube</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>