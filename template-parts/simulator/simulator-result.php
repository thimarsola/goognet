<section class="result d-none">
    <?php

    $area = filter_var($_POST['area'], FILTER_SANITIZE_STRING);
    $credit = filter_var($_POST['credit'], FILTER_SANITIZE_STRING);
    $sales = filter_var($_POST['sales'], FILTER_SANITIZE_STRING);
    $ticket = filter_var($_POST['ticket'], FILTER_SANITIZE_STRING);

    $jsonData = file_get_contents(__DIR__ . '/../../includes/data.json');
    $dataList = json_decode($jsonData, true);

    $search = array_search($area, array_column($dataList['data'], 'category'));
    $structure = $dataList['data'][$search];

    ?>
    <div class="container">

        <!-- header -->
        <header class="result__header d-none">
            <h2>Resultados</h2>
        </header>
        <!-- end of header -->
        <!-- content -->
        <div class="result__content">
            <!-- row -->
            <div class="result__content__row">
                <!-- image -->
                <div class="result__content__row__image">
                    <?php
                    $url = dirname($_SERVER['HTTP_ORIGIN'].$_SERVER['REQUEST_URI'], 3);
                    $imageUrl = $url.'/assets/images/';
                    ?>
                    <img src="<?= $imageUrl.'logo-google.svg'; ?>" alt="Logo Google" loading="lazy">

                </div>
                <!-- end of image -->

                <!-- information -->
                <div class="result__content__row__information">
                    <p class="segment d-none"><?= $area; ?></p>
                    <p class="credit d-none"><?= $credit; ?></p>
                    <p class="sales d-none"><?= $sales; ?></p>
                    <p class="ticket d-none"><?= $ticket; ?></p>

                    <!-- clicks -->
                    <div class="result__content__row__information__clicks">
                        <!-- header -->
                        <header class="result__content__row__information__clicks__header">
                            <h3>Número de acessos ao site</h3>
                        </header>
                        <!-- end of header -->

                        <p>
                            <?php
                            if($credit != null){
                                $numberClicks = $credit / $structure['cpc'];
                            }

                            if( $numberClicks <= $structure['clicks']){
                                echo number_format($numberClicks, 0, ',', '.') . ' acessos' . '<sup>*</sup>';
                            }else{
                                $numberClicks = $structure['clicks'];
                                echo number_format($numberClicks, 0, ',', '.') . ' acessos' . '<sup>*</sup>';
                            }
                            ?>
                        </p>
                    </div>
                    <!-- clicks -->

                    <!-- budget -->
                    <div class="result__content__row__information__budget">
                        <!-- header -->
                        <header class="result__content__row__information__budget__header">
                            <h3>Quantidade de orçamentos</h3>
                        </header>
                        <!-- end of header -->
                        <p>
                            <?php
                            $numberBudget = $numberClicks / 10;

                            if( $numberBudget <= 1){
                                echo number_format($numberBudget, 0, ',', '.') . ' orçamento' . '<sup>*</sup>';
                            }else{
                                echo number_format($numberBudget, 0, ',', '.') . ' orçamentos' . '<sup>*</sup>';
                            }
                            ?>
                        </p>
                    </div>
                    <!-- budget -->

                    <!-- budget -->
                    <div class="result__content__row__information__sales">
                        <!-- header -->
                        <header class="result__content__row__information__sales__header">
                            <h3>Quantidade de vendas</h3>
                        </header>
                        <!-- end of header -->
                        <p>
                            <?php
                            if($sales != null){
                                $numberSales = $numberBudget * ($sales/10);

                                if( $numberSales <= 1){
                                    echo number_format($numberSales, 0, ',', '.') . ' venda' . '<sup>*</sup>';
                                }else{
                                    echo number_format($numberSales, 0, ',', '.') . ' vendas' . '<sup>*</sup>';
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <!-- sales -->
                </div>
                <!-- information -->

                <!-- roi -->
                <div class="result__content__row__roi">
                    <!-- container -->
                    <div class="result__content__row__roi__container">
                        <!-- header -->
                        <header class="result__content__row__roi__container__header">
                            <h3>Retorno do investimento</h3>
                        </header>
                        <!-- end of header -->
                        <p>
                            <?php

                            if($ticket != null){
                                $roi = $numberSales * $ticket;

                                echo 'R$' . number_format($roi, 2, ',', '.') . '<sup>*</sup>';
                            }
                            ?>
                        </p>
                    </div>
                    <!-- end of container -->
                </div>
                <!-- end of roi -->

                <!-- cta -->
                <div class="result__content__row__cta">
                    <!-- header -->
                    <header class="result__content__row__cta__header">
                        <h3>Gostaria de uma análise mais detalhada para a sua empresa?</h3>
                    </header>
                    <!-- end of header -->
                    <p>Clique no botão abaixo</p>
                    <button id="modal" class="btn btn-green-500">Solicite já</button>
                </div>
                <!-- end of cta -->

            </div>
            <!-- end of row -->
        </div>
        <!-- end of content -->

    </div>
</section>
