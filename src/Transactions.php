<?php
require 'Proxy.php';
/**
* 
*/
class TransactionsHandler extends Proxy
{
	
	public function __construct($guzzleClient, $endpoint, $apiKey)
	{
		parent::__construct($guzzleClient, $endpoint, $apiKey);
	}

	public function create($amount)
	{
		return parent::request("POST", "/transactions", [
			"amount" => $amount,
			"payment_method" => "boleto"
		]);
	}

}

?>