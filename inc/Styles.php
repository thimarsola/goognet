<?php

//REGISTER CSS
function loadCSS()
{
    if(is_home()){
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css', [], null, 'all');
    }elseif (is_page('Divulgação Google') || is_page('Divulgação Face & Insta') || is_page('Criação Website') || is_page('Identidade Visual') || is_page('Criação de Imagens') || is_page('Criação E-commerce')){
        wp_enqueue_style('services', get_template_directory_uri() . '/assets/css/style-services.min.css', [], null, 'all');
    }elseif (is_page('Blog')){
        wp_enqueue_style('blog', get_template_directory_uri() . '/assets/css/style-blog.min.css', [], null, 'all');
    }elseif (is_page('Projetos')){
        wp_enqueue_style('projects', get_template_directory_uri() . '/assets/css/style-projects.min.css', [], null, 'all');
    }elseif (is_page('Simulador')){
        wp_enqueue_style('simulator', get_template_directory_uri() . '/assets/css/style-simulator.min.css', [], null, 'all');
    }elseif (is_page('Simulador Google')){
        wp_enqueue_style('simulator-google', get_template_directory_uri() . '/assets/css/style-simulator-google.min.css', [], '1.0.0', 'all');
    }elseif (is_page('Consultoria')){
        wp_enqueue_style('consultancy', get_template_directory_uri() . '/assets/css/style-consultancy.min.css', [], '1.0.0', 'all');
    }elseif (is_page()){
        wp_enqueue_style('page', get_template_directory_uri() . '/assets/css/style-product.min.css', [], null, 'all');
    }elseif (is_single()){
        wp_enqueue_style('single', get_template_directory_uri() . '/assets/css/style-single.min.css', [], null, 'all');
    }elseif (is_archive()){
	    wp_enqueue_style('category', get_template_directory_uri() . '/assets/css/style-category.min.css', [], null, 'all');
    }elseif(is_404()){
        wp_enqueue_style('error', get_template_directory_uri() . '/assets/css/style-error.min.css', [], null, 'all');
    }
}

add_action('wp_enqueue_scripts', 'loadCSS');

function dm_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'dm_remove_wp_block_library_css' );