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
  <header>

    <nav>
      <input type="checkbox" id="checkbox1" />
      <label for="checkbox1">
        <ul class="menu first">
          <div class="dropdown">
            <li><a class="link" href="#">Språk</a>
              <div class="dropContent">
                <a href="index.php">Engelska</a>
                <a href="svenska.php">Svenska</a>
              </div>
            </li>
          </div>
          <!-- <li><a class="link" href="index.html">Språk</a></li> -->
          <li><a class="" href="#">Histora</a></li>
          <li><a class="" href="#">Om Oss</a></li>
          <li><a class="download"  href="#">Newsletter</a></li>
          <li><a class="" href="signupsvenska.php">Registrera Dig</a></li>
          <li><a class="" href="#">Logga In</a></li>
        </ul>
      <span class="toggle">☰</span>
    </label>
    </nav>
  </header>
