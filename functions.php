<?php

// dans lequel on va pouvoir activer et ajouter des fonctionnalités -->

function registerMyMenu() {
    register_nav_menu('header', 'Mon menu principal');
    register_nav_menu('footer', 'Mon menu légal');
}

add_action('after_setup_theme', 'registerMyMenu');


// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );
