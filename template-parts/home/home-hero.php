<section class="hero">
        <!-- group -->
        <div class="hero__group">
            <!-- header -->
            <header class="hero__group__header">
                <h2>Seu cliente já está no mundo digital, e você?</h2>
                <p>Já procurou sobre o seu produto ou serviço na internet? Quem apareceu, você ou seus concorrentes?</p>
            </header>
            <!-- end of header -->

            <!-- timeline -->
            <div class="hero__group__timeline">
                <?php
                    $jsonTimeline = file_get_contents(__DIR__ . '/../../includes/timeline.json');
                    $timelineList = json_decode($jsonTimeline, true);

                    foreach ($timelineList['timeline'] as $item):
                ?>

                <!-- card -->
                <div class="hero__group__timeline__card">
                    <p><?= $item['number']; ?></p>
                    <p><?= $item['description']; ?></p>
                    <p><?= $item['mobile']; ?></p>
                </div>
                <!-- end of card -->

                <?php endforeach; ?>
            </div>
            <!-- end of  timeline -->
        </div>
        <!-- end of group -->

        <!-- vector -->
        <div class="hero__vetor__one">
            <img src="<?= image('vetor-hero-one.svg'); ?>" alt="Vetor - <?= SITE['name']; ?>" loading="lazy">
        </div>
        <!-- end of vector -->

        <!-- vector -->
        <div class="hero__vetor__two">
            <img src="<?= image('vetor-hero-two.svg'); ?>" alt="Vetor - <?= SITE['name']; ?>" loading="lazy">
        </div>
        <!-- end of vector -->
</section>