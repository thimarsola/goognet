<?php

require_once (dirname(__DIR__, 2) . '/vendor/autoload.php');

use Source\Support\Email;

if ($_POST) {
    $subjectForm = 'Formulário de Contato Simulador Google' . SITE['name'];
    $nameForm = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $mailForm = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $phoneForm = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $midiaForm = filter_var($_POST['midia'], FILTER_SANITIZE_STRING);

    $email = new Email();

    $email->add(
        $subjectForm,
        "<h1>Mensagem de Contato Simulador Google - Site ". SITE['name'] ."</h1>
                    <br>
                    <p>Olá " . SITE['name'] . ",</p>
                    <p>Me chamo <strong>{$nameForm}</strong>, estou entrando em contato através do formulário da página Simulador.</p>
                    <br>
                    <p>Aqui estão os meus dados para o contato</p>
                    <p><strong>E-mail:</strong><br>{$mailForm}</p>
                    <p><strong>Telefone | Whatsapp:</strong><br>{$phoneForm}</p>
                    <p><strong>Site | Instagram:</strong><br>{$midiaForm}</p>                          
                    ",
        SITE['name'],
        MAIL['from_email']
    )->send($nameForm, $mailForm);

    if (!$email->error()) {
        echo
            '<script>
	            $(document).ready(function(){
	                swal("'.$nameForm.'", "Sua simulação está concluída.  \n Veja o seu resultado!", "success");
                });
        	</script>';
    } else {
        echo
        '<script>
	         $(document).ready(function(){
	             $(".result__container").css("filter", "blur(10px)");
	             swal("Ops...", "Houve um erro no preenchimento do formulário, refaça a simulação!", "error");
                 setTimeout(function(){
                    window.location.reload();
                }, 3000);
	         });
         </script>';
    }
}