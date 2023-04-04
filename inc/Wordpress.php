<?php

//remove head
remove_action('wp_head', 'wp_resource_hints', 2, 99);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'robots');
remove_filter('wp_robots', 'wp_robots_max_image_preview_large');

/**
 * Fix self-closing link tags.
 */
function disable_self_closing_tags(): void
{
    ob_start(function ($input) {
        return str_replace('/>', '>', $input);
    });
}

add_action('wp_head', 'disable_self_closing_tags', 1);
