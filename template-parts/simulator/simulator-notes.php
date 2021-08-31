<section class="notes">
    <div class="container">
        <!-- header -->
        <header class="notes__header">
            <h2>Notas:</h2>
        </header>
        <!-- end of header -->

        <p>* Os resultados obtidos no simulador são baseados em uma estimativa do mercado, podendo não ser reais para todos os segmentos que estão listados, ressaltamos que os dados foram retirados da ferramenta Google Ads.</p>
        <p>* Dados coletados da ferramenta Google Ads referente a Região de São Paulo para tendência de <?= date('Y'); ?>.</p>
        <p>* Dados coletados das palavras-chave referente ao segmento foi selecionado de uma maneira generalizada.</p>
        <p>* O número de orçamento foi definido como sendo 1 orçamento a cada 10 pessoas entrando no site.</p>
        <p>* Ressaltamos que esses resultados tem como finalidade somente uma visão ampla de um possível cenário, pois cada cliente tem seus dados específicos, assim como o mercado em que atua.</p>
        <p>* No resultado do simulador não está incluso a mão de obra da agência, somente o investimento na ferramenta Google Ads.</p>
        <p>* Ressaltamos que os resultados são simplesmente para base de analise, não sendo garantido pela agência Goognet Solução Digital esses números.</p>
        <?php
            if(is_page('Simulador')){
                echo '<p>* Para uma análise mais precisa entre em contato através do botão "Solicite já".</p>';
            }
        ?>
    </div>
</section>