<?php

require '../vendor/autoload.php';

use Altcoin\Client as AltcoinClient;

$client = new AltcoinClient([
    'host'     => 'localhost',
    'user'     => 'testuser',
    'password' => 'testpass',
]);

try {
    $txid = $client->sendToAddress('DTcsmLH4bfJV1Vo3S8cZGUD2U5ZKMaWAJ', 0.1);
    printf('Transaction ID: %s', $txid);
} catch (Exception $exception) {
    printf('Could not send transaction. Reason: %s', $exception->getMessage());
}
