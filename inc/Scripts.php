<?php

//REGISTER JS
function loadJS()
{
    if(is_home()){
        wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/script-home.min.js', [], '1.0.0', true);
    }elseif (is_page('Blog')){
        wp_enqueue_script('blog', get_template_directory_uri() . '/assets/js/script-blog.min.js', [], '1.0.0', true);
    }elseif (is_page()){
	    wp_enqueue_script('page', get_template_directory_uri() . '/assets/js/script-product.min.js', [], '1.0.0', true);
    }elseif (is_single()){
        wp_enqueue_script('single', get_template_directory_uri() . '/assets/js/script-single.min.js', [], '1.0.0', true);
    }elseif (is_404()){
        wp_enqueue_script('error', get_template_directory_uri() . '/assets/js/script-error.min.js', [], '1.0.0', true);
    }
}

add_action('wp_enqueue_scripts', 'loadJS');