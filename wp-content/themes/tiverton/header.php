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
                    <div class="site-info__description"><?php echo $site_info["site_info"]["theme_header_description"];?></div>
                    <div class="site-info__contact">
                        <div class="site-info__phone"><?php echo $site_info["site_info"]["phone_number"];?></div>
                        <div class="site-info__delimeter">|</div>
                        <div class="site-info__email"><?php echo $site_info["site_info"]["email"];?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-image">
            <img class="background-image__img" src="/wp-content/uploads/2021/07/Bespoke_Vessels__Chambers.png">
            <div class="container-fluid-full">
                <div class="container">
                    <div class="nav-header">
                        <div class="header-wrapper">
                            <div class="header-wrapper__logo">
                                <img src="<?php echo $site_info["site_info"]["site_logo"]; ?>" alt="<?php echo $site_info["site_info"]["alt_logo"]; ?>">
                            </div>
                            <div class="header-wrapper__menu">
                                <ul class="header-wrapper__list">
                                    <li class="header-wrapper__item"><?php echo 'menu 1'; ?></li>
                                    <li class="header-wrapper__item"><?php echo 'menu 1'; ?></li>
                                    <li class="header-wrapper__item btn"><?php echo 'menu 1'; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="site-title">TITLE</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="video-block">
    VIDEO
    <iframe width="560" height="315" src="https://www.youtube.com/embed/0bCpUoTMEGA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <!--            <iframe src="--><?php //echo 'https://www.youtube.com/embed/' . $url; ?><!--" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
</div>

<!---->
<!--    <div style="max-width: 1600px; height: 400px; margin: 0 auto;">-->
<!--        <img src="/wp-content/uploads/2021/07/Bespoke_Vessels__Chambers.png" width="100%" height="100%">-->
<!--    </div>-->