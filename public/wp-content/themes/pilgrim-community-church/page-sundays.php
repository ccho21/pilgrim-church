<?php
get_header();
?>

<div class="section__bg" style="background-image: url(<?php echo get_theme_file_uri('/images/background-pattern.jpg') ?>);">

    <?php
    pageBanner(array(
        'title' => 'Sundays',
        'subtitle' => 'Pilgrim Community Church<br/>
                   211 Steeles Ave E<br>
                   North York, ON M2M 3Y6',
    ));
    ?>

    <!--    {{--LOCATION SECTION--}}-->
    <div class="container">
        <div class="section__margin">

            <!--            {{--OUR GATHERING SECTION--}}-->
            <h3 class="text-center font__section-title font__anton my-5"><span class="heading__line">OUR GATHERING</span>
            </h3>
            <div class="row mx-0">
                <table class="table">
                    <thead class="font__korean bg-dark text-center font__md">
                    <tr>
                        <td>예배</td>
                        <td>시간</td>
                        <td>장소</td>
                    </tr>
                    </thead>
                    <tbody class="text-dark text-center font__md">
                    <tr>
                        <td>교사 예배</td>
                        <td>주일 9:45</td>
                        <td>223호</td>
                    </tr>
                    <tr>
                        <td>주일 예배</td>
                        <td>주일 11:45</td>
                        <td>Chapel</td>
                    </tr>
                    <tr>
                        <td>BeLoVeD</td>
                        <td>주일 11:45pm</td>
                        <td>240호</td>
                    </tr>
                    <tr>
                        <td>Pilgrim Jr.</td>
                        <td>주일 11:45pm</td>
                        <td>223호, 224호</td>
                    </tr>
                    <tr>
                        <td>The Connection</td>
                        <td>금요일 8:00pm</td>
                        <td>Chapel</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="section__margin">
            <h3 class="text-center font__section-title font__anton my-5"><span class="heading__line">Location</span>
            </h3>
            <div class="row mx-0">
                <div class="col-sm-12 my-5">
                    <div class="container">
                        <div class="acf-map">
                            <?php
                            $googleLocation = new WP_Query(array(
                                'posts_per_page' => -1,
                                'post_type' => 'location',
                            ));

                            while ($googleLocation->have_posts()) {
                                $googleLocation->the_post();
                                $mapLocation = get_field('map_location');
                                ?>
                                <div class="marker text-dark" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng'] ?>">
                                    <a href="<?php echo get_the_permalink(); ?>" class="text-dark">
                                        <h3 class="text-dark"><?php echo get_the_title(); ?></h3></a>
                                    <?php echo $mapLocation['address'] ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="section__location font font__section-content mt-4 mt-md-0">
                        <div class="row mb-4">
                            <div class="col-1">
                                            <span class="section__location-icon">
                                                    <i class="fa fa-envelope highlight fontsize_16"></i>
                                                </span>
                            </div>
                            <div class="col-11">
                                            <span class="section__location-content">
                                                    <a href="mailto:your@mail.com"
                                                       class="font__section-content">pilgrim@pilgrimcommunity.com</a>
                                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="section__location font__section-content">
                        <div class="row mb-4">
                            <div class="col-1">
                                            <span class="section__location-icon">
                                                    <i class="fa fa-phone highlight fontsize_16"></i>
                                                </span>
                            </div>
                            <div class="col-11">
                                            <span class="section__location-content">
                                                    <span>+1) 123-456-7890</span>
                                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="section__location font__section-content">
                        <div class="row mb-4">
                            <div class="col-1">
                                            <span class="section__location-icon">
                                                    <i class="fa fa-map-marker highlight"></i>
                                                </span>

                            </div>
                            <div class="col-11">
                                            <span class="section__location-content">
                                                    211 Steeles Ave E, North York, ON M2M 3Y6
                                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="section__location font__section-content">
                        <div class="row mb-4">
                            <div class="col-1">
                                            <span class="section__location-icon">
                                                    <i class="far fa-clock"></i>
                                                </span>
                            </div>
                            <div class="col-11">
                                            <span class="section__location-content">
                                                    Sun 11:45
                                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


</div>
<?php get_footer();

?>
</div>
