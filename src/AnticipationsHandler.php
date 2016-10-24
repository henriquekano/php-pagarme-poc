<?php
include_once 'Proxy.php';

/**
* 
*/
class AnticipationsHandler extends Proxy
{
	
	public function __construct($guzzleClient)
	{
		parent::__construct($guzzleClient);
	}

	public function create($anticipation, $recipient)
	{
		return parent::request("POST", "/recipients/" . $recipient->id . "/bulk_anticipations", [
			"form_params" => [
				"payment_date" => $anticipation->payment_date,
				"timeframe" => $anticipation->timeframe,
				"requested_amount" => $anticipation->amount,
				"building" => "false"
			]
		]);
	}

}

?>