<?php

class Index_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function products() {
		return $this->_get("products order by popularity limit 12")[1];
	}
 
	   
		
		
		
			
		
	
	//end of class	
}