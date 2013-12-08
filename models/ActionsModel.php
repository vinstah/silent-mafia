<?php #ActionsModel.php
/*
 * this class will be the center of all actions completed in silentmafia
*/

class Actions{
	public $id;
	protected $db;
	public function __construct(){
		$this->db = new MySQLi ('localhost', 'root', 'lampp', 'silentmafia') or die();
	}
	public function crime($crime,$money){
		
		$num = $crime * 0.3;// max stat
		$XP =(double)  rand (0,10) / $crime;
		return $XP;
		}
	
	
}//end Actions class
$Actions = new Actions();
