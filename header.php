<?php

declare(strict_types=1);

require __DIR__ . '/data.php';
$language = $languages[$_GET['lang']];
if (!isset($language)) {
  header('Location: header.php?lang=en');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="assets/style/style.css">
  <link rel="stylesheet" type="text/css" href="assets/style/mediaQuery.css">
  <title>FastSecure</title>
</head>

<body>
  <nav class="navbar">
    <img class="logo-img" src="assets/mobil-images/logoMobile.svg" alt="">
    <img class="logo-img-desktop" src="assets/icons/LOGO.png" alt="">
    <span class="open-slide">
      <a class="open-slide-menu" onclick="openSlideMenu()">
        <svg width="30" height="30">
          <path d="M0,5 30,5" stroke="#fff" stroke-width="2" />
          <path d="M0,14 30,14" stroke="#fff" stroke-width="2" />
          <path d="M0,23 30,23" stroke="#fff" stroke-width="2" />
        </svg>
      </a>
    </span>
    <ul class="navbar-nav">
      <li class="nav-link"><a class="active" href="#home"><?= $language['home']; ?></a></li>
      <li class="nav-link"><a href="#about"><?= $language['about']; ?></a></li>
      <li class="nav-link"><a href="#more"><?= $language['merch']; ?></a></li>
      <li class="nav-link"><a href=""><?= $language['langauge']; ?></a>
        <ul class="dropdown">
          <a class="dropdown-link" href="?lang=sv">Svenska</a>
          <a class="dropdown-link" href="?lang=en">English</a>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="side-menu" class="side-nav">
    <a class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a class="nav-link-m" class="active" href="#home"><?= $language['home']; ?></a>
    <a class="nav-link-m" href="#about"><?= $language['about']; ?></a>
    <a class="nav-link-m" href="#more"><?= $language['merch']; ?></a>
    <a class="nav-link-m" href="#more">Privacy & Legacy</a>
    <a class="nav-link-m" href="#more"><?= $language['contact']; ?></a>
    <div class="logo">
      <div class="logos-1">
        <div class="facebook">
          <img src="assets/icons/face.svg" alt="">
        </div>
        <div class="instagram">
          <img src="assets/icons/insta.svg" alt="">
        </div>
      </div>
      <div class="logos-2">
        <div class="in">
          <img src="assets/icons/linked.svg" alt="">
        </div>
        <div class="twitter">
          <img src="assets/icons/twitt.svg" alt="">
        </div>
      </div>
    </div>
    <div class="side-menu-Langauge">
      <a class="en" href="?lang=en">EN</a>
      <hr width="1" size="23">
      <a class="sv" href="?lang=sv">SV</a>
    </div>
    <div class="saab">
      <img src="assets/mobil-images/Saablogo.svg" alt="">
    </div>
    <div class="saab-text">
      <p>Saab AB © 2018</p>
    </div>
  </div>