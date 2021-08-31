<div class="form">
    <div class="container">

        <!-- content -->
        <div class="form__content">

            <div class="form__content__header">
                <p>Estamos quase lá, preencha para visualizar!</p>
            </div>

            <form id="form-simulator" method="POST" enctype="multipart/form-data">

                <!-- group -->
                <div class="form__content__group">
                    <label for="name" class="d-none">Nome</label>
                    <input type="text" name="name" placeholder="Nome" id="name" required>
                </div>
                <!-- end of group -->

                <!-- group -->
                <div class="form__content__group">
                    <label for="email" class="d-none">E-mail</label>
                    <input type="email" name="email" placeholder="E-mail" id="email" required>
                </div>
                <!-- end of group -->

                <!-- group -->
                <div class="form__content__group">
                    <label for="phone" class="d-none">Telefone ou Whatsapp</label>
                    <input type="text" name="phone" placeholder="Telefone ou Whatsapp" id="phone" required>
                </div>
                <!-- end of group -->

                <!-- group -->
                <div class="form__content__group">
                    <label for="midia" class="d-none">Site ou Instagram da empresa</label>
                    <input type="text" name="midia" placeholder="Site ou Instagram da empresa" id="midia" required>
                </div>
                <!-- end of group -->

                <!-- status -->
                <div class="form__content__group__status d-none">
                    <div class="form__content__group__status--loading">
                        <img src="<?= image('spinner.svg') ?>" alt="Carregando" loading="lazy">
                    </div>
                </div>
                <!-- end of status -->

                <!-- button -->
                <div class="form__content__group__button">
                    <button id="button-sender" class="btn btn-green-500" type="submit" name="submit" value="submit">Ver o resultado</button>
                </div>
                <!-- end of button -->
            </form>
        </div>
        <!-- end of content -->

    </div>
</div>