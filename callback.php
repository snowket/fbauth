<?php
error_reporting(E_ALL);
ini_set('display_error',on);
use Overtrue\Socialite\SocialiteManager;

$config = [
    'github' => [
        'client_id'     => 'fc2ab5b988e55623b03b',
        'client_secret' => 'ec453d1c4130ef845d347f251bafa6524f76a516',
        'redirect'      => 'http://localhost/fbauth/callback.php',
    ],
];

$socialite = new SocialiteManager($config);


$user = $socialite->driver('github')->user();
echo $user;

