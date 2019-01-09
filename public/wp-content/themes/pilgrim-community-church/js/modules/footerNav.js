import $ from 'jquery';

class FooterNav {
    constructor() {
        // console.log('footer nav dropdown working!');

        this.footerBtn = $('.footer__btn');
        this.footerLogo = $('.footer__content-box-logo');
        this.siteURL = pilgrimChurchData.image_path;

        this.event();
    }

    event() {
        //footer collapse
        this.footerBtn.on('show.bs.collapse', this.footerOpenDropDown);
        this.footerBtn.on('hide.bs.collapse', this.footerCloseDropDown);

        //footer Logo Hover
        this.footerLogo.hover((e) => {
            let image = $(e.currentTarget).children('img');
            image.attr('src', this.siteURL + '/letter-logo-white.png');
        }, (e) => {
            let image = $(e.currentTarget).children('img');
            image.attr('src', this.siteURL + '/letter-logo-grey.png');
        });
    }

    // method
    footerOpenDropDown(e) {
        console.log('footer open dropdown');
        let target = $(this);
        target.css({
            backgroundColor: '#1c1c1c'
        });
        target.parent().find('.fa-plus').css({
            transform: 'rotate(135deg)'
        });
        target.slideDown(200);
    }

    footerCloseDropDown(e) {
        console.log('footer close dropdown');

        let target = $(this);
        target.parent().find('.fa-plus').css({
            transform: 'rotate(0)'
        });
        target.slideUp(200);

    }

}

export default FooterNav;