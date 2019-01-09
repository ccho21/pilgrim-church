<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/22/2018
 * Time: 2:58 PM
 */

get_header();

?>

<div class="section__bg"
     style="background-image: url(<?php echo get_theme_file_uri('/images/background-pattern.jpg') ?>);">
    <?php
    while (have_posts()) {
        the_post();
        pageBanner(array(
            'title' => get_the_title(),
            'subtitle' => get_field('subtitle'),
        ));
        $galleryDate = new DateTime(get_field('gallery_date'));
        $gallery = get_post_gallery(get_the_ID(), false);
        $galleryID = explode(',', $gallery['ids']);
        ?>

        <div class="section__margin">
            <div class="container">

                <div class="row mx-0">
                    <div class="col-md-6 order-md-0">
                        <!--                    {{--Title--}}-->
                        <div class="dash">
                            <div class="dash__num">TITLE</div>
                            <div class="dash__long"></div>
                        </div>
                        <p class="mb-5 font__post font__post-title mt-5 text-capitalize">
                            <?php echo get_the_title(); ?>
                        </p>
                    </div>
                    <!--                {{--POST CREATED--}}-->
                    <div class="col-md-6 order-md-0">
                        <div class="dash">
                            <div class="dash__num">POSTED&nbsp;ON</div>
                            <div class="dash__long"></div>
                        </div>
                        <p class="mb-5 font__post-date"> <?php echo $galleryDate->format('F j, Y') ?></p>
                    </div>
                    <div class="col-md-12 order-md-1">
                        <!--                    {{--Details--}}-->
                        <div class="dash">
                            <div class="dash__num">DETAILS</div>
                            <div class="dash__long"></div>
                        </div>
                        <p class="mb-5 font__post font__post-content font__playfair font-italic mt-5">
                            <?php echo 'body content should be here' ?>
                        </p>
                    </div>

                </div>

                <div class="row mx-0">
                    <div class="col-sm-12">
                        <div class="dash">
                            <div class="dash__num">PHOTOS</div>
                            <div class="dash__long"></div>
                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="card-columns">


                            <?php
                            for ($i = 0; $i < count($gallery['src']); $i++) { ?>
                                <a href="#"
                                   class="gallery-carousel"
                                   data-toggle="modal"
                                   data-target=".bd-example-modal-lg"
                                   data-carousel-target=".carousel-item"
                                   data-id="<?php echo $galleryID[$i] ?>">
                                    <div class="card">
                                        <figure class="">
                                            <div class="section__gallery-img__box">
                                                <img class="" src="<?php echo $gallery['src'][$i]; ?>"/>
                                            </div>
                                        </figure>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                     aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <!-- CAROUSEL -->

                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">
                                    <?php
                                    for ($i = 0; $i < count($gallery['src']); $i++) { ?>
                                        <div class="carousel-item" data-slide="<?php echo $galleryID[$i] ?>">
                                            <img class="d-block w-100" src="<?php echo $gallery['src'][$i]; ?>">
                                        </div>
                                    <?php } ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!--                    {{--CAROUSEL ENDS--}}-->
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <p>
            <a href="{{route('list_photos')}}">Back to List</a>
        </p>


    <?php }

    get_footer();

    ?>

</div>
