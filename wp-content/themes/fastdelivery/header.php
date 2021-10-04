<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        <?php if (is_front_page()) : ?>
            <?php bloginfo('name') ?>
        <?php elseif (is_single()) : ?>
            <?php echo wp_title('', true, ''); ?>
        <?php else : ?>
            <?php echo wp_title('', true, ''); ?>
        <?php endif ?>
    </title>


    <!-- <link href="< ?php echo get_template_directory_uri() ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> Bootstrap CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/css/reset-css.css" rel="stylesheet"> <!-- Reset CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/css/my-custom.css" rel="stylesheet"> <!-- My custom CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/css/style.css" rel="stylesheet"> <!-- Style CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/vendor/Font-Awesome/css/font-awesome.min.css" rel="stylesheet"> <!-- font-awesome 4.7 CSS -->

    <!-- slick -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/slick/slick-theme.css">

    <!-- fullPage -->
    <!-- <link rel="stylesheet" type="text/css" href="< ?php echo get_template_directory_uri() ?>/vendor/fullPage/css/fullpage.css" /> -->
    <?php if (is_front_page()) : ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/vendor/onepage/onepagescroll.css" />
    <?php endif; ?>

    <link href="<?php echo get_template_directory_uri() ?>/css/responsive.css" rel="stylesheet"> <!-- Responsive CSS -->
    <?php wp_head() ?>
</head>

<body>

    <!-- Navigation -->
    <header>
        <div class="header <?php echo !is_front_page() ? 'bg-white' : null; ?>">
            <div class="wrapper-og">
                <div class="header__ctn">
                    <div class="header__logo-wrap">
                        <div class="header__logo-dark">
                            <?php $logo_dark = get_theme_mod('Logo-dark'); ?>
                            <a href="<?php echo home_url() ?>">
                                <?php if (!empty($logo_dark)) { ?>
                                    <img src="<?php echo $logo_dark; ?>" alt="logo" width="100%" />
                                <?php } ?>
                            </a>
                        </div>
                        <div class="header__logo-light">
                            <?php $logo_light = get_theme_mod('Logo-light'); ?>
                            <a href="<?php echo home_url() ?>">
                                <?php if (!empty($logo_light)) { ?>
                                    <img src="<?php echo $logo_light; ?>" alt="logo" width="100%" />
                                <?php } ?>
                            </a>
                        </div>
                    </div>

                    <div class="header__menu">
                        <div class="header__bars-icon">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>

                        <div class="button-close">
                            <span class="button-close__icon"></span>
                        </div>


                        <?php
                        if (is_front_page()) :
                            wp_nav_menu(
                                array(
                                    'theme_location'  => 'home-menu',
                                    'depth'  => 3,
                                    'container'  => 'nav',
                                    'menu_class'  => 'header__menu-nav',
                                )
                            );
                        else :
                            wp_nav_menu(
                                array(
                                    'theme_location'  => 'main-menu',
                                    'depth'  => 3,
                                    'container'  => 'nav',
                                    'menu_class'  => 'header__menu-nav',
                                )
                            );
                        endif;
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </header>