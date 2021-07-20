<section class="related">
    <div class="container">
        <!-- header -->
        <header class="related__header">
            <h2>Outras publicações</h2>
            <hr>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="related__row">
            <?php
            $argRelated = [
                'post_type' => 'post',
                'posts_per_page' => 3,
                'post__in' => get_option('sticky_posts'),
                'ignore_sticky_posts' => 1,
                'orderby' => 'rand'
            ];

            $theQueryRelated = new WP_Query($argRelated);

            if($theQueryRelated->have_posts()){
                while ($theQueryRelated->have_posts()){
                    $theQueryRelated->the_post();
                    get_template_part('template-parts/single/content', 'related');
                }
            }else{
                echo '<p>' . _e('Não existem artigos cadastrados para esta categoria no momento.') . '</p>';
            }

            wp_reset_postdata();
            ?>

        </div>
        <!-- end of row -->
    </div>
</section>