<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <? wp_head(); ?>
</head>

<body class="page bg--primary">

    <!-- Header -->
    <header class="header <?php if( is_front_page() ) echo 'header--front-page'; ?>">
        <div class="header__body container">
            <a href="<?php echo home_url(); ?>" class="header__logo logo">
                <?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
                <?php if( !empty($custom_logo__url[0])) : ?>
                    <img src="<?php echo $custom_logo__url[0]; ?>" alt="Логотип" class="header__logo-img logo__img">
                <?php else : ?>
                    <img src="<?php echo STANDART_DIR; ?>img/logo.svg" alt="Логотип" class="header__logo-img logo__img">
                <?php endif; ?>
            </a>
            <div class="header__inner js-menu">
                <?php
                    wp_nav_menu([
                        'theme_location'  => 'header-menu',
                        'container'       => 'nav',
                        'container_class' => 'header__menu menu',
                        'menu_class'      => '',
                        'items_wrap'      => '<ul class="%2$s header__menu-list menu__list">%3$s</ul>'
                    ]);
                ?>
            </div>
            <div class="header__search hide">
                <svg class="header__search-icon" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.25 12.752L1.5 16.502L5.25 12.752ZM3.375 8.06445C3.375 11.6888 6.31313 14.627 9.9375 14.627C13.5619 14.627 16.5 11.6888 16.5 8.06445C16.5 4.44009 13.5619 1.50195 9.9375 1.50195C6.31313 1.50195 3.375 4.44009 3.375 8.06445Z" stroke="white" stroke-opacity="0.45"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="header__burger-menu burger-menu js-burger">
                <span class="burger-menu__line"></span>
            </div>
        </div>
    </header>
    <!-- /. Header -->

    <!-- MAIN -->
    <main class="main page__container">
        <?php if( is_front_page() ) : ?>
            <div class="scroll-container">
        <?php endif; ?>