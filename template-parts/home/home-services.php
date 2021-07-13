<section class="services" id="servicos">
    <div class="container">

        <!-- header -->
        <header class="services__header">
            <h2 class="d-none">Nossos Serviços</h2>
        </header>
        <!-- end of header -->

        <!-- services -->
        <div class="services__row">
            <?php
                $jsonServices= file_get_contents(__DIR__ . '/../../includes/services.json');
                $servicesList= json_decode($jsonServices, true);

                foreach ($servicesList['services'] as $service):
            ?>
                <!-- card -->
                <article class="services__row__card">
                    <!-- header -->
                    <header class="services__row__card__header">
                        <h3><?= $service['name']; ?></h3>
                    </header>
                    <!-- end of header -->

                    <!-- image -->
                    <div class="services__row__card__image">
                        <picture>
                            <source srcset="<?= image($service['image'] . '.webp'); ?>" type="image/webp">
                            <img src="<?= image($service['image'] . '.jpg') ?>" alt="<?= $service['name']; ?>" loading="lazy">
                        </picture>
                    </div>
                    <!-- end of image -->

                    <!-- body -->
                    <div class="services__row__card__body">
                        <p><?= $service['description']; ?></p>

                        <a href="<?= get_permalink(get_page_by_title($service['name'])); ?>" class="btn btn-green-500" target="_blank" title="Conheça mais sobre <?= $service['name']; ?>">Saiba mais</a>
                    </div>
                    <!-- end of body -->
                </article>
                <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of services -->

    </div>
</section>