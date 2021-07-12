<section id="duvidas-frequentes" class="faq">

    <!-- header -->
    <header class="faq__header bg-neutral-500">
        <div class="container">
            <h2>Perguntas frequentes - <abbr title="Frequently Asked Question">FAQ</abbr></h2>
            <p>Principais dúvidas na hora de contar uma Agência de Marketing Digital</p>
        </div>
    </header>
    <!-- end of header -->

    <!-- content -->
    <div class="faq__content">
        <div class="container">

            <!-- row -->
            <div class="faq__content__row">
                <?php
                $jsonQuestions = file_get_contents(__DIR__ . '/../../includes/faq.json');
                $questionsList = json_decode($jsonQuestions, true);

                foreach ($questionsList['faq'] as $question):
                    ?>

                <!-- card -->
                <article class="faq__content__row__card">
                    <!-- header -->
                    <header class="faq__content__row__card__header">
                        <h3><?= $question['question']; ?></h3>
                    </header>
                    <!-- end of header -->

                    <p><?= $question['answer']; ?></p>
                </article>
                <!-- end of card -->

                <?php endforeach; ?>
            </div>
            <!-- end of row -->

            <!-- cta -->
            <div class="faq__content__cta">
                <p>Ainda ficou com dúvidas? Que tal conversarmos?</p>
                <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), CONTACT["whatsapp"]["messageFAQ"], 'Vamos conversar', 'btn btn-green-500', 'Ainda ficou com dúvidas? Que tal conversarmos?'); ?>
            </div>
            <!-- end of cta -->
        </div>
    </div>
    <!-- end of content -->

</section>