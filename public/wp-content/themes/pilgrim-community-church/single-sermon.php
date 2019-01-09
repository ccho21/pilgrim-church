<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/23/2018
 * Time: 10:57 PM
 */
get_header();
?>

<div class="section__bg">
    <?php
    pageBanner(array(
        'title' => 'All Events',
        'subtitle' => 'All are welcome, and we would live to see you',
    ));

    while (have_posts()) {
        the_post();
        $sermonDate = new DateTime(get_field('sermon_date'));

        $youTubeURL = get_field('sermon_url');
            echo $youTubeURL;
        ?>

        <div class="section__margin">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 m-3">
                        <iframe class="youtube-video"
                                src="https://www.youtube.com/embed/<?php echo $youTubeURL ?>">
                        </iframe>
                    </div>
                </div>
                <div class="row mx-0">
                    <div class="col-md-6 order-md-0">
                        <!--{{--Title--}}-->
                        <div class="dash">
                            <div class="dash__num">TITLE</div>
                            <div class="dash__long"></div>
                        </div>
                        <p class="mb-5 font__post font__post-title mb-5 text-capitalize">
                            <?php echo get_the_title(); ?>
                        </p>
                    </div>
                    <div class="col-md-6 order-md-0">
                        <div class="dash">
                            <div class="dash__num">DATE</div>
                            <div class="dash__long"></div>
                        </div>
                        <p class="mb-5 font__post-date"> <?php echo $sermonDate->format('F j, Y') ?></p>
                    </div>
                    <div class="col-md-6 order-md-0">
                        <div class="dash">
                            <div class="dash__num">VERSE</div>
                            <div class="dash__long"></div>
                        </div>
                        <p class="mb-5 font__post font__post-content"> <?php echo get_field('verse'); ?></p>
                    </div>
                    <div class="col-md-6 order-md-0">
                        <div class="dash">
                            <div class="dash__num">PREACHER</div>
                            <div class="dash__long"></div>
                        </div>
                        <p class="mb-5 font__post font__post-content"> <?php
                            $relatedPastor = get_field('preacher');
                            foreach ($relatedPastor as $pastor) { ?>
                                <?php echo get_the_title($pastor) ?></span>
                            <?php } ?>
                        </p>
                    </div>
                    <div class="col-md-6 order-md-0">
                        <div class="dash">
                            <div class="dash__num">SERIES</div>
                            <div class="dash__long"></div>
                        </div>
                        <p class="mb-5 font__post font__post-content"> <?php
                            $relatedSeries = get_field('related_series');
                            foreach ($relatedSeries as $sermon) { ?>
                                <?php echo get_the_title($sermon) ?>
                                <span class="float-right"> <a href="<?php echo esc_url(site_url('/series/'.get_the_title($sermon).'/')) ?>" class="text-black-50">전체시리즈 보기 >></a>  </span>

                            <?php } ?>

                        </p>
                    </div>

                    <div class="col-md-12 order-md-1">
                        <!--{{--Details--}}-->
                        <div class="dash">
                            <div class="dash__num">DETAILS</div>
                            <div class="dash__long"></div>
                        </div>
                        <p class="mb-5 font__post font__post-content font__playfair font-italic mb-5">
                            <?php echo get_the_content(); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    get_footer(); ?>
</div>
