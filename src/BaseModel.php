<?php 
	class BaseModel
	{

		/**
		* @var string
		*/
		public $id;

		public function __get($key)
	    {
	        return $this->$key;
	    }

	    public function __set($key, $value)
	    {
	        $this->$key = $value;
	    }
	}
 ?>