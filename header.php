<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="navstart">
        <nav>
            <div class="navbar">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="ITEN">
                    </a>
                </div>
                <div class="menu">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => false
                        ));
                    ?>
                </div>
                <div class="requestademo">
                    <a href="#" class="btn">Request a Demo</a>
                </div>
            </div>
        </nav>
    </div>
</header>
