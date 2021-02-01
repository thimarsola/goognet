<?php

/**
 * SITE CONFIG
 */
define("SITE", [
    "name" => "Goognet Solução Digital",
    "domain" => "goognet.com.br",
    "description" => "...",
    "root" => "https://goognet.com.br"
]);

/**
 * SOCIAL CONFIG
 */
define("SOCIAL", [
    "facebook_page" => "goognetsolucao",
    "facebook_author" => "goognetsolucao",
    "facebook_appId" => "",
    "twitter_creator" => "@GoognetSolucao",
    "twitter_site" => "@GoognetSolucao"
]);

/**
 * CUSTOM wp_body_open
 */
function custom_wp_body_open()
{
    echo '<!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-J4LMVLR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->';
}

add_action('wp_body_open', 'custom_wp_body_open');
