<?php

declare(strict_types=1);

require __DIR__.'/data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>FastSecure</title>
</head>
<body>

    <nav class="navbar">

        <img class="logo-img" src="/images/logo.png" alt="">

      <span class="open-slide">
        <a class="open-slide-menu" href="#" onclick="openSlideMenu()">
          <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5" />
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5" />
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5" />
          </svg>
        </a>
      </span>
      <ul class="navbar-nav">
        <li class="nav-link"><a class="active" href="#home">Home</a></li>
        <li class="nav-link"><a  href="#about">About</a></li>
        <li class="nav-link"><a  href="#more">More</a></li>
        <li class="nav-link"><a  href="#">Langauge</a>
        <ul class="dropdown">
          <a class= "dropdown-link" href="#">Svenska</a>
          <a href="#">English</a>
        </ul>
        </li>
      </ul>
    </nav>
    <div id="side-menu" class="side-nav">
      <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
      <a class="nav-link" href="#">Home</a>
      <a class="nav-link" href="#">History</a>
      <a class="nav-link" href="#">More</a>
      <div class="side-menu-Langauge">
        <a href="#">EN</a>
        <a href="#">SV</a>
      </div>

    </div>
