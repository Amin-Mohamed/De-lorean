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
    <nav> <!-- Navbar -->
      <input type="checkbox" id="checkbox1" />
      <label for="checkbox1">
        <ul class="menu first">
          <div class="dropdown"> <!-- Div dropdown -->
            <li><a class="link" href="#">Language</a>
              <div class="dropContent"> <!-- Div dropContent -->
                <a href="index.php">English</a>
                <a href="svenska.php">Swedish</a>
              </div> <!-- /Div dropContent -->
            </li>
          </div> <!-- /Div dropdown -->
          <li><a class="" href="#">History</a></li>
          <li><a class="" href="#">About Us</a></li>
          <li><a class="download" href="#">Newsletter</a></li>
          <li><a class="" href="signup.php">Sign Up</a></li>
          <li><a class="" href="#">Log In</a></li>
        </ul>
      <span class="toggle">☰</span>
    </label>
  </nav> <!-- /Navbar -->
  </header>
