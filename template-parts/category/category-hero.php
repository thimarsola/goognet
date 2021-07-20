<section class="hero">

    <!-- image -->
    <div class="hero__image">
        <picture>
            <source srcset="<?= image('imagem-categoria.webp'); ?>" type="image/webp">
            <img src="<?= image('imagem-categoria.jpg'); ?>" alt="A melhor Agência de Marketing do Grande ABC!" loading="lazy">
        </picture>
    </div>
    <!-- end of image -->

    <div class="container">

        <!-- content -->
        <div class="hero__content bg-neutral-500">
            <p><span></span><?= single_cat_title(); ?></p>

            <!-- header -->
            <header class="hero__content__header">
                <h2>Os melhores conteúdos sobre<br><span><?= single_cat_title(); ?>!</span></h2>
            </header>
            <!-- end of header -->
        </div>
        <!-- end of content -->

        <!-- row -->
        <div class="hero__row">
            <?php
            $pagedCategory = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
            $categoryName = single_cat_title('', false);

            $argCategory = [
                'post_type' => 'post',
                'posts_per_page' => 9,
                'category_name' => $categoryName,
                'order' => 'DESC',
                'paged' => $pagedCategory
            ];

            $theQueryCategory = new WP_Query($argCategory);

            if($theQueryCategory->have_posts()){
                while ($theQueryCategory->have_posts()){
                    $theQueryCategory->the_post();
                    get_template_part('template-parts/category/content', 'post');
                }
            }else{
                echo '<p>' . _e('Não existem artigos cadastrados para esta categoria no momento.') . '</p>';
            }

            wp_reset_postdata();
            ?>

        </div>
        <!-- end of row -->

        <!-- pagination -->
        <div class="hero__pagination">
            <nav class="pagination__nav">
                <?php
                $big = 999999999; // need an unlikely integer

                $pages = pagination(
                    [
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $theQueryCategory->max_num_pages,
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;',
                        'type' => 'array',
                    ]
                );

                if (is_array($pages)) {
                    echo '<ul class="pagination__nav__list">';
                    foreach ($pages as $page) {
                        echo "<li class='pagination__nav__list__item'>$page</li>";
                    }
                    echo '</ul>';
                }
                ?>
            </nav>
        </div>
        <!-- end of pagination -->
    </div>

</section>