<?php
get_header();
?>

<div class="section__bg" style="background-image: url(<?php echo get_theme_file_uri('/images/background-pattern.jpg') ?>);">

    <?php
    pageBanner(array(
        'title' => 'Contact Us',
        'subtitle' => 'Pilgrim Community Church<br/>
                   211 Steeles Ave E<br>
                   North York, ON M2M 3Y6',
    ));
    ?>

    <div class="container">
        <div class="section__margin">

        <!--        {{--CONTACT--}}-->
        <div class="section__margin">
            <h3 class="text-center font__section-title my-5 font__anton"><span class="heading__line">Contact</span>
            </h3>
            <div class="row">
                <div class="col-md-12" data-animation="">
                    <form class="row" method="post" action="./">
                        <div class="col-sm-12 m-3">
                            <div class="contact__form">
                                <label for="" class="contact__form-label font__section-content ">Name : </label>
                                <input type="text"
                                       class="contact__form contact__form-input form-control font__section-content h-100"
                                       aria-required="true" size="30" value="" name="name" id="name">
                            </div>
                        </div>
                        <div class="col-sm-12 m-3">
                            <div class="contact__form">
                                <label for="" class="contact__form contact__form-label font__section-content">Email
                                    :
                                </label>
                                <input class="contact__form contact__form-input form-control font__section-content h-100"
                                       type="email"
                                       aria-required="true" size="30" value="" name="email" id="email">
                            </div>
                        </div>
                        <div class="col-sm-12 m-3">
                            <div class="contact__form">
                                <label for="subject"
                                       class="contact__form contact__form-label font__section-content">Title :
                                </label>
                                <input class="contact__form contact__form-input form-control font__section-content form-control h-100"
                                       type="text"
                                       aria-required="true" size="30" value="" name="subject" id="subject">
                            </div>
                        </div>
                        <div class="col-sm-12 m-3">

                            <div class="contact__form">
                                <label for="message" class="font__section-content">Message</label>
                                <textarea class="contact__form-text form-control font__section-content"
                                          aria-required="true" rows="9"
                                          cols="45" name="message" id="message" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 m-3">
                            <div class="contact-form-submit topmargin_10">
                                <button type="submit" id="contact_form_submit " name="contact_submit"
                                        class="send__form">
                                    Send Form
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
            <!--.row -->
        </div>

    </div>


</div>
<?php get_footer();

?>
</div>
