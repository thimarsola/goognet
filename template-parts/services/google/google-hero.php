<section class="hero">
    <!-- row -->
    <div class="hero__row">

        <!-- content -->
        <div class="hero__row__content">

            <!-- header -->
            <header class="hero__row__content__header">
                <p>Aumente suas vendas</p>
                <h2>Divulgue sua empresa no <b>Google</b></h2>
            </header>
            <!-- end of header -->

            <!-- body -->
            <div class="hero__row__content__body">
                <p>O <b>Google Ads</b> é a principal ferramenta de anúncios através da internet feita por links patrocinados.</p>

                <a href="#sobre" class="btn btn-green-500" title="Conheça mais sobre este serviço">Conheça mais</a>
            </div>
            <!-- end of body -->

        </div>
        <!-- end of content -->

        <!-- image -->
        <div class="hero__row__image">
            <picture>
                <source srcset="<?= image('imagem-google.webp'); ?>" type="image/webp">
                <img src="<?= image('imagem-google.jpg') ?>" alt="<?= get_the_title(); ?>" loading="lazy">
            </picture>
        </div>
        <!-- end of image -->

    </div>
    <!-- end of row -->
</section>