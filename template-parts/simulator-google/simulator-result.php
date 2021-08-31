
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
    <header class="result__header">
        <h3>Veja o Resultado da sua Simulação!</h3>
    </header>
    <!-- end of header -->
</div>

<!-- content -->
<div class="result__content">
    <div class="container">

        <!-- row -->
        <div class="result__content__row">
            <!-- card -->
            <article class="result__content__row__card">
                <!-- header -->
                <header class="result__content__row__card__header">
                    <h4>Número de acessos ao site</h4>
                </header>
                <!-- end of header -->

                <!-- body -->
                <div class="result__content__row__card__body">
                    <?php
                    if($credit != null){
                        $numberClicks = $credit / $structure['cpc'];
                    }

                    if( $numberClicks <= $structure['clicks']){
                        echo '<p>' . number_format($numberClicks, 0, ',', '.') . '<sup>*</sup></p>';
                        echo '<small>acessos</small>';
                    }else{
                        $numberClicks = $structure['clicks'];
                        echo '<p>' . number_format($numberClicks, 0, ',', '.') . '<sup>*</sup></p>';
                        echo '<small>acessos</small>';
                    }
                    ?>
                </div>
                <!-- end of body -->
            </article>
            <!-- end of card -->

            <!-- card -->
            <article class="result__content__row__card">
                <!-- header -->
                <header class="result__content__row__card__header">
                    <h4>Quantidade de orçamentos</h4>
                </header>
                <!-- end of header -->

                <!-- body -->
                <div class="result__content__row__card__body">
                    <?php
                    $numberBudget = $numberClicks / 10;

                    if( $numberBudget <= 1){
                        echo '<p>' . number_format($numberBudget, 0, ',', '.') . '<sup>*</sup></p>';
                        echo '<small>orçamentos</small>';
                    }else{
                        echo '<p>' . number_format($numberBudget, 0, ',', '.') . '<sup>*</sup></p>';
                        echo '<small>orçamentos</small>';
                    }
                    ?>
                </div>
                <!-- end of body -->
            </article>
            <!-- end of card -->

            <!-- card -->
            <article class="result__content__row__card">
                <!-- header -->
                <header class="result__content__row__card__header">
                    <h4>Quantidade de vendas</h4>
                </header>
                <!-- end of header -->

                <!-- body -->
                <div class="result__content__row__card__body">
                    <?php
                    if($sales != null){
                        $numberSales = $numberBudget * ($sales/10);

                        if( $numberSales <= 1){
                            echo '<p>' . number_format($numberSales, 0, ',', '.') . '<sup>*</sup></p>';
                            echo '<small>venda</small>';
                        }else{
                            echo '<p>' . number_format($numberSales, 0, ',', '.') . '<sup>*</sup></p>';
                            echo '<small>vendas</small>';
                        }
                    }
                    ?>
                </div>
                <!-- end of body -->
            </article>
            <!-- end of card -->

            <!-- card -->
            <article class="result__content__row__card">
                <!-- header -->
                <header class="result__content__row__card__header">
                    <h4>Retorno do investimento</h4>
                </header>
                <!-- end of header -->

                <!-- body -->
                <div class="result__content__row__card__body">
                    <p>
                        <?php

                        if($ticket != null){
                            $roi = $numberSales * $ticket;

                            echo 'R$' . number_format($roi, 2, ',', '.') . '<sup>*</sup>';
                        }
                        ?>
                    </p>
                </div>
                <!-- end of body -->
            </article>
            <!-- end of card -->

        </div>
        <!-- end of row -->

    </div>
</div>
<!-- end of content -->
