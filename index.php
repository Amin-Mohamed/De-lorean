<?php
declare(strict_types=1);

require __DIR__.'/header.php';
?>
<main>
  <div class="container section" id="home" >
    <img class="img" src="/images/studio_wide.jpg" alt="">
    <div class="rotate">
      <h1 class="fs">FS 1.0</h1>
    </div>
    <div class="P">
      <h1>YOU ARE SPECIAL.</h1>
      <p class="fast"> FASTSECURITY 1.0</p>
    </div>
    <div class="centered">
      <p class="join">Join the future</p>
      <p class="limited">And get a free limited folder</p>
      <div class="email">
        <div class="enter">
          <form action="index.php" method="post">


            <input class="email-white" type="email" name="email" id="email" placeholder="e-mail@email.com">

          <!-- <div class="emailWhite">Your e-mail</div> -->
        </div>
        <div class="button1"><a class="sign-up" href="#">Sign up</a></div>
      </div>
      <div class="enter2">
        <div class="email-red">Please ener your e-mail</div>
      </div>
    </div>

    <a class="button" href="#popup1" >
    <img class="plus-popup" alt="" src="mobil-images/plus.svg" width="40" height="40"></a>
    <div id="popup1" class="overlay">
      <div class="popup">
        <a class="close" href="#">&times;</a>
        <div class="content">
          <h1 class="join">Join The Future</h1>
          <p class="limited">And get a free limited folder</p>
          <form action="index.php" method="post">
              <input class="email-white" type="email" name="email" id="email" placeholder="e-mail@email.com">
              <div class="signup-button-div">
                  <button class="signup-button">Sign up</button>
              </div>
          </form>
        </div>
      </div>
    </div>

    <div class="logos">
      <div class="facebook">
        <img src="/Icons/face.svg" alt="">
      </div>
      <div class="in">
        <img src="/Icons/linked.svg" alt="">
      </div>
      <div class="twitter">
        <img src="/Icons/twitt.svg" alt="">
      </div>
      <div class="instagram">
        <img src="/Icons/insta.svg" alt="">
      </div>
    </div>
  </div>

  <div class="container2 section" id="about">
    <img class="img2" src="/images/2d_wheels.png" alt="">
    <div class="rotate2">
      <h1 class="about">About</h1>
    </div>
    <div class="text">
      <p>Many people still think Saab makes cars, and that is correct. We are
        on the go for the future. Saab is very much alive and well, as one of
        the world’s most innovative companies. And now we are proud to present
        our car for the future: <br>FastSecurity, FS.</p>
    </div>
  </div>
  <div class="container3 section" id="more">
    <img class="img3" src="/images/watch_studio_shadow.png" alt="">
    <div class="rotate3">
      <h1 class="more">Merch</h1>
    </div>
    <div class="watch">
      <p class="bold">Watch</p>
      <!-- <p>Watch</p> -->
    </div>
    <img class="img4" src="/images/glasses_shadow.png" alt="">
    <div class="glasses">
      <p class="bold">Glasses</p>
      <!-- <p>Watch</p> -->
    </div>
  </div>
  <div class="container4">
    <div class="watch-mobil">
      <p>Watch</p>
    </div>
    <img class="img5" src="/images/models.jpg" alt="">
    <div class="centered2">
      <p class="join">Join the future</p>
      <p class="limited">And get a free limited folder</p>
      <div class="email">
        <div class="enter">
          <form action="index.php" method="post">
            <input class="email-white" type="email" name="email" id="email" placeholder="e-mail@email.com">
          <!-- <div class="emailWhite">Your e-mail</div> -->
        </div>
        <div class="button1"><a href="#">Sign up</a></div>
      </div>
      <div class="email-red">Please ener your e-mail</div>
    </div>
    <div class="logos2">
      <div class="facebook">
        <img src="/Icons/face.svg" alt="">
      </div>
      <div class="in">
        <img src="/Icons/linked.svg" alt="">
      </div>
      <div class="twitter">
        <img src="/Icons/twitt.svg" alt="">
      </div>
      <div class="instagram">
        <img src="/Icons/insta.svg" alt="">
      </div>
    </div>
  </div>
  <div class="container5 section" id="Langauge">
  <div class="footer-text">
    <h3>Join The Future</h3>
    <p>You are special</p>
  </div>
</div>
</main>

  <script type="text/javascript" src="script.js"></script>
</body>

</html>

 <?php
require __DIR__.'/footer.php';
  ?>
