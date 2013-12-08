<?php #statsModel.php
/*retrieve information about the users character
  and set them in $_SESSION vars so they can be used throughout 
   the site
*/

class stats {
/*  public $db;
  public $charID;
  public $level;
  public $XP;
  public $status;
  public $homeCity;
  public $currentCity;
  public $jobID;
 */
  public function getstats($charID){
	  //$char_ID = $charID;
    $db = new MySQLi ('localhost', 'root', 'lampp', 'silentmafia') or 
      trigger_error("Could not connect to the database!\n<br />MySQL Error: " 
      . mysqli_connect_error());
      $query = "SELECT `level`,`XP`,`status`,`home_city`,`current_city`,`jobID` FROM `stats` WHERE `charID`=$charID ";
      $result = $db->query($query);
      if($result->num_rows >0){
	while(list($level,$XP,$status,$homeCity,$currentCity,$jobID)= $result->fetch_array() ){
	$_SESSION['level'] = $level;
	$_SESSION['XP'] = $XP;
	$_SESSION['status'] = $status;
	$_SESSION['home_city'] = $homeCity;
	$_SESSION['current_city'] = $currentCity;
	$_SESSION['jobID'] = $jobID;
	}//end while
      }
  }//end function getstats
  
  public function job($jobID){
	   $db = new MySQLi ('localhost', 'root', 'lampp', 'silentmafia') or 
      trigger_error("Could not connect to the database!\n<br />MySQL Error: " 
      . mysqli_connect_error());
      
      $query = "SELECT * FROM `jobs` WHERE `jobID`=$jobID";
      $result = $db->query($query);
      if($result->num_rows > 0){
		while(list($jobID,$job_name,$max_money,$max_xp)= $result->fetch_array() ){
			$_SESSION['job_name'] = $job_name;
			$_SESSION['max_money'] = $max_money;
			$_SESSION['max_xp'] = $max_xp;
		}
	  }
  }//end function job
}//end class stats
  
$stats = new stats();

?>
