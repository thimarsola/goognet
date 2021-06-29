<?php

/**
 * DEVELOPER
 */
define("DEV", [
    "name" => "Goognet Solução Digital",
    "url" => "https://goognet.com.br"
]);

/**
 * SITE CONFIG
 */
define("SITE", [
    "name" => "Goognet Solução Digital",
    "desc" => "Agência Especializada em Marketing Digital ABC - Google Adwords​, Facebook Ads, Instagram Ads, Websites, E-commerce e muito mais - Seja nosso próximo CASE!",
    "domain" => "goognet.com.br",
    "locale" => "pt_BR",
    "lang" => "pt-BR",
    "keywords" => "Goognet, Goognet Solução Digital, Agência de Marketing Digital, Agência de Marketing Digital no ABC"
]);

/**
 * SITE MINIFY
 */
if ($_SERVER["SERVER_NAME"] == "localhost") {
    require __DIR__ . '/Minifier.php';
}

/**
 * SOCIAL CONFIG
 */
define("SOCIAL", [
    "facebook_page" => "goognetsolucao",
    "facebook_author" => "goognetsolucao",
    "facebook_appId" => "112861974016840",
    "twitter_creator" => "@GoognetSolucao",
    "twitter_site" => "@GoognetSolucao"
]);

/**
 * MAIL CONNECT
 */
define("MAIL", [
    "host" => "mail.goognet.com.br",
    "port" => "587",
    "user" => "sender@goognet.com.br",
    "passwd" => "Contato123*",
    "from_name" => "Goognet Solução Digital",
    "from_email" => "sender@goognet.com.br"
]);

/**
 * REGION
 */
define("REGION", [
    "region" => "BR-SP",
    "placename" => "S&atilde;o Bernardo do Campo",
    "position" => "-23.649926;-46.576501",
    "icbm" => "-23.649926, -46.576501"
]);

/**
 * CONTACT
 */
define("CONTACT", [
    "whatsapp" => [
        "number" => "(11) 23551552",
        "message" => "Olá Goognet, gostaria de maiores informações para o meu Marketing Digital",
        "messageSimulator" => "Olá Goognet, gostaria de maiores informações para simular o meu Sucesso!!",
    ],
    "phone" => [
        "01" => "(11) 2355-1552",
    ],
    "mail" => "comercial@goognet.com.br",
    "address" => "Rua Maria Alves Lorenzoni, 98 - Rudge Ramos - São Bernardo do Campo",
    "addressLink" => "https://g.product/tropicalpet_?share",
    "instagram" => "https://www.instagram.com/goognetsolucao/",
    "facebook" => "https://www.facebook.com/goognetsolucao/",
    "linkedin" => "https://www.linkedin.com/company/goognet/",
    "behance" => "https://www.behance.net/goognetsolucao"
]);