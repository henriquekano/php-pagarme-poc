<?php
require 'vendor/autoload.php';
require 'src/Transactions.php';

$client = new \GuzzleHttp\Client();

$transactionsHandler = new TransactionsHandler($client, "https://api.pagar.me/1", "ak_test_zXjKL8u5uxn25HNxHviPbhthNV0nL7");
echo $transactionsHandler->create(10000);

?>