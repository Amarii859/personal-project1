<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?> <!-- REQUIRED FOR CSS -->
</head>

<body <?php body_class(); ?>>

<header>
    <h1><?php bloginfo('name'); ?></h1>
    <p>AC Milan Fan Theme</p>
</header>

<nav>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'main_menu',
        'container' => false,
        'menu_class' => 'menu'
    ));
    ?>
</nav>

