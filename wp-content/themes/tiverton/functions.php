<?php

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

function tiverton_theme_setup() {
    register_nav_menus( array(
        'header' => 'Header menu',
        'footer' => 'Footer menu'
    ) );
}

add_action( 'after_setup_theme', 'tiverton_theme_setup' );

register_nav_menus( array(
    'header' => 'Header menu',
    'footer' => 'Footer menu'
) );

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


function myplugin_register_settings() {
    add_option( 'myplugin_option_name', 'This is my option value.');
    register_setting( 'myplugin_options_group', 'myplugin_option_name', 'myplugin_callback' );
}
add_action( 'admin_init', 'myplugin_register_settings' );

function myplugin_register_options_page() {
    add_options_page('Page Title', 'Add Discount By Country', 'manage_options', 'myplugin', 'myplugin_options_page');
}
add_action('admin_menu', 'myplugin_register_options_page');

function myplugin_options_page()
{
    ?>
    <div>
        <h2>My Plugin Page Title</h2>
        <form method="post" action="options.php">
            <?php settings_fields( 'myplugin_options_group' ); ?>
            <h3>This is my option</h3>
            <p>Some text here.</p>
            <table>
                <tr valign="top">
                    <th scope="row"><label for="myplugin_option_name">Label</label></th>
                    <td><input type="text" id="myplugin_option_name" name="myplugin_option_name" value="<?php echo get_option('myplugin_option_name'); ?>" /></td>
                </tr>
            </table>
            <?php  submit_button(); ?>
        </form>
    </div>
    <?php
}