<!-- card -->
<article class="projects__container__behance__card">
    <!-- image -->
    <a rel="nofollow noreferrer noopener" href="<?php the_field('behance'); ?>" title="Projeto <?= get_the_title() . ' - ' . SITE['name']; ?>"  target="_blank">
        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="Projeto <?= get_the_title() . ' - ' . SITE['name']; ?>" loading="lazy">
    </a>
    <!-- end of image -->

    <!-- content -->
    <div class="projects__container__behance__card__content">
        <!-- header -->
        <header class="projects__container__behance__card__content__header">
            <h3><?= get_the_title(); ?></h3>
        </header>
        <!-- end of header -->

        <!-- body -->
        <div class="projects__container__behance__card__content__body">
            <p><?php the_field('description'); ?></p>
        </div>
        <!-- end of body -->
    </div>
    <!-- end of content -->
</article>
<!-- end of card -->