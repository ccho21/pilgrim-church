<div class="card">
    <a href="<?php the_permalink(); ?>">
        <figure class="section__gallery-effect">
            <?php
            $gallery = get_post_gallery(get_the_ID(), false);
            $size = sizeof($gallery['src']);
            $galleryDate = new DateTime(get_field('gallery_date'));
            ?>
            <div class="section__gallery-img__box">
                <img class="" src="<?php echo $gallery['src'][0]; ?>"/>
            </div>

            <figcaption class="section__gallery-caption">
                <div class="section__gallery-caption__box">
                    <div class="section__gallery-content font__section-content text-capitalize">
                        <p><?php echo $galleryDate->format('F j, Y') ?></p>
                        <p><?php echo get_the_title(); ?></p>
                        <p><?php ?></p>
                    </div>
                    <div class="section__gallery-link font__xs text-capitalize">
                        View <?php echo $size; ?> More Photos >>
                    </div>
                </div>
            </figcaption>
        </figure>
    </a>
</div>
