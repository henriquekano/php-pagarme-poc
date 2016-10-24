<?php 
	include_once 'BaseModel.php';
	class Transaction extends BaseModel
	{
		/**
		* @var string
		*/
		public $amount;
		/**
		* @var string
		*/
		public $payment_method;

		/**
		* @var SplitRule[]
		*/
		public $splitRules;
	}
 ?>