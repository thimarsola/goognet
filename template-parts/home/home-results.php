<section class="results">
    <div class="container">

        <!-- row -->
        <div class="results__row">

            <!-- content -->
            <div class="results__row__content">
                <!-- header -->
                <header class="results__row__content__header">
                    <h2><span></span>Nossos resultados. O seu Sucesso!</h2>
                </header>
                <!-- end of header -->

                <!-- body -->
                <div class="results__row__content__body">
                    <p>Quem ousou conquistar e saiu para lutar, chegou mais longe!</p>
                    <p>Essa é a história da Goognet</p>
                </div>
                <!-- end of body -->
            </div>
            <!-- end of content -->

            <!-- data -->
            <div class="results__row__data">
                <?php
                $jsonResults = file_get_contents(__DIR__ . '/../../includes/results.json');
                $resultsList = json_decode($jsonResults, true);

                foreach ($resultsList['results'] as $result):
                ?>

                    <!-- card -->
                    <div class="results__row__data__card">
                        <!-- header -->
                        <div class="results__row__data__card__header">
                            <p class="results__row__data__card--counter"><?= $result['result']; ?></p>
                        </div>
                        <!-- end of header -->

                        <!-- body -->
                        <div class="results__row__data__card__body">
                            <p><?= $result['description']; ?></p>
                        </div>
                        <!-- end of body -->
                    </div>
                    <!-- end of card -->
                <?php endforeach; ?>
            </div>
            <!-- end of data -->

        </div>
        <!-- end of row -->

    </div>
</section>