<!-- card -->
<article class="hero__row__card">
    <!-- image -->
    <div class="hero__row__card__image">
        <a rel="nofollow noreferrer noopener" href="<?php the_field('behance'); ?>" title="Projeto <?= get_the_title() . ' - ' . SITE['name']; ?>"  target="_blank">
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="Projeto <?= get_the_title() . ' - ' . SITE['name']; ?>" loading="lazy">
        </a>
    </div>
    <!-- end of image -->

    <!-- content -->
    <div class="hero__row__card__content">
        <!-- header -->
        <header class="hero__row__card__content__header">
            <h3>
                <a rel="nofollow noreferrer noopener" href="<?php the_field('behance'); ?>" title="Projeto <?= get_the_title() . ' - ' . SITE['name']; ?>"  target="_blank">
                    <?= get_the_title(); ?>
                </a>
            </h3>
        </header>
        <!-- end of header -->

        <!-- body -->
        <div class="hero__row__card__content__body">
            <p><?php the_field('description'); ?></p>
        </div>
        <!-- end of body -->
    </div>
    <!-- end of content -->
</article>
<!-- end of card -->