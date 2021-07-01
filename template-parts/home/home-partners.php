<section class="partners">
    <!-- header -->
    <header class="partners__header">
        <h2>Conheça os nossos parceiros</h2>
    </header>
    <!-- end of header -->

    <!-- row -->
    <div class="partners__row">
        <?php
        $jsonPartnersTop = file_get_contents(__DIR__ . '/../../includes/partners.json');
        $partnersListTop = json_decode($jsonPartnersTop, true);

        foreach ($partnersListTop['partners-top'] as $partnerTop):
        ?>
        <!-- card -->
        <div class="partners__row__card">
            <picture>
                <source srcset="<?= image($partnerTop['image'] . '.webp'); ?>" type="image/webp">
                <img src="<?= image($partnerTop['image'] . '.png'); ?>" alt="<?= SITE['name'] . " - " . $partnerTop['name']; ?>" loading="lazy">
            </picture>
        </div>
        <!-- end of card -->
        <?php endforeach; ?>
    </div>
    <!-- end of row -->

    <!-- row -->
    <div class="partners__row">
        <?php
        $jsonPartnersBottom = file_get_contents(__DIR__ . '/../../includes/partners.json');
        $partnersListBottom = json_decode($jsonPartnersBottom, true);

        foreach ($partnersListBottom['partners-bottom'] as $partnerBottom):
        ?>
        <!-- card -->
        <div class="partners__row__card">
            <picture>
                <source srcset="<?= image($partnerBottom['image'] . '.webp'); ?>" type="image/webp">
                <img src="<?= image($partnerBottom['image'] . '.png'); ?>" alt="<?= SITE['name'] . " - " . $partnerBottom['name']; ?>" loading="lazy">
            </picture>
        </div>
        <!-- end of card -->
        <?php endforeach; ?>
    </div>
    <!-- end of row -->
</section>