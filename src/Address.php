<?php 
	include_once 'BaseModel.php';
	class Address extends BaseModel
	{
		/**
	     * @var string
	     */
		public $street;

		/**
	     * @var string
	     */
		public $street_number;

		/**
	     * @var string
	     */
		public $street_complementary;

		/**
	     * @var string
	     */
		public $neighborhood;

		/**
	     * @var string
	     */
		public $zipcode;
	}
 ?>