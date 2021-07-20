<section class="news" id="publicacao-recente">
    <div class="container">

        <!-- header -->
        <header class="news__header">
            <h2>Publicações recentes</h2>
            <hr>
        </header>
        <!-- end of header -->

        <!-- content -->
        <div class="news__row">
            <?php
            $argNews = [
                'post_type' => 'post',
                'order' => 'DESC',
//                'post__not_in' => get_option( 'sticky_posts' ),
                'ignore_sticky_posts' => 1,
                'posts_per_page' => 3
            ];

            $theQueryNews = new WP_Query($argNews);

            if($theQueryNews->have_posts()){
                while ($theQueryNews->have_posts()){
                    $theQueryNews->the_post();
                    get_template_part('template-parts/blog/content', 'news');
                }
            }else{
                echo '<p>' . _e('Não existem artigos cadastrados para esta categoria no momento.') . '</p>';
            }

            wp_reset_postdata();
            ?>

        </div>
        <!-- end of content -->

    </div>
</section>