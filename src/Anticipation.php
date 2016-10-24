<?php 
	include_once 'BaseModel.php';
	class Anticipation extends BaseModel
	{
		/**
		* @var string
		*/
		public $amount;
		/**
		* @var string
		*/
		public $anticipation_fee;
		/**
		* @var string
		*/
		public $date_created;
		/**
		* @var string
		*/
		public $date_updated;
		/**
		* @var string
		*/
		public $fee;
		/**
		* @var string
		*/
		public $payment_date;
		/**
		* @var string
		*/
		public $status;
		/**
		* @var string
		*/
		public $timeframe;
		/**
		* @var string
		*/
		public $type;
	}
 ?>