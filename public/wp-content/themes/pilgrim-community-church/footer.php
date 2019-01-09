<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/15/2018
 * Time: 1:57 PM
 */
?>

<footer class="w-100">
    <div class="accordion" id="accordionExample">
        <div class="card footer__nav">
            <div class="card-header footer__nav-header" id="headingOne">
                <h5 class="mb-0 d-flex align-items-center justify-content-between">
                    <button class="btn btn-link font__md text-white w-100 text-left collapsed font__decoration-none font__bold"
                            type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="false" aria-controls="collapseOne">
                        SUNDAYS
                    </button>
                    <i class="fas fa-plus font__sm text-white"></i>
                </h5>
            </div>

            <div id="collapseOne" class="collapse footer__btn" aria-labelledby="headingOne"
                 data-parent="#accordionExample">
                <div class="card-body">
                    <div class="footer__nav-content">
                        <div class="text-white-50">
                        <span class="font__md">
                            Sunday Gathering at 11:45am
                        </span>
                            <div class="my-3 footer__nav-address">
                            <span href="#" class="text-white-50">
                                Pilgrim Community Church<br>
                                211 Steeles Ave E <br>
                                North York, ON M2M 3Y6<br>
                            </span>
                                <a class="btn main__btn my-3 font__sm" role="button">Get Directions </a>
                            </div>
                        </div>
                        <div class="text-white-50 footer__nav-mail">
                            <a href="mailto:" class="text-white">
                                <span>info@pilgrim.com </span>
                                <span>
                                <i class="fas fa-angle-right"></i>
                                <i class="fas fa-angle-right"></i>
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card footer__nav">
            <div class="card-header footer__nav-header" id="headingTwo">
                <h5 class="mb-0 d-flex align-items-center justify-content-between">
                    <button class="btn btn-link font__md text-white w-100 text-left collapsed font__decoration-none font__bold"
                            type="button" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                        SOCIAL
                    </button>
                    <i class="fas fa-plus font__sm text-white"></i>
                </h5>
            </div>

            <div id="collapseTwo" class="collapse footer__btn" aria-labelledby="headingTwo"
                 data-parent="#accordionExample">
                <div class="card-body">
                    <div class="footer__nav-content">
                        <div class="my-5">
                            You can also find us amongst a few social networks. <br>
                            Friend us, follow us, view our pics or
                            videos, <br>
                            and let us know who you are.
                        </div>
                        <ul class="footer__nav-social d-flex justify-content-start align-items-center">
                            <li><a href="#" target="_blank"><span><i class="fab fa-facebook-f"></i></span></a></li>
                            <li><a href="#" target="_blank"><span><i class="fab fa-instagram"></i></span></a></li>
                            <li><a href="#" class="naver" target="_blank">
                                    <div class="naver-box">
                                        <div class="naver__middle"><span>BAND</span></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__content" style="background-image: url(<?php echo get_theme_file_uri('/images/hotel-1.jpg') ?>);">
        <div class="footer__content-box">
            <div class="font__footer-title font__playfair mb-5 mt-5 font__italic">
                Helping the people of Toronto know Jesus, <br>grow in faith & go into the world equipped to serve.
            </div>
            <div class="footer__content-box-logo my-4">
                <img src="<?php echo get_theme_file_uri('/images/letter-logo-grey.png') ?>" class="footer__content-box-logo__img" alt="">
            </div>
            <div>
                <i class="far fa-copyright"></i>
                PILGRIM COMMUNITY CHURCH 2018
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>
