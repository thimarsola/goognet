<?php

//REGISTER JS
function loadJS()
{
    if(is_home()){
        wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/script-home.min.js', [], null, true);
    }elseif (is_page('Divulgação Google') || is_page('Divulgação Face & Insta') || is_page('Criação Website') || is_page('Identidade Visual') || is_page('Criação de Imagens') || is_page('Criação E-commerce')){
        wp_enqueue_script('services', get_template_directory_uri() . '/assets/js/script-services.min.js', [], null, true);
    }elseif (is_page('Blog')){
        wp_enqueue_script('blog', get_template_directory_uri() . '/assets/js/script-blog.min.js', [], null, true);
    }elseif (is_page('Projetos')){
        wp_enqueue_script('projects', get_template_directory_uri() . '/assets/js/script-projects.min.js', [], null, true);
    }elseif (is_page('Simulador')){
        wp_enqueue_script('simulator', get_template_directory_uri() . '/assets/js/script-simulator.min.js', [], null, true);
    }elseif (is_page('Simulador Google')){
        wp_enqueue_script('simulator-google', get_template_directory_uri() . '/assets/js/script-simulator-google.min.js', [], null, true);
    }elseif (is_page('Consultoria')){
        wp_enqueue_script('consultancy', get_template_directory_uri() . '/assets/js/script-consultancy.min.js', [], null, true);
    }elseif (is_page()){
	    wp_enqueue_script('page', get_template_directory_uri() . '/assets/js/script-product.min.js', [], null, true);
    }elseif (is_single()){
        wp_enqueue_script('single', get_template_directory_uri() . '/assets/js/script-single.min.js', [], null, true);
    }elseif (is_archive()){
        wp_enqueue_script('category', get_template_directory_uri() . '/assets/js/script-category.min.js', [], null, true);
    }elseif (is_404()){
        wp_enqueue_script('error', get_template_directory_uri() . '/assets/js/script-error.min.js', [], null, true);
    }
}

add_action('wp_enqueue_scripts', 'loadJS');