<?php
include_once 'Proxy.php';
/**
* 
*/
class SubscriptionsHandler extends Proxy
{
	
	public function __construct($guzzleClient)
	{
		parent::__construct($guzzleClient);
	}

	public function create($card, $customer, $plan)
	{
		echo json_encode($customer);
		return parent::request("POST", "/subscriptions", [
			"form_params" => [
				"plan_id" => $plan->id,
				"card_number" => $card->card_number,
				"card_holder_name" => $card->card_holder_name,
				"card_expiration_date" => $card->card_expiration_date,
				"card_cvv" => $card->card_cvv,
				
				"customer[email]" => $customer->email
			]
		]);
	}

}

?>