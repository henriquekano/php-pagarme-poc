<?php

/**
* 
*/
class Proxy
{

	private $guzzleClient;
	private $endpoint;
	private $apiKey;
	
	protected function __construct($guzzleClient, $endpoint, $apiKey)
	{
		$this->guzzleClient = $guzzleClient;
		$this->endpoint = $endpoint;
		$this->apiKey = $apiKey;
	}

	protected function request($verb, $path, $parameters)
	{
		$parameters["api_key"] = $this->apiKey;
		$res = $this->guzzleClient->request($verb, $this->endpoint . $path, $parameters);
		return $res;
	}
}