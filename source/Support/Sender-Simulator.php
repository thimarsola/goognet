<?php

require_once (dirname(__DIR__, 2) . '/vendor/autoload.php');

use Source\Support\Email;

if ($_POST) {
	$subjectForm = 'Formulário de Contato Simulador ' . SITE['name'];
	$nameForm = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$mailForm = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
	$phoneForm = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
	$companyForm = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
	$midiaForm = filter_var($_POST['midia'], FILTER_SANITIZE_STRING);
	$segmentForm = filter_var($_POST['segment'], FILTER_SANITIZE_STRING);
	$creditForm = filter_var($_POST['credit'], FILTER_SANITIZE_STRING);
	$salesForm = filter_var($_POST['sales'], FILTER_SANITIZE_STRING);
	$ticketForm = filter_var($_POST['ticket'], FILTER_SANITIZE_STRING);
	$clicksForm = filter_var($_POST['clicks'], FILTER_SANITIZE_STRING);
	$budgetForm = filter_var($_POST['budget'], FILTER_SANITIZE_STRING);
	$totalSalesForm = filter_var($_POST['totalSales'], FILTER_SANITIZE_STRING);
	$roiForm = filter_var($_POST['roi'], FILTER_SANITIZE_STRING);

	$email = new Email();

	$email->add(
		$subjectForm,
		"<h1>Mensagem de Contato Simulador - Site ". SITE['name'] ."</h1>
                    <br>
                    <p>Olá " . SITE['name'] . ",</p>
                    <p>Me chamo <strong>{$nameForm}</strong>, estou entrando em contato através do formulário da página Simulador.</p>
                    <br>
                    <p>Aqui estão os meus dados para o contato</p>
                    <p><strong>E-mail:</strong><br>{$mailForm}</p>
                    <p><strong>Telefone | Whatsapp:</strong><br>{$phoneForm}</p>
                    <p><strong>Nome da empresa:</strong><br>{$companyForm}</p>
                    <p><strong>Site | Instagram:</strong><br>{$midiaForm}</p>
                    <br>
                    <br>
                    <p>Aqui estãos os meus dados da simulação:</p>
                    <p><strong>Segmento:</strong> {$segmentForm}</p>                                   
                    <p><strong>Investimento em créditos:</strong> {$creditForm}</p>                                   
                    <p><strong>Quantidade de vendas:</strong> {$salesForm}</p>                                   
                    <p><strong>Ticket médio de venda:</strong> {$ticketForm}</p>      
                    <br>
                    <br>
                    <p>Aqui estãos os meus resultados da simulação:</p>    
                    <p><strong>Número de acesso ao site:</strong> {$clicksForm}</p>                                   
                    <p><strong>Quantidade de orçamentos:</strong> {$budgetForm}</p>                                   
                    <p><strong>Quantidade de vendas:</strong> {$totalSalesForm}</p>                                   
                    <p><strong>Retorno do investimento:</strong> {$roiForm}</p>                             
                    ",
		SITE['name'],
        MAIL['from_email']
	)->send($nameForm, $mailForm);

	if (!$email->error()) {
		echo
			'<script>
	            $(document).ready(function(){
	                swal("'.$nameForm.'", "Sua mensagem foi enviada.  \n Obrigado pelo contato!", "success");
                });
        	</script>';
	} else {
		echo
		'<script>
	         $(document).ready(function(){swal("Ops...", "Houve um erro ao enviar a mensagem, tente novamente!", "error");
	         });
         </script>';
	}
}