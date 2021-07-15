<section class="services">
    <!-- header -->
    <header class="services__header bg-neutral-500">
        <div class="container">
            <h2>Conheça as outras soluções da Goog para o seu negócio</h2>
        </div>
    </header>
    <!-- end of header -->

    <!-- row -->
    <div class="container">
        <div class="services__row">
            <?php
            $jsonServices= file_get_contents(__DIR__ . '/../../includes/services.json');
            $servicesList= json_decode($jsonServices, true);

            foreach ($servicesList['services'] as $service):
                if($service['name'] !== html_entity_decode(get_the_title())):
                    ?>

                    <!-- card -->
                    <article class="services__row__card">
                        <!-- image -->
                        <div class="services__row__card__image">
                            <a href="<?= get_permalink(get_page_by_title($service['name'])); ?>" target="_blank" title="Conheça mais sobre <?= $service['name']; ?>">
                                <picture>
                                    <source srcset="<?= image($service['image'] . '.webp'); ?>" type="image/webp">
                                    <img src="<?= image($service['image'] . '.jpg') ?>" alt="<?= $service['name']; ?>" loading="lazy">
                                </picture>
                            </a>
                        </div>
                        <!-- end of image -->

                        <!-- container -->
                        <div class="services__row__card__container">
                            <!-- header -->
                            <header class="services__row__card__container__header">
                                <h3><?= $service['name']; ?></h3>
                            </header>
                            <!-- end of header -->
                        </div>
                        <!-- end of container -->
                    </article>
                    <!-- end of card -->
                <?php
                endif;
            endforeach;
            ?>
        </div>
    </div>
    <!-- end of row -->
</section>