<!-- card -->
<article class="related__row__card">
    <!-- image -->
    <div class="related__row__card__image">
        <a href="<?= get_the_permalink(); ?>" title="Leia o nosso artigo" target="_blank">
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>" loading="lazy">
        </a>
    </div>
    <!-- end of image -->

    <!-- body -->
    <div class="related__row__card__body bg-white-500">
        <!-- categories -->
        <ul>
            <?php
            $argCategories = [
                'orderby' => 'name',
                'order' => 'ASC',
            ];

            foreach (get_categories($argCategories) as $category):
                ?>
                <li>
                    <a href="<?= get_category_link($category->term_id); ?>" target="_blank" title="Conheça a nossa categoria: <?= $category->cat_name ?>"><span>#</span> <?= $category->cat_name ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <!-- end of categories -->

        <!-- header -->
        <header class="related__row__card__body__header">
            <h3><?= get_the_title(); ?></h3>
            <time datetime="<?= get_the_date('c'); ?>"><?= get_the_date(); ?></time>
        </header>
        <!-- end of header -->

        <!-- content -->
        <div class="related__row__card__body__content">
            <a href="<?= get_the_permalink(); ?>" target="_blank" title="Continue lendo este artigo">Continuar lendo <i class="goog-left-arrow"></i></a>
        </div>
        <!-- end of content -->
    </div>
    <!-- end of body -->
</article>
<!-- end of card -->