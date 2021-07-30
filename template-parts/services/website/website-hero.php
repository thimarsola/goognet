<section class="hero">
    <!-- row -->
    <div class="hero__row">

        <!-- content -->
        <div class="hero__row__content">

            <!-- header -->
            <header class="hero__row__content__header">
                <p>Aumente sua presença digital</p>
                <h2>Desenvolvimento de <b>Website</b> personalizado</h2>
            </header>
            <!-- end of header -->

            <!-- body -->
            <div class="hero__row__content__body">
                <p>Uma empresa que não está no mundo digital não existe! Independente do seu negocio possuir um espaço físico ou não, todo cliente inicia a busca de maneira digital, e através de um website bem desenvolvido, a chance de converter essa busca em venda se torna muito maior.
                </p>

                <a href="#sobre" class="btn btn-green-500" title="Conheça mais sobre este serviço">Conheça mais</a>
            </div>
            <!-- end of body -->

        </div>
        <!-- end of content -->

        <!-- image -->
        <div class="hero__row__image">
            <picture>
                <source srcset="<?= image('imagem-website.webp'); ?>" type="image/webp">
                <img src="<?= image('imagem-website.jpg') ?>" alt="<?= get_the_title(); ?>" loading="lazy">
            </picture>
        </div>
        <!-- end of image -->

    </div>
    <!-- end of row -->
</section>