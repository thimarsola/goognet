<section class="partners">
    <div class="container">
        <!-- header -->
        <header class="partners__header">
            <h2>Conheça os nossos parceiros</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="partners__row owl-carousel">
		    <?php
		    $jsonPartners = file_get_contents(__DIR__ . '/../../includes/partners.json');
		    $partnersList = json_decode($jsonPartners, true);

		    foreach ($partnersList['partners'] as $partner):
			    ?>
                <!-- card -->
                <div class="partners__row__card">
                    <picture>
                        <source srcset="<?= image($partner['image'] . '.webp'); ?>" type="image/webp">
                        <img src="<?= image($partner['image'] . '.png'); ?>" alt="<?= SITE['name'] . " - " . $partner['name']; ?>" loading="lazy">
                    </picture>
                </div>
                <!-- end of card -->
		    <?php endforeach; ?>
        </div>
        <!-- end of row -->
    </div>
</section>