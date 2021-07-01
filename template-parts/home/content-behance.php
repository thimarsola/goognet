<!-- card -->
<article class="projects__container__behance__card">
    <!-- image -->
    <a href="<?php the_field('behance'); ?>" title="Projeto <?= get_the_title() . ' - ' . SITE['name']; ?>"  target="_blank">
        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="Projeto <?= get_the_title() . ' - ' . SITE['name']; ?>" loading="lazy">
    </a>
    <!-- end of image -->

    <!-- header -->
    <header class="projects__container__behance__card__header">
        <h3><?= get_the_title(); ?></h3>
    </header>
    <!-- end of header -->

    <!-- body -->
    <div class="projects__container__behance__card__body">
        <p><?php the_field('description'); ?></p>
    </div>
    <!-- end of body -->
</article>
<!-- end of card -->