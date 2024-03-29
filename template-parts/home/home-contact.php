<section class="contact" id="contato">
    <!-- row -->
    <div class="contact__row">

        <!-- content -->
        <div class="contact__row__content">
            <!-- header -->
            <header class="contact__row__content__header">
                <h2>Vamos começar um novo projeto?</h2>
                <p>Preencha o formulário abaixo e envio para nós sua mensagem. Teremos o maior prazer em lhe responder o mais breve possível.</p>
            </header>
            <!-- end of header -->

            <!-- form -->
            <div class="contact__row__content__form">
                <h3>Como podemos te contatar?</h3>

                <form id="form" method="POST" enctype="multipart/form-data">
                    <!-- group -->
                    <div class="contact__row__content__form__group">
                        <label for="name" class="d-none">Nome Completo</label>
                        <input type="text" name="name" placeholder="Nome Completo" id="name" required>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__row__content__form__group">
                        <label for="email" class="d-none">E-mail</label>
                        <input type="email" name="email" placeholder="E-mail" id="email" required>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__row__content__form__group">
                        <label for="phone" class="d-none">Telefone | Whatsapp</label>
                        <input type="text" name="phone" placeholder="Telefone | Whatsapp" id="phone" required>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__row__content__form__group">
                        <label for="message" class="d-none">Escreva sua mensagem</label>
                        <textarea id="message" name="message" cols="50" rows="2" placeholder="Escreva sua mensagem"></textarea>
                    </div>
                    <!-- end of group -->

                    <!-- status -->
                    <div class="contact__row__content__form__status d-none">
                        <div class="contact__row__content__form__status--loading">
                            <img src="<?= image('spinner.svg'); ?>" alt="Carregando" loading="lazy">
                        </div>
                    </div>
                    <!-- end of status -->

                    <!-- button -->
                    <div class="contact__row__content__form__button">
                        <button id="button-contact" class="btn btn-green-500" type="submit" name="submit" value="submit">Enviar</button>
                    </div>
                    <!-- end of button -->
                </form>
            </div>
            <!-- end of form -->
        </div>
        <!-- end of content -->

        <!-- information -->
        <div class="contact__row__information">
            <!-- content -->
            <div class="contact__row__information__content">
                <!-- logo -->
                <div class="contact__row__information__content__logo">
                    <img src="<?= image('logo.svg') ?>" alt="Logo <?= SITE['name']; ?>">
                </div>
                <!-- end of logo -->

                <!-- text -->
                <div class="contact__row__information__content__text">
                    <p>Encontre abaixo todos os meios de contato com a sua agência. Estaremos a disposição para sempre atendê-lo!</p>
                </div>
                <!-- end of text -->

                <!-- group -->
                <div class="contact__row__information__content__group">
                    <ul>
                        <!-- mail -->
                        <li>
                            <address>
                                <a rel="nofollow noreferrer noopener" href="mailto:<?= CONTACT['mail']; ?>" target="_blank" title="Que tal conversarmos por e-mail?">
                                    <i class="goog-mail"></i>
                                    <?= CONTACT['mail']; ?>
                                </a>
                            </address>
                        </li>
                        <!-- end of mail -->

                        <!-- phone -->
                        <li>
                            <a rel="nofollow noreferrer noopener" href="tel:<?= formatPhone(CONTACT['phone']['01']); ?>" target="_blank" title="Que tal conversarmos pelo telefone?">
                                <i class="goog-phone"></i>
                                <?= CONTACT['phone']['01']; ?>
                            </a>
                        </li>
                        <!-- end of phone -->

                        <!-- whatsapp -->
                        <li>
                            <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), CONTACT["whatsapp"]["message"], '<i class="goog-whatsapp"></i>' . CONTACT["whatsapp"]["number"], null, 'Vamos conversar?'); ?>
                        </li>
                        <!-- end of whatsapp -->

                        <!-- address -->
                        <li>
                            <address>
                                <a rel="nofollow noreferrer noopener" href="<?= CONTACT['addressLink']; ?>" target="_blank" title="Venha tomar um café!">
                                    <i class="goog-target"></i>
                                    <?= CONTACT['address']; ?>
                                </a>
                            </address>
                        </li>
                        <!-- end of address -->

                        <!-- schedule -->
                        <li>
                            <p>
                                <i class="goog-clock"></i>
                                8:30 - 17:00
                            </p>
                        </li>
                        <!-- end of schedule -->
                    </ul>
                </div>
                <!-- end of group -->
            </div>
            <!-- end of content -->

            <!-- midias -->
            <div class="contact__row__information__midias">
                <!-- container -->
                <div class="contact__row__information__midias__container">
                    <h2>Siga a Goog!</h2>

                    <ul>
                        <!-- instagram -->
                        <li>
                            <a rel="nofollow noreferrer noopener" href="<?= CONTACT['instagram']; ?>" target="_blank" title="Siga a Goog no Instagram">
                                <i class="goog-instagram"></i>
                            </a>
                        </li>
                        <!-- end of instagram -->

                        <!-- facebook -->
                        <li>
                            <a rel="nofollow noreferrer noopener" href="<?= CONTACT['facebook']; ?>" target="_blank" title="Siga a Goog no Facebook">
                                <i class="goog-facebook"></i>
                            </a>
                        </li>
                        <!-- end of facebook -->

                        <!-- behance -->
                        <li>
                            <a rel="nofollow noreferrer noopener" href="<?= CONTACT['behance']; ?>" target="_blank" title="Conheça o nosso Portfolio de Sites!">
                                <i class="goog-behance"></i>
                            </a>
                        </li>
                        <!-- end of behance -->

                        <!-- linkedin -->
                        <li>
                            <a rel="nofollow noreferrer noopener" href="<?= CONTACT['linkedin']; ?>" target="_blank" title="Siga a Goog no Linkedin">
                                <i class="goog-linkedin"></i>
                            </a>
                        </li>
                        <!-- end of linkedin -->
                    </ul>
                </div>
                <!-- end of container -->
            </div>
            <!-- end of midias -->
        </div>
        <!-- end of information -->

        <!-- end of row -->
    </div>
</section>