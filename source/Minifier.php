<?php

/**
 * CSS
 */
$homeCss = new MatthiasMullie\Minify\CSS();
$homeCss->add(dirname(__DIR__, 1) . "/assets/css/style.css");
$homeCss->minify(dirname(__DIR__, 1) . "/assets/css/style.min.css");

/**
 * SERVICES CSS
 */
$servicesCss = new MatthiasMullie\Minify\CSS();
$servicesCss->add(dirname(__DIR__, 1) . "/assets/css/style-services.css");
$servicesCss->minify(dirname(__DIR__, 1) . "/assets/css/style-services.min.css");

/**
 * BLOG CSS
 */
$blogCss = new MatthiasMullie\Minify\CSS();
$blogCss->add(dirname(__DIR__, 1) . "/assets/css/style-blog.css");
$blogCss->minify(dirname(__DIR__, 1) . "/assets/css/style-blog.min.css");

/**
 * CATEGORY CSS
 */
$categoryCss = new MatthiasMullie\Minify\CSS();
$categoryCss->add(dirname(__DIR__, 1) . "/assets/css/style-category.css");
$categoryCss->minify(dirname(__DIR__, 1) . "/assets/css/style-category.min.css");

/**
 * PROJECTS CSS
 */
$projectsCss = new MatthiasMullie\Minify\CSS();
$projectsCss->add(dirname(__DIR__, 1) . "/assets/css/style-projects.css");
$projectsCss->minify(dirname(__DIR__, 1) . "/assets/css/style-projects.min.css");

/**
 * SIMULATOR CSS
 */
$simulatorCss = new MatthiasMullie\Minify\CSS();
$simulatorCss->add(dirname(__DIR__, 1) . "/assets/css/style-simulator.css");
$simulatorCss->minify(dirname(__DIR__, 1) . "/assets/css/style-simulator.min.css");

/**
 * SIMULATOR GOOGLE CSS
 */
$simulatorGoogleCss = new MatthiasMullie\Minify\CSS();
$simulatorGoogleCss->add(dirname(__DIR__, 1) . "/assets/css/style-simulator-google.css");
$simulatorGoogleCss->minify(dirname(__DIR__, 1) . "/assets/css/style-simulator-google.min.css");

/**
 * SINGLE CSS
 */
$singleCss = new MatthiasMullie\Minify\CSS();
$singleCss->add(dirname(__DIR__, 1) . "/assets/css/style-single.css");
$singleCss->minify(dirname(__DIR__, 1) . "/assets/css/style-single.min.css");

/**
 * CONSULTANCY CSS
 */
$consultancyCss = new MatthiasMullie\Minify\CSS();
$consultancyCss->add(dirname(__DIR__, 1) . "/assets/css/style-consultancy.css");
$consultancyCss->minify(dirname(__DIR__, 1) . "/assets/css/style-consultancy.min.css");

/**
 * 404
 */
$errorCss = new MatthiasMullie\Minify\CSS();
$errorCss->add(dirname(__DIR__, 1) . "/assets/css/style-error.css");
$errorCss->minify(dirname(__DIR__, 1) . "/assets/css/style-error.min.css");

/**
 * js
 */
$homeJs = new MatthiasMullie\Minify\JS();
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sticky.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/scroll.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/counterup.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.counterup.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.waypoints.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/sweetalert2.all.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/request.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/animation.js");
$homeJs->minify(dirname(__DIR__, 1) . "/assets/js/script-home.min.js");

/**
 * SERVICES JS
 */
$servicesJs = new MatthiasMullie\Minify\JS();
$servicesJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$servicesJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$servicesJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/sticky.js");
$servicesJs->add(dirname(__DIR__, 1) . "/assets/js/theme/scroll.js");
$servicesJs->minify(dirname(__DIR__, 1) . "/assets/js/script-services.min.js");

/**
 * BLOG JS
 */
$blogJs = new MatthiasMullie\Minify\JS();
$blogJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$blogJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$blogJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/sticky.js");
$blogJs->add(dirname(__DIR__, 1) . "/assets/js/theme/scroll.js");
$blogJs->add(dirname(__DIR__, 1) . "/assets/js/theme/blog/animation.js");
$blogJs->minify(dirname(__DIR__, 1) . "/assets/js/script-blog.min.js");

/**
 * CATEGORY JS
 */
$categoryJs = new MatthiasMullie\Minify\JS();
$categoryJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$categoryJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$categoryJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/sticky.js");
$categoryJs->minify(dirname(__DIR__, 1) . "/assets/js/script-category.min.js");

/**
 * PROJECTS JS
 */
$projectsJs = new MatthiasMullie\Minify\JS();
$projectsJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$projectsJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$projectsJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/sticky.js");
$projectsJs->minify(dirname(__DIR__, 1) . "/assets/js/script-projects.min.js");

/**
 * SIMULATOR JS
 */
$simulatorJs = new MatthiasMullie\Minify\JS();
$simulatorJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$simulatorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$simulatorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/sticky.js");
$simulatorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/simulator/animation.js");
$simulatorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/simulator/visor.js");
$simulatorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/simulator/request.js");
$simulatorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/simulator/request-sender.js");
$simulatorJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/sweetalert2.all.js");
$simulatorJs->minify(dirname(__DIR__, 1) . "/assets/js/script-simulator.min.js");

/**
 * SIMULATOR GOOGLE JS
 */
$simulatorGoogleJs = new MatthiasMullie\Minify\JS();
$simulatorGoogleJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$simulatorGoogleJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$simulatorGoogleJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/sticky.js");
$simulatorGoogleJs->add(dirname(__DIR__, 1) . "/assets/js/theme/simulator/visor.js");
$simulatorGoogleJs->add(dirname(__DIR__, 1) . "/assets/js/theme/simulator-google/request.js");
$simulatorGoogleJs->add(dirname(__DIR__, 1) . "/assets/js/theme/simulator-google/request-sender.js");
$simulatorGoogleJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/sweetalert2.all.js");
$simulatorGoogleJs->minify(dirname(__DIR__, 1) . "/assets/js/script-simulator-google.min.js");

/**
 * SINGLE JS
 */
$singleJs = new MatthiasMullie\Minify\JS();
$singleJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$singleJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$singleJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/sticky.js");
$singleJs->minify(dirname(__DIR__, 1) . "/assets/js/script-single.min.js");

/**
 * CONSULTANCY JS
 */
$consultancyJs = new MatthiasMullie\Minify\JS();
$consultancyJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$consultancyJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$consultancyJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sticky.js");
$consultancyJs->add(dirname(__DIR__, 1) . "/assets/js/theme/consultancy/request.js");
$consultancyJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/sweetalert2.all.js");
$consultancyJs->minify(dirname(__DIR__, 1) . "/assets/js/script-consultancy.min.js");

/**
 * Error
 */
$errorJs = new MatthiasMullie\Minify\JS();
$errorJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$errorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$errorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sticky.js");
$errorJs->minify(dirname(__DIR__, 1) . "/assets/js/script-error.min.js");