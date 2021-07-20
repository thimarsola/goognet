<!-- card -->
<article class="news__row__card bg-gray-500">
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
    <header class="news__row__card__header">
        <h3><?= get_the_title(); ?></h3>
        <time datetime="<?= get_the_date('c'); ?>"><?= get_the_date(); ?></time>
    </header>
    <!-- end of header -->

    <!-- body -->
    <div class="news__row__card__body">
        <a href="<?= get_the_permalink(); ?>" target="_blank" title="Continue lendo este artigo">Continuar lendo <i class="goog-left-arrow"></i></a>
    </div>
    <!-- end of body -->
</article>
<!-- end of card -->