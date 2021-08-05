<section class="simulator" id="simulador">
    <div class="container">
        <!-- cta -->
        <div class="simulator__cta">
            <p>Qual seria o retorno da minha empresa se eu investisse no <span>G</span><span>o</span><span>o</span><span>g</span><span>l</span><span>e</span>?</p>
        </div>
        <!-- end of cta -->

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
                    <p>Esse é um simulador com dados retirados das <span><b>Ferramentas Google</b></span>, onde podemos mostrar possíveis cenários de quantidades de pessoas pesquisando pelo seu segmento,  retorno do investimento e muito mais!</p>
                    <a href="<?= get_permalink(get_page_by_title('Simulador')); ?>" class="btn btn-green-500" target="_blank" title="Simule seu sucesso no Google">Simule o seu sucesso</a>
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