<section class="hero">
    <!-- row -->
    <div class="hero__row">

        <!-- content -->
        <div class="hero__row__content">

            <!-- header -->
            <header class="hero__row__content__header">
                <p>Destaque suas mídias sociais</p>
                <h2>Explore seus pontos fortes em uma imagem</h2>
            </header>
            <!-- end of header -->

            <!-- body -->
            <div class="hero__row__content__body">
                <p>Possuir um <b>Feed de noticias</b> mal estruturado e com imagens mal desenvolvidas ou de má qualidade, irá reduzir muito a chance de conseguir novos clientes, pois a sua empresa estará representada por esses conteúdos.</p>

                <a href="#sobre" class="btn btn-green-500" title="Conheça mais sobre este serviço">Conheça mais</a>
            </div>
            <!-- end of body -->

        </div>
        <!-- end of content -->

        <!-- image -->
        <div class="hero__row__image">
            <picture>
                <source srcset="<?= image('imagem-criacao.webp'); ?>" type="image/webp">
                <img src="<?= image('imagem-criacao.jpg') ?>" alt="<?= get_the_title(); ?>" loading="lazy">
            </picture>
        </div>
        <!-- end of image -->

    </div>
    <!-- end of row -->
</section>