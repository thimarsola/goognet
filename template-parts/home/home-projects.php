<section id="projetos" class="projects">
    <!-- container -->
    <div class="projects__container">
        <!-- content -->
        <div class="projects__container__content">
            <!-- header -->
            <header class="projects__container__content__header">
                <h2>Últimos projetos</h2>
            </header>
            <!-- end of header -->

            <!-- body -->
            <div class="projects__container__content__body">
                <p>Nosso time de desenvolvimento faz parte de uma estrutura forte, jovem e muito atualizada, para formar os melhores cases do mercado. Conheça nossos últimos projetos!</p>

                <a href="<?= get_permalink(get_page_by_title('Projetos')); ?>" class="btn btn-green-500" target="_blank" title="Conheça todos os nossos projetos">Mais projetos</a>
            </div>
            <!-- end of body -->
        </div>
        <!-- end of content -->

        <!-- behance -->
        <div class="projects__container__behance">
            <?php
            $argBehance = [
                "post_type" => "projetos",
                "posts_per_page" => 3,
                "order" => "DESC"
            ];

            $theQueryBehance = new WP_Query($argBehance);

            if($theQueryBehance->have_posts()){
                while ($theQueryBehance->have_posts()){
                    $theQueryBehance->the_post();
                    get_template_part('template-parts/home/content', 'behance');
                }
            }else{
                echo '<p>' . _e('Não existem projetos cadastrados no momento.') . '</p>';
            }

            wp_reset_postdata();
            ?>
        </div>
        <!-- end of behance -->
    </div>
    <!-- end of container -->
</section>