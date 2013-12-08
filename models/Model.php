<?php #Model.php

/*
* sets the database start on construct
*/


class Model{
public $db;
	public function __construct(){
		$dbc	= new MySQLi ('localhost', 'root', 'lampp', 'silentmafia') or 
		trigger_error("Could not connect to the database!\n<br />MySQL Error: " 
		. mysqli_connect_error());
		$this->$db = $dbc;
	}
	public function query($q){
		$this->$db->query();	
		
	}
}
?>