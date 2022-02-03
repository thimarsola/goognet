<section class="hero">

    <!-- image -->
    <div class="hero__image">
        <picture>
            <source srcset="<?= image('imagem-projetos.webp'); ?>" type="image/webp">
            <img src="<?= image('imagem-projetos.jpg'); ?>" alt="Conheça os nossos projetos!" loading="lazy">
        </picture>
    </div>
    <!-- end of image -->

    <div class="container">

        <!-- content -->
        <div class="hero__content bg-neutral-500">
            <p><span></span> Nossos projetos</p>

            <!-- header -->
            <header class="hero__content__header">
                <h2>Conheça o nosso portfólio de <br><span>Websites!</span></h2>
            </header>
            <!-- end of header -->
        </div>
        <!-- end of content -->

        <!-- row -->
        <div class="hero__row">
            <?php
            $pagedProjects = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

            $argProjects = [
                'post_type' => 'projetos',
                'posts_per_page' => 9,
                'order' => 'DESC',
                'paged' => $pagedProjects
            ];

            $theQueryProjects = new WP_Query($argProjects);

            if($theQueryProjects->have_posts()){
                while ($theQueryProjects->have_posts()){
                    $theQueryProjects->the_post();
                    get_template_part('template-parts/projects/content', 'project');
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
                <h3 class="d-none">Menu de Paginação</h3>
                <?php
                $big = 999999999; // need an unlikely integer

                $pages = pagination(
                    [
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $theQueryProjects->max_num_pages,
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