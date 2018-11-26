<?php
declare(strict_types=1);

if (isset($_POST['email'])) {
  $email = trim($_POST['email']);

  if ($email === '') {
    echo "The email field is empty!";
  }
  elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "The email $email is valid!";
  }
  else {
    echo "The email $email is not valid!";
  }
}

?>
