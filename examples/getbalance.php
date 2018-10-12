<?php

require '../vendor/autoload.php';

use Altcoin\Client as AltcoinClient;

$client = new AltcoinClient([
    'host'     => 'localhost',
    'user'     => 'testuser',
    'password' => 'testpass',
]);

echo $client->getBalance();
