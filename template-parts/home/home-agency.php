<section class="agency">
    <div class="container">

        <!-- header -->
        <header class="agency__header">
            <h2>A melhor Agência de Marketing do Grande ABC!</h2>
            <p>
                Somos 5 estrelas no Google
                <?php
                for ($icon=1; $icon < 6; $icon++):
                    ?>
                    <i class="goog-star"></i>
                <?php endfor; ?>
            </p>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="agency__row">
            <!-- image -->
            <div class="agency__row__image">
                <p>Apaixonados pelo<br><b>Marketing Digital</b></p>
                <picture>
                    <source srcset="<?= image('imagem-agencia.webp'); ?>" type="image/webp">
                    <img src="<?= image('imagem-agencia.png'); ?>" alt="A melhor Agência de Marketing do Grande ABC!" loading="lazy">
                </picture>
            </div>
            <!-- end of image -->

            <!-- content -->
            <div class="agency__row__content">
                <!-- logo -->
                <img src="<?= image('logo-destaque.svg'); ?>" alt="<?= SITE['name']; ?> - A melhor Agência de Marketing do Grande ABC!">
                <!-- end of logo -->

                <!-- text -->
                <div class="agency__row__content__text">
                    <p>Somos como todo mundo. Começamos nossos dias com uma grande caneca de café, checamos nossos e-mails e então começamos a trabalhar em um projeto único e diferenciado para você. Ok, talvez sejamos um pouco diferentes.</p>
                </div>
                <!-- end of text -->
            </div>
            <!-- end of content -->
        </div>
        <!-- end of row -->

    </div>
</section>