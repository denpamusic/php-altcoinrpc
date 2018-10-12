<?php

require '../vendor/autoload.php';

use Altcoin\Client as AltcoinClient;

$client = new AltcoinClient([
    'host'     => 'localhost',
    'user'     => 'testuser',
    'password' => 'testpass',
]);

$info = $client->getBlockchainInfo();

printf("Number of blocks: %d\n", $info->get('blocks'));
printf("Last block: %s\n", $info->get('bestblockhash'));
printf("Difficulty: %f\n", $info->get('difficulty'));
