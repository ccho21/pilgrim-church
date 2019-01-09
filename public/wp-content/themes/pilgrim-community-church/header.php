<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/15/2018
 * Time: 1:57 PM
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Pilgrim Church</title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="">
    <nav class="navbar navbar-expand-md justify-content-between fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand logo" href="<?php echo site_url('/') ?>">
                <img src="<?php echo get_theme_file_uri('/images/letter-logo-white.png') ?>" class="main-content__logo"
                     alt="">
            </a>
            <ul class="navbar-toggler collapse__btn mt-3 px-4" id="collapse-toggle" data-toggle="collapse"
                data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
                <li></li>
                <li></li>
                <li></li>
                <li>close</li>
            </ul>
        </div>

        <div class="navbar-collapse collapse " id="navbarCollapse">
            <!--            {{--MOBILE VERSION ENDS--}}-->
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown font__top-nav">
                    <a id="navbarDropdownAbout" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span>About</span>
                        <div class="plus">
                            <div class="plusB plus1"></div>
                            <div class="plusB plus2"></div>
                        </div>
                    </a>
                    <div class="dropdown-menu font__top-dropdown" aria-labelledby="navbarDropdownAbout">
                        <a class="dropdown-item"
                           href="<?php echo esc_url(site_url('/who-we-are')) ?>"><span>Who we are</span></a>
                        <a class="dropdown-item" href="#"><span>Sundays</span></a>
                        <a class="dropdown-item"
                           href="<?php echo esc_url(site_url('/leadership')) ?>"><span>Leadership</span></a>
                        <a class="dropdown-item"
                           href="<?php echo esc_url(site_url('/contact-us'))?>"><span>Contact us</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown font__top-nav">
                    <a id="navbarDropdownAbout" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span>Ministries</span>
                        <div class="plus">
                            <div class="plusB plus1"></div>
                            <div class="plusB plus2"></div>
                        </div>
                    </a>
                    <div class="dropdown-menu font__top-dropdown" aria-labelledby="navbarDropdownAbout">
                        <a class="dropdown-item" href="{{route('whoweare')}}"><span>Pilcom</span></a>
                    </div>

                </li>
                <li class="nav-item dropdown font__top-nav">
                    <a id="navbarDropdownAbout" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span>Education</span>
                        <div class="plus">
                            <div class="plusB plus1"></div>
                            <div class="plusB plus2"></div>
                        </div>
                    </a>
                    <div class="dropdown-menu font__top-dropdown" aria-labelledby="navbarDropdownAbout">
                        <a class="dropdown-item" href="#"><span>Pilgrim Jr</span></a>
                        <a class="dropdown-item" href="#"><span>Pilgrim BLVD</span></a>
                    </div>

                </li>
                <li class="nav-item font__top-nav">
                    <a href="<?php echo esc_url(site_url('/events')) ?>" class="nav-link">
                        <span>events</span>
                    </a>
                </li>
                <li class="nav-item dropdown font__top-nav">
                    <a id="navbarDropdownAbout" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span>Resources</span>
                        <div class="plus">
                            <div class="plusB plus1"></div>
                            <div class="plusB plus2"></div>
                        </div>
                    </a>
                    <div class="dropdown-menu font__top-dropdown" aria-labelledby="navbarDropdownAbout">
                        <a href="<?php echo esc_url(site_url('/series')) ?>" class="dropdown-item">
                            <span>Series</span>
                        </a>
                        <a class="dropdown-item" href="<?php echo esc_url(site_url('/sermons')) ?>"><span>Sermons</span>
                        </a>
                        <a href="<?php echo esc_url(site_url('/galleries')) ?>" class="dropdown-item">
                            <span>Gallery</span>
                        </a>

                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div id="list-example"
     class="list-group bottom-nav d-md-flex fixed-bottom flex-row text-center text-white-50 w-75 m-auto d-none">
    <a class="list-group-item list-group-item-action" href="#main__page">Pilgrim Church</a>
    <a class="list-group-item list-group-item-action" href="#info__page">Sunday</a>
    <a class="list-group-item list-group-item-action" href="#event__page">Event</a>
</div>