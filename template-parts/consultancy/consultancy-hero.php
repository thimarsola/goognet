<section class="hero">
    <div class="container">
        <!-- row -->
        <div class="hero__row">
            <!-- content -->
            <div class="hero__row__content">

                <!-- header -->
                <header class="hero__row__content__header">
                    <p>Aumente já suas vendas</p>
                    <h2>Consultoria de Marketing Digital para a sua empresa 100% gratuita</h2>
                </header>
                <!-- end of header -->

                <p>Essa é uma consultoria que dura em torno de 1h onde iremos lhe mostrar como a sua empresa está posicionada atualmente no mundo online, como os seus concorrentes estão em relação a você e quais estratégias se aplicam ao seu negócio.</p>
            </div>
            <!-- end of content -->

            <!-- form -->
            <div class="hero__row__form">
                <!-- container -->
                <div class="hero__row__form__container">

                    <!-- header -->
                    <header class="hero__row__form__container__header">
                        <h3>Vamos começar essa consultoria?</h3>
                        <p>Preencha o formulário abaixo e ganha a nossa consultoria gratuita</p>
                    </header>
                    <!-- end of header -->

                    <!-- content -->
                    <div class="hero__row__form__container__content">
                        <form id="form" method="POST" enctype="multipart/form-data">

                            <!-- group -->
                            <div class="hero__row__form__container__content__group">
                                <label for="name" class="d-none">Nome</label>
                                <input type="text" name="name" placeholder="Nome" id="name" required>
                            </div>
                            <!-- end of group -->

                            <!-- group -->
                            <div class="hero__row__form__container__content__group">
                                <label for="email" class="d-none">E-mail</label>
                                <input type="email" name="email" placeholder="E-mail" id="email" required>
                            </div>
                            <!-- end of group -->

                            <!-- group -->
                            <div class="hero__row__form__container__content__group">
                                <label for="phone" class="d-none">Telefone | Whatsapp</label>
                                <input type="text" name="phone" placeholder="Telefone | Whatsapp" id="phone" required>
                            </div>
                            <!-- end of group -->

                            <!-- group -->
                            <div class="hero__row__form__container__content__group">
                                <label for="company" class="d-none">Nome da empresa</label>
                                <input type="text" name="company" placeholder="Nome da empresa" id="company" required>
                            </div>
                            <!-- end of group -->

                            <!-- group -->
                            <div class="hero__row__form__container__content__group">
                                <label for="midia" class="d-none">Site | Instagram</label>
                                <input type="text" name="midia" placeholder="Site | Instagram" id="midia" required>
                            </div>
                            <!-- end of group -->

                            <!-- status -->
                            <div class="hero__row__form__container__content__group__status d-none">
                                <div class="hero__row__form__container__content__group__status--loading">
                                    <img src="<?= image('spinner.svg'); ?>" alt="Carregando" loading="lazy">
                                </div>
                            </div>
                            <!-- end of status -->

                            <!-- button -->
                            <div class="hero__row__form__container__content__group__button">
                                <button id="button-sender" class="btn btn-green-500" type="submit" name="submit" value="submit">Quero minha consultoria</button>
                            </div>
                            <!-- end of button -->
                        </form>
                    </div>
                    <!-- end of content -->
                </div>
                <!-- end of container -->
            </div>
            <!-- end of form -->
        </div>
        <!-- end of row -->
    </div>
</section>