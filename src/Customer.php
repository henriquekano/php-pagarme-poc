<?php 
	include_once 'BaseModel.php';
	class Customer extends BaseModel
	{
		/**
		* @var string
		*/
		public $name;
		/**
		* @var string
		*/
		public $document_number;
		/**
		* @var string
		*/
		public $email;
		/**
		* @var Address
		*/
		public $address;
		/**
		* @var Phone
		*/
		public $phone;
		
	}
 ?>