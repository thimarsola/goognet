<section class="all">
    <div class="container">

        <!-- header -->
        <header class="all__header">
            <h2>Buscando mais conhecimento sobre Marketing Digital?</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="all__row">

            <!-- content -->
            <div class="all__row__content">
                <?php
                $argAll = [
                    'post_type' => 'post',
                    'post__not_in' => get_option( 'sticky_posts' ),
                    'ignore_sticky_posts' => 1,
                    'orderby' => 'rand',
                    'posts_per_page' => 4
                ];

                $theQueryAll = new WP_Query($argAll);

                if($theQueryAll->have_posts()){
                    while ($theQueryAll->have_posts()){
                        $theQueryAll->the_post();
                        get_template_part('template-parts/blog/content', 'all');
                    }
                }else{
                    echo '<p>' . _e('Não existem artigos cadastrados para esta categoria no momento.') . '</p>';
                }

                wp_reset_postdata();
                ?>
            </div>
            <!-- end of content -->

            <!-- categories -->
            <aside class="all__row__categories">

                <!-- header -->
                <header class="all__row__categories__header">
                    <h3>Categorias</h3>
                    <hr>
                </header>
                <!-- end of header -->

                <ul>
                    <?php wp_list_categories( array(
                        'title_li' => '',
//                        'style'    => 'none',
                        'orderby' => 'name',
                    ) ); ?>
                </ul>

            </aside>
            <!-- end of categories -->

        </div>
        <!-- end of row -->

    </div>
</section>