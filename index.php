<?php
include_once 'src/SubscriptionsHandler.php';
include_once 'src/PlansHandler.php';
include_once 'src/Card.php';
include_once 'src/Customer.php';
include_once 'src/Address.php';
include_once 'src/Phone.php';
include_once 'src/Transaction.php';
include_once 'src/TransactionsHandler.php';
include_once 'src/Anticipation.php';
include_once 'src/AnticipationsHandler.php';
include_once 'src/Recipient.php';
include_once 'src/SplitRule.php';

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();

$transactionsHandler = new TransactionsHandler($client);
$transaction = new Transaction();
$transaction->amount = "100000";
$transaction->payment_method = "credit_card";
$card = new Card();
$card->id = "card_ciuiubqy00042ke6ef0kfocqa";
$customer = new Customer();
$customer->name = 'Nome';
$customer->document_number = '35965816804';
$customer->email = 'qwe@qwe.com';
$address = new Address();
$address->street = 'Rua';
$address->street_number = '100';
$address->complementary = 'Complemento';
$address->neighborhood = 'Bairro Doido';
$address->zipcode = '06350270';
$customer->address = $address;
$phone = new Phone();
$phone->ddd = '11';
$phone->number = '87654321';
$customer->phone = $phone;
$splitRule1 = new SplitRule();
$splitRule1->recipient_id = "re_ciu4jif1j007td56dsm17yew9";
$splitRule1->percentage = "70";
$splitRule2->recipient_id = "re_ciu4ky9l6009lct6dmdtp3w3b";
$splitRule2->percentage = "30";
$transaction->splitRules = [$splitRule1, $splitRule2];
echo $transactionsHandler->create($transaction, $card, $customer)->getBody();

$plansHandler = new PlansHandler($client);
$subscriptionHandler = new SubscriptionsHandler($client);
$anticipationHandler = new AnticipationsHandler($client);
// $newPlan = new Plan("10000", "30", "Novo plano php");
// echo $plansHandler->create($newPlan)->getBody();

// $plan = $plansHandler->listAll()[0];
// $card = new Card();
// $card->card_number = '4242424242424242';
// $card->card_holder_name = 'Henrique';
// $card->card_expiration_date = '1220';
// $card->card_cvv = '173';
// $customer = new Customer();
// $customer->name = 'Nome';
// $customer->document_number = '35965816804';
// $customer->email = 'qwe@qwe.com';
// $address = new Address();
// $address->street = 'Rua';
// $address->street_number = '100';
// $address->complementary = 'Complemento';
// $address->neighborhood = 'Bairro Doido';
// $address->zipcode = '06350270';
// $customer->address = $address;
// $phone = new Phone();
// $phone->dd = '11';
// $phone->number = '87654321';
// $customer->phone = $phone;
// var_dump($subscriptionHandler->create($card, $customer, $plan)->getBody());

// $anticipation = new Anticipation();
// $anticipation->amount = "10000000";
// $antDatetime = new DateTime();
// $antDatetime->setDate(2016, 10, 30);
// $anticipation->payment_date = strval($antDatetime->getTimeStamp()) . '000';
// $anticipation->timeframe = "end";
// $recipient = new Recipient();
// $recipient->id = "re_ciu4ky9l6009lct6dmdtp3w3b";

// var_dump($anticipationHandler->create($anticipation, $recipient)->getBody());
