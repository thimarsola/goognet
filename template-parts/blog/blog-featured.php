<section class="featured bg-gray-500">
    <div class="container">

        <!-- header -->
        <header class="featured__header">
            <h2>Destaques</h2>
            <hr>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="featured__row">
            <?php
            $argFeatured = [
                'post_type' => 'post',
                'posts_per_page' => 6,
                'post__in' => get_option('sticky_posts'),
                'ignore_sticky_posts' => 1,
                'order' => 'DESC'
            ];

            $theQueryFeatured = new WP_Query($argFeatured);

            if($theQueryFeatured->have_posts()){
                while ($theQueryFeatured->have_posts()){
                    $theQueryFeatured->the_post();
                    get_template_part('template-parts/blog/content', 'featured');
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