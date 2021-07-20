<section class="hero">
    <!-- content -->
    <div class="hero__content bg-neutral-500">

        <!-- container -->
        <div class="hero__content__container">
            <!-- header -->
            <header class="hero__content__container__header">
                <h2><span></span> Bem-vindo ao <span class="d-none">Blog da Goog!</span></h2>
            </header>
            <!-- end of header -->

            <!-- body -->
            <div class="hero__content__container__body">
                <p>Blog da Goog! Conteúdos sobre <span><b>Marketing Digital?</b></span></p>

                <a href="#publicacao-recente">
                    <span>
                        <i class="goog-play"></i>
                        Dê o play no seu conhecimento
                    </span>
                </a>
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
            <source srcset="<?= image('imagem-blog.webp'); ?>" type="image/webp">
            <img src="<?= image('imagem-blog.jpg'); ?>" alt="Dê o play no seu conhecimento - Blog <?= SITE['name']; ?>">
        </picture>
    </div>
    <!-- end of image -->
</section><?php
