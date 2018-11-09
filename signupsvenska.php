<?php
declare(strict_types=1);

require __DIR__.'/headersvenska.php';
require __DIR__.'/data.php';

 ?>
<main>

 <form method="post">
    <div class=“form-group”>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder='mail@mail.com'>
      <button type="submit">Submit</button>
    </div>
 </form>
</main>

 <?php
 require __DIR__.'/footer.php';
  ?>
