<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "berachad", "Ayoub@2020?", "berachad_ecommerceapp");
		return $this->con;
	}
}

?>