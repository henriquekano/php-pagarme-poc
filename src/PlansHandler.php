<?php
include_once 'Proxy.php';
include_once 'Plan.php';
/**
* 
*/
class PlansHandler extends Proxy
{
	
	public function __construct($guzzleClient)
	{
		parent::__construct($guzzleClient);
	}

	public function listAll()
	{
		$response = parent::request("GET", "/plans", [
		]);

		$mapper = new JsonMapper();
		return $mapper->mapArray(
		    json_decode($response->getBody()), array(), 'Plan'
		);
	}

	public function create($plan)
	{
		$response = parent::request("POST", "/plans", [
			"form_params" => [
				"amount" => $plan->amount,
				"days" => $plan->days,
				"name" => $plan->name
			]
		]);

	}

}

?>