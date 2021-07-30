<section class="hero">
    <!-- content -->
    <div class="hero__content bg-neutral-500">

        <!-- container -->
        <div class="hero__content__container">
            <!-- header -->
            <header class="hero__content__container__header">
                <h2><span></span> Bem-vindo ao Simulador</h2>
            </header>
            <!-- end of header -->

            <!-- body -->
            <div class="hero__content__container__body">
                <p>Pensando em divulgar no Google?<br><span><b>Simule Agora!</b></span></p>
            </div>

            <img src="<?= image('vetor-blog.svg'); ?>" alt="Dê o play no seu conhecimento - Blog <?= SITE['name']; ?>">
            <!-- end of body -->
        </div>
        <!-- end of container -->

    </div>
    <!-- end of content -->

    <!-- image -->
    <div class="hero__image">
        <picture>
            <source srcset="<?= image('imagem-simulador-calculadora.webp'); ?>" type="image/webp">
            <img src="<?= image('imagem-simulador-calculadora.jpg'); ?>" alt="Simule seu retorno de investimento no Google - <?= SITE['name']; ?>">
        </picture>
    </div>
    <!-- end of image -->
</section><?php
