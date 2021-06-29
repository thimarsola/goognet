<section class="simulator" id="simulador">
    <div class="container">

        <!-- row -->
        <div class="simulator__row">
            <!-- content -->
            <div class="simulator__row__content">
                <!-- header -->
                <header class="simulator__row__content__header">
                    <!-- icon -->
                    <div class="simulator__row__content__header__icon bg-green-500">
                        <i class="goog-investiment"></i>
                    </div>
                    <!-- end of icon -->

                    <p><span></span>Vale a pena investir no Google?</p>

                    <h2>Simulador de Investimento no <span>G</span><span>o</span><span>o</span><span>g</span><span>l</span><span>e</span></h2>

                </header>
                <!-- end of header -->

                <!-- body -->
                <div class="simulator__row__content__body">
                    <p>Esse é um simulador com dados retirados das <span>Ferramentas Google</span>, onde podemos mostrar possíveis cenários de quantidades de pessoas pesquisando pelo seu segmento,  retorno do investimento e muito mais!</p>
                    <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), CONTACT["whatsapp"]["messageSimulator"], 'Simule seu sucesso', 'btn btn-green-500', 'Simule o seu sucesso'); ?>
                </div>
                <!-- end of body -->
            </div>
            <!-- end of content -->

            <!-- image -->
            <div class="simulator__row__image">
                <picture>
                    <source srcset="<?= image('imagem-simulador.webp'); ?>" type="image/webp">
                    <img src="<?= image('imagem-simulador.jpg') ?>" alt="Simulador de investimento Goognet" loading="lazy">
                </picture>
            </div>
            <!-- end of image -->
        </div>
        <!-- end of row -->

    </div>
</section>