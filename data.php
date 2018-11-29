<?php
declare(strict_types=1);


// if (isset($_POST['email'])) {
//   $email = trim($_POST['email']);
//   //echo var_dump(isset($_POST['email']));
//
//   if ($email === '') {
//     echo "The email field is empty!";
//   }
//   elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     echo "The email $email is valid!";
//   }
//   else {
//     echo "The email $email is not valid!";
//   }
// }
//


$languages =
[
    'sv' =>
            [
                'title' => 'DU ÄR SPECIELL.',
                'titleP' => 'FAST SECURITY 1.0',
                'signUp' => 'Gå med',
                'registerText' => 'Häng med framåt',
                'registerTextP'=> 'Och få en exklusiv folder',
                'watch' => 'Klocka',
                'glasses' =>'Glasögon',
                'contactUs' => 'Kontakta Oss',
                'contact' => 'Kontakt',
                'about' => 'Om Oss',
                'merch' => 'Varor',
                'home' => 'Hem',
                'getNewsletter' => 'Ladda ner Nyhetsbrev',
                'langauge' => 'Språk',
                'emailRed' => 'Skriv in din mail',
                'content' => file_get_contents(__DIR__.'/text-sv.txt')
            ],
    'en' =>
            [
                'title' => 'YOU ARE SPECIAL.',
                'titleP' => 'FAST SECURITY 1.0',
                'signUp' => 'Sign up',
                'registerText' => 'Join the future',
                'registerTextP'=>'And get a free limited folder',
                'watch' => 'Watch',
                'glasses' =>'Glasses',
                'contactUs' => 'Contact us',
                'contact' => 'Contact',
                'about' => 'About',
                'merch' => 'Merch',
                'home' => 'Home',
                'getNewsletter' => 'Get Newsletter',
                'langauge' => 'Langauge',
                'emailRed' => 'Please enter your e-mail',
                'content' => file_get_contents(__DIR__.'/text-eng.txt')
            ],
];
?>
