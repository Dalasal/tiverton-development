<?php
require get_template_directory() . '/custom-function-part.php';
add_filter('show_admin_bar', '__return_false');


if (!function_exists('dd')) {
    function dd()
    {
        echo '<pre>';
        array_map(function ($x) {
            var_dump($x);
        }, func_get_args());
        die;
    }
}

function fc_custom_register_acf_blocks()
{
    $acfBlocks = [
        'acf_block_hero'       => 'Hero Module',
        'acf_block_what_we_do' => 'What we Do',
    ];

    foreach ($acfBlocks as $name => $title) {
        acf_register_block_type(
            [
                'name'            => $name,
                'title'           => __($title),
                'description'     => __(''),
                'render_callback' => 'theme_acf_blocks_render_callback',
                'category'        => 'common',
                'icon'            => 'slides',
                'keywords'        => ['image', 'title', 'text'],
                'mode'            => 'edit',
            ]
        );
    }
}

add_action('acf/init', 'fc_custom_register_acf_blocks');

/**
 * Enable ACF Blocks render function
 */
if (!function_exists('theme_acf_blocks_render_callback')) {

    function theme_acf_blocks_render_callback($block)
    {
        $slug = str_replace('acf/', '', $block['name']);
        $slug = str_replace('acf-block-', '', $slug);

        if (file_exists(get_theme_file_path("/blocks/acf-block-{$slug}.php"))) {
            include(get_theme_file_path("/blocks/acf-block-{$slug}.php"));
        }
    }

}

function norskgolf_setup()
{
    register_nav_menu('main-menu', 'Main Menu');
}

add_action('after_setup_theme', 'norskgolf_setup');


if (function_exists('acf_add_options_page')) {

    acf_add_options_page([
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
    ]);
}

function theme_name_scripts_child()
{
    wp_enqueue_style('app-style', get_stylesheet_directory_uri() . '/dest/app.css');

}

add_action('wp_enqueue_scripts', 'theme_name_scripts_child');
