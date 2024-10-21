<?php
$rootDir = dirname(__DIR__, 1);  // Move up one directory level
require_once($rootDir . '/includes/main.php');

?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SV-unity</title>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

    <script src="<?= CustomFunctions::getRootUrl(); ?>js/main.js" defer></script>
    <script src="<?= CustomFunctions::getRootUrl(); ?>js/swiper.js" defer></script>
    <script src="<?= CustomFunctions::getRootUrl(); ?>js/fontawesome.js" defer></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CustomFunctions::getRootUrl(); ?>css/style.css">
</head>

<body>
    <nav class="nav">
        <ul class="nav__list">
            <li  class="nav__listItem"> <a href="<?= CustomFunctions::getRootUrl(); ?>"><img class="nav__img" src="<?= CustomFunctions::getRootUrl(); ?>logo/sv-unity-logo.png" alt=""></a></li>
            <li class="nav__listItem nav__listItem-text"> <a href="#">Over ons</a></li>
            <li class="nav__listItem nav__listItem-text"> <a href="information/information.php">Informatie</a></li>
            <li class="nav__listItem nav__listItem-text"> <a href="#">Contact</a></li>
            <li class="nav__listItem nav__listItem-text"> <a href="<?= CustomFunctions::getRootUrl(); ?>evenementen.php">Evenementen</a></li>
            <li class="menu-button"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="40"
                        viewBox="0 -960 960 960" width="40" fill="#eee">
                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                    </svg></a></li>
        </ul>
        <ul class="nav__list__sideBar">
            <li class="close-bar"> <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#0B192C">
                        <path
                            d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                    </svg>
                </a>
            </li>
            <li class="nav__listItem__sideBar-mobile"> <a href="#">Over ons</a></li>
            <li class="nav__listItem__sideBar-mobile"> <a href="#">Informatie</a></li>
            <li class="nav__listItem__sideBar-mobile"> <a href="#">Contact</a></li>
            <li class="nav__listItem__sideBar-mobile"> <a href="<?= CustomFunctions::getRootUrl(); ?>evenementen.php">Evenementen</a></li>
        </ul>
    </nav>