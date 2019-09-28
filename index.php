<?php

declare(strict_types=1);

require __DIR__ . '/data.php';
require __DIR__ . '/header.php';

$language = $languages[$_GET['lang']];
if (!isset($language)) {
  header('Location: index.php?lang=en');
}
?>
<main>
  <div class="container section" id="home">
    <img class="img" src="assets/images/studio_wide.jpg" alt="">
    <div class="rotate">
      <h1 class="fs">FS 1.0</h1>
    </div>
    <div class="P">
      <h1><?= $language['title']; ?></h1>
      <p class="fast"><?= $language['titleP']; ?></p>
    </div>
    <div class="centered">
      <p class="join"><?= $language['registerText']; ?></p>
      <p class="limited"><?= $language['registerTextP']; ?></p>
      <div class="email">
        <div class="enter">
          <form action="index.php" method="post">


            <input class="email-white" type="email" name="email" id="email" placeholder="e-mail@email.com">

            <!-- <div class="emailWhite">Your e-mail</div> -->
        </div>
        <div class="button1"><a class="sign-up" href=""><?= $language['signUp']; ?></a></div>
      </div>
      <div class="enter2">
        <div class="email-red"><?= $language['emailRed']; ?></div>
      </div>
    </div>

    <a class="button" href="#popup1">
      <img class="plus-popup" alt="" src="assets/mobil-images/plus.svg" width="50" height="50"></a>
    <div id="popup1" class="overlay">
      <div class="popup">
        <a class="close" href=""> &times;</a>
        <div class="content">
          <h1 class="join"><?= $language['registerText']; ?></h1>
          <p class="limited"><?= $language['registerTextP']; ?></p>
          <form action="index.php" method="post">
            <input class="email-white-mobile" type="email" name="email" id="email" placeholder="e-mail@email.com">
            <div class="enter3">
              <div class="email-red-mobile"><?= $language['emailRed']; ?></div>
            </div>
            <div class="signup-button-div">
              <button class="signup-button"><?= $language['signUp']; ?></button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="logos">
      <div class="facebook">
        <img src="assets/icons/face.svg" alt="">
      </div>
      <div class="in">
        <img src="assets/icons/linked.svg" alt="">
      </div>
      <div class="twitter">
        <img src="assets/icons/twitt.svg" alt="">
      </div>
      <div class="instagram">
        <img src="assets/icons/insta.svg" alt="">
      </div>
    </div>
  </div>

  <div class="container2 section" id="about">
    <img class="img2" src="assets/images/2d_wheels.png" alt="">
    <div class="rotate2">
      <h1 class="about"><?= $language['about']; ?></h1>
    </div>
    <div class="text">
      <p><?= $language['content']; ?></p>
    </div>
  </div>
  <div class="container3 section" id="more">
    <img class="img3" src="assets/images/watch_studio_shadow.png" alt="">
    <div class="rotate3">
      <h1 class="more"><?= $language['merch']; ?></h1>
    </div>
    <div class="watch">
      <p class="bold"><?= $language['watch']; ?></p>
    </div>
    <img class="img4" src="assets/images/glasses_shadow.png" alt="">
    <div class="glasses">
      <p class="bold"><?= $language['glasses']; ?></p>
    </div>
  </div>
  <div class="container4">
    <img class="img5" src="assets/images/models1.0.jpg" alt="">
    <div class="centered2">
      <p class="join"><?= $language['registerText']; ?></p>
      <p class="limited"><?= $language['registerTextP']; ?></p>
      <div class="email">
        <div class="enter">
          <form action="index.php" method="post">
            <input class="email-white" type="email" name="email" id="email" placeholder="e-mail@email.com">
        </div>
        <div class="button1"><a class="sign-up" href=""><?= $language['signUp']; ?></a></div>
      </div>
      <div class="email-red"><?= $language['emailRed']; ?></div>
    </div>
    <div class="logos2">
      <div class="facebook">
        <img src="assets/icons/face.svg" alt="">
      </div>
      <div class="in">
        <img src="assets/icons/linked.svg" alt="">
      </div>
      <div class="twitter">
        <img src="assets/icons/twitt.svg" alt="">
      </div>
      <div class="instagram">
        <img src="assets/icons/insta.svg" alt="">
      </div>
    </div>
  </div>
  <div class="container5 section">
    <div class="footer-text">
      <h3><?= $language['registerText']; ?></h3>
      <p><?= $language['title']; ?></p>
    </div>
  </div>
</main>

<script type="text/javascript" src="assets/script/script.js"></script>
</body>

</html>

<?php
require __DIR__ . '/footer.php';
?>