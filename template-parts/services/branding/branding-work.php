<section class="work bg-gray-500">
    <div class="container">
        <!-- header -->
        <header class="work__header">
            <h2>Como a Goog trabalha no sua <b>Identidade Visual</b></h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="work__row">

            <!-- card -->
            <article class="work__row__card">
                <!-- icon -->
                <div class="work__row__card__icon">
                    <i class="goog-briefing"></i>
                </div>
                <!-- end of icon -->

                <!-- container -->
                <div class="work__row__card__container">
                    <!-- header -->
                    <header class="work__row__card__container__header">
                        <p>01</p>
                        <h3>Briefing</h3>
                    </header>
                    <!-- end of header -->

                    <p>Entender a proposta, objetivos do projeto</p>
                </div>
                <!-- end of container -->
            </article>
            <!-- end of card -->

            <!-- card -->
            <article class="work__row__card">
                <!-- icon -->
                <div class="work__row__card__icon">
                    <i class="goog-meta"></i>
                </div>
                <!-- end of icon -->

                <!-- container -->
                <div class="work__row__card__container">
                    <!-- header -->
                    <header class="work__row__card__container__header">
                        <p>02</p>
                        <h3>Esboço</h3>
                    </header>
                    <!-- end of header -->

                    <p>Desenvolver um esboço do projeto de acordo com o briefing</p>
                </div>
                <!-- end of container -->
            </article>
            <!-- end of card -->

            <!-- card -->
            <article class="work__row__card">
                <!-- icon -->
                <div class="work__row__card__icon">
                    <i class="goog-otimization"></i>
                </div>
                <!-- end of icon -->

                <!-- container -->
                <div class="work__row__card__container">
                    <!-- header -->
                    <header class="work__row__card__container__header">
                        <p>03</p>
                        <h3>Criação</h3>
                    </header>
                    <!-- end of header -->

                    <p>Desenvolvimento da identidade de acordo com o esboço aprovado</p>
                </div>
                <!-- end of container -->
            </article>
            <!-- end of card -->

            <!-- card -->
            <article class="work__row__card">
                <!-- icon -->
                <div class="work__row__card__icon">
                    <i class="goog-datas"></i>
                </div>
                <!-- end of icon -->

                <!-- container -->
                <div class="work__row__card__container">
                    <!-- header -->
                    <header class="work__row__card__container__header">
                        <p>04</p>
                        <h3>Entrega</h3>
                    </header>
                    <!-- end of header -->

                    <p>Sua identidade desenvolvida e revisada, pronta para os seus clientes</p>
                </div>
                <!-- end of container -->
            </article>
            <!-- end of card -->

        </div>
        <!-- end of row -->

        <!-- cta -->
        <div class="work__cta">
            <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), CONTACT["whatsapp"]["messageBudget"] . get_the_title(), 'Solicite um orçamento já', 'btn btn-green-500', 'Solicite já o seu orçamento'); ?>
        </div>
        <!-- end of cta -->

    </div>
</section>