<?php #login Model
/*
* gets and sets data from database for login
*
*/
class Login   { 	
	public $email;
	public $pass;
	public $ID;
	public function check($email, $pass){
	$db = new MySQLi ('localhost', 'root', 'lampp', 'silentmafia') or 
		trigger_error("Could not connect to the database!\n<br />MySQL Error: " 
		. mysqli_connect_error());
		$query = "SELECT * FROM `users` WHERE email='$email' && password='$pass'";
		$result = $db->query($query);
		// if( !$result ) {
			// return $_SESSION['login_error'] = "failed attempt try loging in again"
		// }
		if($result->num_rows > 0){
		
			while($row = $result->fetch_array()){
				if(($row['email'] == $email) && ($row['password'] == $pass)) {
					return $this->success($row['charID']);
				
				}
			}//end while
		}
		else{ 
					$_SESSION['login_error'] = "failed attempt try loging in again"; 
					header('Location: /sil'); exit;}
		
	}//end function check

	public function success($ID) {
		$db = new MySQLi ('localhost', 'root', 'lampp', 'silentmafia') or 
		trigger_error("Could not connect to the database!\n<br />MySQL Error: " 
		. mysqli_connect_error());
		$query = "SELECT  * FROM `characters` WHERE charID=$ID";
		$result = $db->query($query);
		
		while($row = $result->fetch_assoc()){
			
			if($result->num_rows > 0){
				$_SESSION['ON'] = 1;
				$_SESSION['ID'] = $row['charID'];
				$_SESSION['USER'] = $row['username'];
				$_SESSION['site_title'] = "Home";
				header('location:../main.php');
				
				
			}
			else{ echo "can't find";}
		
		}//end while
	}//end success
	
}
$login = new Login();
	?>
