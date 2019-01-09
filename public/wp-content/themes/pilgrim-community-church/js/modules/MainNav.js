import $ from 'jquery';

class MainNav {
    constructor() {
        this.width = $(window).width();
        console.log('navigation dropdown working!');
        this.navItem = $('.nav-item');
        this.navbarCollapse = $('#navbarCollapse');
        this.siteURL = pilgrimChurchData.image_path;

        // start event method;
        this.event();
    }

    event() {
        if (!$('.scrollspy').is('#p-scrollspy')) {
            $('#list-example a').css('display', 'none');
        } else {

            $(".list-group-item").click(function () {
                let attr = $(this).attr("href");
                let scrollTop = $(attr).offset().top;
                $("html, body").animate({
                    scrollTop: scrollTop
                }, {
                    duration: 500,
                });
            });
        }
        $('.dropdown').hover(function () {
                if ($(window).width() >= 768) {
                    $(this).find('.dropdown-menu').stop(true, true).show();
                }
            },
            function () {
                if ($(window).width() >= 768) {
                    $(this).find('.dropdown-menu').stop(true, true).hide();
                }
            }
        );


        //mobile working
        if ($(window).width() <= 768) {
            this.navItem.on('show.bs.dropdown', this.openDropDown.bind(this));
            this.navItem.on('hide.bs.dropdown', this.closeDropDown.bind(this));
            this.navbarCollapse.on('show.bs.collapse', this.openNavCollapse.bind(this));
            this.navbarCollapse.on('hide.bs.collapse', this.closeNavCollapse.bind(this));



        }

    }

    // method
    openNavCollapse(e) {
        //e.preventDefault();
        let siteURL = this.siteURL;
        let target = $(e.currentTarget);
        let col = target.parent().find('.collapse__btn');
        target.parent().find('.main-content__logo').attr('src', siteURL + '/letter-logo-black.png');z
        target.addClass('mobile-collapse').fadeTo(200, 1, function () {
            $(col).addClass('open');
        });
    }

    closeNavCollapse(e) {
        let siteURL = this.siteURL;
        let target = $(e.currentTarget);

        target.parent().find('.main-content__logo').attr('src', siteURL + '/letter-logo-white.png');
        target.animate({opacity: 0}, 100, function () {
            let col = target.parent().find('.collapse__btn');
            target.removeClass('mobile-collapse');
            $(col).removeClass('open');
            target.hide();
        });
    }

    openDropDown(e) {
        let target = $(e.currentTarget);
        target.children('.nav-link').css({color: 'black'});
        target.find('.plus2').toggleClass('rotate');
        target.find('.dropdown-menu').css({backfaceVisibility: 'hidden'}).show(200);
    }
    closeDropDown(e) {
        let target = $(e.currentTarget);
        target.children('.nav-link').css({color: '#999'});
        target.children().find('.plus2').toggleClass('rotate');
        target.find('.dropdown-menu').hide(200);
    }


}

export default MainNav;