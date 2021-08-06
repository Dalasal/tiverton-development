<?php
$site_info = get_fields('option');
?>

<!doctype html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo('description', 'display'); ?>">
    <?php wp_head(); ?>
</head>
<body>
<div class="site">
    <div class="site-header">
        <div class="container-fluid-full red-background">
            <div class="container">
                <div class="site-info">
                    <div class="site-info__description"><?php echo $site_info["site_info"]["theme_header_description"]; ?></div>
                    <div class="site-info__contact">
                        <div class="site-info__phone"><?php echo $site_info["site_info"]["phone_number"]; ?></div>
                        <div class="site-info__delimeter">|</div>
                        <div class="site-info__email"><?php echo $site_info["site_info"]["email"]; ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-image">
            <div class="container-fluid-full">
                <div class="container">
                    <div>11122222222221444444444</div>
                    <div class="nav-header">
                        <div class="header-wrapper">
                            <div class="header-wrapper__logo">
                                <a href="<?php echo site_url();?>"><img src="<?php echo $site_info["site_info"]["site_logo"]; ?>" alt="<?php echo $site_info["site_info"]["alt_logo"]; ?>"></a>
                            </div>
                            <div class="header-wrapper__menu">
                                <?php
                                wp_nav_menu([
                                    'theme_location'  => 'main-menu',
                                    'container'       => 'nav',
                                    'container_class' => 'nav-menu-footer header-menu-container',
                                    'menu_class'      => 'nav-list-header',
                                ]);
                                ?>
                            </div>
                            <div class="mobile-menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>