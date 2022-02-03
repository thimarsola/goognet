<?php
$area = filter_var($_POST['area'], FILTER_SANITIZE_STRING);
?>
<!-- modal -->
<div class="modal d-none">
    <div class="container">

        <!-- content -->
        <div class="modal__content">
            <form id="form-simulator" method="POST" enctype="multipart/form-data">
                <!-- group -->
                <div class="modal__content__group">
                    <input type="hidden" name="segment" id="contact-segment" value="">
                    <input type="hidden" name="credit" id="contact-credit" value="">
                    <input type="hidden" name="sales" id="contact-sales" value="">
                    <input type="hidden" name="ticket" id="contact-ticket" value="">
                    <input type="hidden" name="clicks" id="contact-clicks" value="">
                    <input type="hidden" name="budget" id="contact-budget" value="">
                    <input type="hidden" name="totalSales" id="contact-total-sales" value="">
                    <input type="hidden" name="roi" id="contact-roi" value="">
                </div>
                <!-- end of group -->

                <!-- group -->
                <div class="modal__content__group">
                    <label for="name" class="d-none">Nome</label>
                    <input type="text" name="name" placeholder="Nome" id="name" required>
                </div>
                <!-- end of group -->

                <!-- group -->
                <div class="modal__content__group">
                    <label for="email" class="d-none">E-mail</label>
                    <input type="email" name="email" placeholder="E-mail" id="email" required>
                </div>
                <!-- end of group -->

                <!-- group -->
                <div class="modal__content__group">
                    <label for="phone" class="d-none">Telefone | Whatsapp</label>
                    <input type="text" name="phone" placeholder="Telefone | Whatsapp" id="phone" required>
                </div>
                <!-- end of group -->

                <!-- group -->
                <div class="modal__content__group">
                    <label for="company" class="d-none">Nome da empresa</label>
                    <input type="text" name="company" placeholder="Nome da empresa" id="company" required>
                </div>
                <!-- end of group -->

                <!-- group -->
                <div class="modal__content__group">
                    <label for="midia" class="d-none">Site | Instagram</label>
                    <input type="text" name="midia" placeholder="Site | Instagram" id="midia" required>
                </div>
                <!-- end of group -->

                <!-- status -->
                <div class="modal__content__group__status d-none">
                    <div class="modal__content__group__status--loading">
                        <!--                        <img src="--><?//= $imageUrl.'spinner.svg'; ?><!--" alt="Carregando" loading="lazy">-->
                        <img src="<?= image('spinner.svg'); ?>" alt="Carregando" loading="lazy">
                    </div>
                </div>
                <!-- end of status -->

                <!-- close -->
                <div class="modal__content__group__close">
                    <p class="close">&times;</p>
                </div>
                <!-- end of close -->

                <!-- button -->
                <div class="modal__content__group__button">
                    <button id="button-sender" class="btn btn-green-500" type="submit" name="submit" value="submit">Enviar</button>
                </div>
                <!-- end of button -->
            </form>
        </div>
        <!-- end of content -->

    </div>
</div>
<!-- end of modal -->