<section class="contact">
    <div class="container">

        <!-- content -->
        <div class="contact__content">
            <!-- header -->
            <header class="contact__content__header">
                <h2>Vamos começar um novo projeto?</h2>
                <p>Preencha o formulário abaixo e envio para nós sua mensagem. Teremos o maior prazer em lhe responder o mais breve possível.</p>
            </header>
            <!-- end of header -->

            <!-- form -->
            <div class="contact__content__form">
                <h3>Como podemos te contatar?</h3>

                <form id="form" method="POST" enctype="multipart/form-data">
                    <!-- group -->
                    <div class="contact__content__form__group">
                        <label for="name" class="d-none">Nome Completo</label>
                        <input type="text" name="name" placeholder="Nome Completo" id="name" required>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__content__form__group">
                        <label for="email" class="d-none">E-mail</label>
                        <input type="email" name="email" placeholder="E-mail" id="email" required>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__content__form__group">
                        <label for="phone" class="d-none">Telefone | Whatsapp</label>
                        <input type="text" name="phone" placeholder="Telefone | Whatsapp" id="phone" required>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__content__form__group">
                        <label for="message" class="d-none">Escreva sua mensagem</label>
                        <textarea id="message" name="message" cols="50" rows="2" placeholder="Escreva sua mensagem"></textarea>
                    </div>
                    <!-- end of group -->

                    <!-- status -->
                    <div class="contact__content__form__status">
                        <div class="d-none contact__content__form__status--loading">
                            <img src="<?= image('spinner.svg'); ?>" alt="Carregando" loading="lazy">
                        </div>
                    </div>
                    <!-- end of status -->

                    <!-- button -->
                    <div class="contact__content__form__button">
                        <button id="button" class="btn btn-green-500" type="submit" name="submit" value="submit">Enviar</button>
                    </div>
                    <!-- end of button -->
                </form>
            </div>
            <!-- end of form -->
        </div>
        <!-- end of content -->

        <!-- information -->
        <div class="contact__information">
            <!-- content -->
            <div class="contact__information__content">
                <!-- logo -->
                <div class="contact__information__content__logo">
                    <img src="<?= image('logo-destaque.svg') ?>" alt="Logo <?= SITE['name']; ?>">
                </div>
                <!-- end of logo -->

                <!-- text -->
                <div class="contact__information__content__text">
                    <p>Encontre abaixo todos os meios de contato com a sua agência. Estaremos a disposição para sempre atendê-lo!</p>
                </div>
                <!-- end of text -->

                <!-- group -->
                <div class="contact__information__content__group">
                    <ul>
                        <!-- mail -->
                        <li>
                            <address>
                                <a rel="nofollow noreferrer noopener" href="mailto:<?= CONTACT['mail']; ?>" target="_blank">
                                    <i class="goog-mail"></i>
                                    <?= CONTACT['mail']; ?>
                                </a>
                            </address>
                        </li>
                        <!-- end of mail -->

                        <!-- phone -->
                        <li>
                            <a rel="nofollow noreferrer noopener" href="tel:<?= formatPhone(CONTACT['phone']['01']); ?>" target="_blank">
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
                                <a rel="nofollow noreferrer noopener" href="<?= CONTACT['addressLink']; ?>" target="_blank">
                                    <i class="goog-target"></i>
                                    <?= CONTACT['address']; ?>
                                </a>
                            </address>
                        </li>
                        <!-- end of address -->

                        <!-- schedule -->
                        <li>
                            <i class="goog-clock"></i>
                            8:30 - 17:00
                        </li>
                        <!-- end of schedule -->
                    </ul>
                </div>
                <!-- end of group -->
            </div>
            <!-- end of content -->

            <!-- midias -->
            <div class="contact__information__midias">
                <h2>Siga a Goog!</h2>

                <ul>
                    <!-- instagram -->
                    <li>
                        <a rel="nofollow noreferrer noopener" href="<?= CONTACT['instagram']; ?>" target="_blank">
                            <i class="goog-instagram"></i>
                        </a>
                    </li>
                    <!-- end of instagram -->

                    <!-- facebook -->
                    <li>
                        <a rel="nofollow noreferrer noopener" href="<?= CONTACT['facebook']; ?>" target="_blank">
                            <i class="goog-facebook"></i>
                        </a>
                    </li>
                    <!-- end of facebook -->

                    <!-- behance -->
                    <li>
                        <a rel="nofollow noreferrer noopener" href="<?= CONTACT['behance']; ?>" target="_blank">
                            <i class="goog-behance"></i>
                        </a>
                    </li>
                    <!-- end of behance -->

                    <!-- linkedin -->
                    <li>
                        <a rel="nofollow noreferrer noopener" href="<?= CONTACT['linkedin']; ?>" target="_blank">
                            <i class="goog-linkedin"></i>
                        </a>
                    </li>
                    <!-- end of linkedin -->
                </ul>
            </div>
            <!-- end of midias -->
        </div>
        <!-- end of information -->

    </div>
</section>