<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "", "ecommerce_shopping");
		return $this->con;
	}
}

?>