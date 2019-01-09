<div class="card">
    <a href="<?php the_permalink(); ?>">
        <figure class="section__gallery-effect">
            <div class="section__gallery-img__box">
                <?php the_post_thumbnail('pastorPortrait'); ?>
            </div>
            <figcaption class="section__gallery-caption">
                <div class="section__gallery-caption__box">
                    <div class="section__gallery-content font__section-content text-capitalize">
                        <p>SERIES</p>
                        <p><?php echo get_the_title(); ?></p>
                    </div>
                    <div class="section__gallery-link font__xs text-capitalize">
                        View All >>
                    </div>
                </div>
            </figcaption>
        </figure>
    </a>
</div>
