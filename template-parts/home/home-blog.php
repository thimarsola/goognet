<section class="blog">
    <!-- content -->
    <div class="blog__content bg-neutral-500">
        <!-- header -->
        <header class="blog__content__header">
            <h2><span></span>Conheça o nosso blog</h2>
        </header>
        <!-- end of header -->

        <!-- body -->
        <div class="blog__content__body">
            <p>Buscando mais conhecimento sobre <span class="bg-green-500">Marketing Digital?</span></p>

            <a href="<?= get_the_permalink(get_page_by_title('Blog')); ?>">
                <i class="goog-play"></i>
                Dê o play no seu conhecimento
            </a>
        </div>
        <!-- end of body -->
    </div>
    <!-- end of content -->

    <!-- image -->
    <div class="blog__image">
        <picture>
            <source srcset="<?= image('imagem-blog.webp'); ?>" type="image/webp">
            <img src="<?= image('imagem-blog.jpg'); ?>" alt="Dê o play no seu conhecimento - Blog <?= SITE['name']; ?>">
        </picture>
    </div>
    <!-- end of image -->
</section>