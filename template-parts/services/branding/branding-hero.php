<section class="hero">
    <!-- row -->
    <div class="hero__row">

        <!-- content -->
        <div class="hero__row__content">

            <!-- header -->
            <header class="hero__row__content__header">
                <p>Destaque sua empresa</p>
                <h2>Sua <b>marca</b> na cabeça das pessoas</h2>
            </header>
            <!-- end of header -->

            <!-- body -->
            <div class="hero__row__content__body">
                <p>Você sabia que a criação de uma <b>marca</b> vai muito além de um <b>logotipo</b>? Sua <b>marca</b> precisa ser poderosa e única, além de ser alinhada com os objetivos e propósitos da empresa.</p>

                <a href="#sobre" class="btn btn-green-500" title="Conheça mais sobre este serviço">Conheça mais</a>
            </div>
            <!-- end of body -->

        </div>
        <!-- end of content -->

        <!-- image -->
        <div class="hero__row__image">
            <picture>
                <source srcset="<?= image('imagem-identidade.webp'); ?>" type="image/webp">
                <img src="<?= image('imagem-identidade.jpg') ?>" alt="<?= get_the_title(); ?>" loading="lazy">
            </picture>
        </div>
        <!-- end of image -->

    </div>
    <!-- end of row -->
</section>