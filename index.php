<?php
declare(strict_types=1);

require __DIR__.'/header.php';

?>

<main>
  <div class="container1 section" id="home">

    <div class="head">
      <h1>YOU ARE SPECIAL.</h1>
      <p> FASTSECURITY 1.0</p>
    </div>
    <div class="centered">
      <p class="join">Join The Future</p>
      <p class="limited">And get a free limited folder</p>
      <div class="email">
        <div class="enter">
          <div class="emailWhite">Your e-mail</div>
          <div class="emailRed">Please ener your e-mail</div>
        </div>
        <div class="button1"><a href="#">Sign up</a></div>
      </div>
    </div>
    <a class="button" href="#popup1" >
    <img border="0" alt="" src="mobil-images/popup.png" width="80" height="70"></a>
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
  </div>
  <div class="container2 section" id="about">

  </div>
  <div class="container3 section" id="more">
  </div>
  <div class="container4 section" id="Langauge">

  </div>
</main>

  <script type="text/javascript" src="script.js"></script>
</body>

</html>

 <?php
require __DIR__.'/footer.php';
  ?>
