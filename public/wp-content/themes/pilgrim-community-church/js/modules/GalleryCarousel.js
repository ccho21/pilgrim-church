import $ from 'jquery';

class GalleryCarousel {
    constructor() {
        this.galleryCarousel = $('.gallery-carousel');
        this.myModal = $('#myModal');
        console.log('working??');
        this.event();
    }

    event() {
        this.galleryCarousel.on('click', this.openCarousel.bind(this));
        this.myModal.on('hidden.bs.modal', this.closeCarousel.bind(this));
    }

    // method
    openCarousel(e) {
        console.log('carousel open event start');
        let clickedID = $(e.currentTarget).attr('data-id');
        let targetedGallery = $(`${this.galleryCarousel.attr('data-carousel-target')}[data-slide="${clickedID}"]`);
        $(targetedGallery).addClass('active');
    }
    closeCarousel(e) {
        console.log('carousel close event start');
        let targetedGallery = $(this.galleryCarousel.attr('data-carousel-target'));
        $(targetedGallery).removeClass('active');
    }
}

export default GalleryCarousel;