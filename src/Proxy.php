<?php
include_once 'PagarmeService.php';

/**
* 
*/
class Proxy
{

	private $guzzleClient;
	
	protected function __construct($guzzleClient)
	{
		$this->guzzleClient = $guzzleClient;
	}

	protected function request($verb, $path, $parameters)
	{
		try
		{
			$parameters["form_params"]["api_key"] = PagarmeService::$apiKey;
			$res = $this->guzzleClient->request($verb, PagarmeService::$endpoint . $path, $parameters);
			return $res;
		}
		catch(RequestException $e)
		{
			echo $e->getResponse();
		}		
	}
}