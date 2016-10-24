<?php
include_once 'Proxy.php';
/**
* 
*/
class TransactionsHandler extends Proxy
{
	
	public function __construct($guzzleClient)
	{
		parent::__construct($guzzleClient);
	}

	public function create($transaction, $card, $customer)
	{
		$customerAddress = $customer->address;
		$customerPhone = $customer->phone;
		var_dump($customerPhone);
		return parent::request("POST", "/transactions", [
			"form_params" => [
				"amount" => $transaction->amount,
				"payment_method" => $transaction->payment_method,
				"card_id" => $card->id,
				"customer[name]" => $customer->name,
				"customer[document_number]" => $customer->document_number,
				"customer[email]" => $customer->email,
				"customer[address][street]" => $customerAddress->street, 
				"customer[address][street_number]" => $customerAddress->street_number, 
				"customer[address][complementary]" => $customerAddress->complementary, 
				"customer[address][neighborhood]" => $customerAddress->neighborhood, 
				"customer[address][zipcode]" => $customerAddress->zipcode, 
				"customer[phone][number]" => $customerPhone->number,
				"customer[phone][ddd]" => $customerPhone->ddd
			]
		]);
	}

}

?>