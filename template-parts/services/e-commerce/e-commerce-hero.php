<section class="hero">
    <!-- row -->
    <div class="hero__row">

        <!-- content -->
        <div class="hero__row__content">

            <!-- header -->
            <header class="hero__row__content__header">
                <p>Venda mais sem sair da cadeira</p>
                <h2>Desenvolvimento de <b>E-Commerce</b></h2>
            </header>
            <!-- end of header -->

            <!-- body -->
            <div class="hero__row__content__body">
                <p>Que empresário nunca pensou em vender para o mundo inteiro seu produto, mas sempre foi barrado pelas limitações da loja física? É a muito tempo isso é possível e cada vez mais seus clientes buscam esse tipo de solução.</p>

                <a href="#sobre" class="btn btn-green-500" title="Conheça mais sobre este serviço">Conheça mais</a>
            </div>
            <!-- end of body -->

        </div>
        <!-- end of content -->

        <!-- image -->
        <div class="hero__row__image">
            <picture>
                <source srcset="<?= image('imagem-ecommerce.webp'); ?>" type="image/webp">
                <img src="<?= image('imagem-ecommerce.jpg') ?>" alt="<?= get_the_title(); ?>" loading="lazy">
            </picture>
        </div>
        <!-- end of image -->

    </div>
    <!-- end of row -->
</section>