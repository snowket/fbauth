<?php
require "vendor/autoload.php";

use Overtrue\Socialite\SocialiteManager;

$config = [
    'github' => [
        'client_id'     => 'fc2ab5b988e55623b03b',
        'client_secret' => 'ec453d1c4130ef845d347f251bafa6524f76a516',
        'redirect'      => 'http://localhost/fbauth/callback.php',
    ],
];

$socialite = new SocialiteManager($config);

$response = $socialite->driver('github')->redirect();

echo $response;// or $response->send();
