<?php

declare(strict_types=1);

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
                'content' => file_get_contents(__DIR__.'/assets/texts/text-sv.txt')
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
                'content' => file_get_contents(__DIR__.'/assets/texts/text-eng.txt')
            ],
];
?>
