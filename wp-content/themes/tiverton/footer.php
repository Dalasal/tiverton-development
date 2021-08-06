<?php
$menu = wp_get_nav_menu_object("Footer Second" );
$menuOne = wp_get_nav_menu_object("Footer First" );
$site_info = get_fields('option');
//dd($site_info["about_site"]);
?>

<footer>
    <div class="footer-wrapper">
        <div class="container">
            <div class="menu-footer">
                <div class="menu-footer__first">
                    <div class="menu-footer__title menu-footer__title-mobile"><?php echo $menuOne->name;?></div>
                    <?php
                    wp_nav_menu([
                        'theme_location'  => 'menu-footer-first',
                        'container'       => 'nav',
                        'container_class' => 'nav-menu-footer-left footer-menu-container',
                        'menu_class'      => 'nav-list-footer-left footer-menu',
                    ]);
                    ?>
                </div>
                <div class="menu-footer__second">
                    <div class="menu-footer__title menu-footer__title-mobile"><?php echo $menu->name;?></div>
                    <?php
                    wp_nav_menu([
                        'theme_location'  => 'menu-footer-second',
                        'container'       => 'nav',
                        'container_class' => 'nav-menu-footer-left footer-menu-container',
                        'menu_class'      => 'nav-list-footer-left footer-menu',
                    ]);
                    ?>
                </div>
                <div class="menu-footer__contact">
                    <div class="menu-footer__title menu-footer__title-mobile"><?php _e('Contact', 'tiverton');?></div>
                    <div class="contact-toggle">
                        <div><?php echo $site_info["address"];?></div>
                        <div class="menu-footer__urls">
                            <span><a href="mailto:<?php echo $site_info["email"];?>"><?php echo $site_info["email"];?></a></span>
                            <span><a href="tel:<?php echo $site_info["tel"];?>"><?php echo $site_info["tel"];?></a></span>
                        </div>
                    </div>
                    <div class="menu-footer__privacy">
                        <span><a href="<?php echo $site_info["privacy_policy_url"];?>"><?php echo $site_info["privacy_policy"];?></a></span>
                        <span class="delimeter">|</span>
                        <span><a href="<?php echo $site_info["announcements_url"];?>"><?php echo $site_info ["announcements"];?></a></span>
                    </div>
                </div>
                <div class="menu-footer__icons">
                    <div class="menu-footer__logo">
                        <img src="<?php echo $site_info["site_info"]["site_logo"]; ?>" alt="<?php echo $site_info["site_info"]["alt_logo"]; ?>">
                    </div>
                    <div class="social-icons">
                        <img src="/wp-content/uploads/2021/08/__-1.png">
                    </div>
                </div>
            </div>
            <div class="footer-info"><?php echo $site_info["about_site"];?></div>
        </div>
    </div>
</footer>
</div>
</body>
</html>
