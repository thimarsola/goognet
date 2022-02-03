<section class="data">
    <div class="container">

        <?php
            if(is_page('Simulador')):
        ?>
        <!-- header -->
        <header class="data__header">
            <h2>Simule seu retorno investindo no Google</h2>
            <p>Esse é um simulador com dados retirados das <b>Ferramentas Google Ads</b>, onde podemos mostrar possíveis
                cenários de quantidades de pessoas pesquisando pelo seu segmento, retorno do investimento e muito
                mais!</p>
        </header>
        <!-- end of header -->
        <?php
            elseif (is_page('Simulador Google')):
        ?>
        <!-- header -->
        <header class="data__header d-none">
            <h2>Simule seu retorno divulgando no Google</h2>
        </header>
        <!-- end of header -->
        <?php endif; ?>

        <!-- content -->
        <div class="data__content">
            <form id="simulator" method="post">
                <!-- group -->
                <fieldset class="data__content__group">
                    <legend>Segmento de atuação</legend>

                    <!-- row -->
                    <div class="data__content__group__row">
                        <!-- header -->
                        <div class="data__content__group__row__header">
                            <label for="area">Escolha no campo ao lado qual o segmento de atuação da sua empresa.</label>
                        </div>
                        <!-- end of header -->

                        <!-- content -->
                        <div class="data__content__group__row__content">
                            <select name="area" id="area" required>
                                <option value="" disabled selected>Selecione um segmento</option>
                                <?php
                                $jsonDatas = file_get_contents(__DIR__ . '/../../includes/data.json');
                                $datasList = json_decode($jsonDatas, true);

                                foreach ($datasList['data'] as $data):
                                    ?>
                                    <option value="<?= $data['category'] ?>"><?= $data['category'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- end of content -->
                    </div>
                    <!-- end of row -->
                </fieldset>
                <!-- end of group -->

                <!-- group -->
                <fieldset class="data__content__group">
                    <legend>Investimento em créditos</legend>

                    <!-- row -->
                    <div class="data__content__group__row">
                        <!-- header -->
                        <div class="data__content__group__row__header">
                            <label for="credit">Defina qual será o orçamento mensal disponibilizado para os anúncios no Google.</label>
                        </div>
                        <!-- end of header -->

                        <!-- content -->
                        <div class="data__content__group__row__content">
                            <input name="credit" type="range" min="500" max="2000" step="50" id="credit" value="500"/>
                            <p>R$<span id="credit-value"></span>,00</p>
                        </div>
                        <!-- end of content -->
                    </div>
                    <!-- end of row -->
                </fieldset>
                <!-- end of group -->

                <!-- group -->
                <fieldset class="data__content__group">
                    <legend>Quantidade de vendas</legend>

                    <!-- row -->
                    <div class="data__content__group__row">
                        <!-- header -->
                        <div class="data__content__group__row__header">
                            <label for="sales">Defina qual o número de vendas a cada 10 orçamentos realizados.</label>
                        </div>
                        <!-- end of header -->

                        <!-- content -->
                        <div class="data__content__group__row__content">
                            <input name="sales" type="range" min="1" max="10" step="1" id="sales" value="1"/>
                            <p><span id="sales-value"></span> <span class="data-description">venda</span></p>
                        </div>
                        <!-- end of content -->
                    </div>
                    <!-- end of row -->
                </fieldset>
                <!-- end of group -->

                <!-- group -->
                <fieldset class="data__content__group">
                    <legend>Ticket médio de venda</legend>

                    <!-- row -->
                    <div class="data__content__group__row">
                        <!-- header -->
                        <div class="data__content__group__row__header">
                            <label for="ticket">Defina qual é o ticket médio de venda (R$) pelo seu produto ou serviço.</label>
                        </div>
                        <!-- end of header -->

                        <!-- content -->
                        <div class="data__content__group__row__content">
                            <input id="ticket" name="ticket" type="number" value="10"/>
                        </div>
                        <!-- end of content -->
                    </div>
                    <!-- end of row -->
                </fieldset>
                <!-- end of group -->

                <!-- group -->
                <div class="data__content__group">
                    <button id="button-simulator" type="submit" class="btn btn-green-500" value="submit">Simular investimento</button>
                </div>
                <!-- end of group -->
            </form>
        </div>
        <!-- end of content -->
    </div>

    <!-- status -->
    <div class="d-none data__status">
        <div class="container">
            <!-- content -->
            <div class="data__status__content">
                <div class="data__status__content--loading">
                    <img src="<?= image('spinner.svg'); ?>" alt="Carregando" loading="lazy">
                    <p>Calculando</p>
                </div>
            </div>
            <!-- end of content -->
        </div>
    </div>
    <!-- end of status -->
</section>