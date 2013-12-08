<?php #Login and Logout controller
session_start();
$debug = true;
require_once('../includes/config.inc.php');
require_once('../models/loginModel.php');
/*
* controlls the login
*
*/

	

	
if(isset($_POST['login'])) {
	// trim and set vars for database look-up
	$email = escape_data($_POST['email']);
	$password = escape_data($_POST['password']);
	//check for validity
	 if( !strlen($email) || !strlen($password) ){	
		$_SESSION['login_error'] ="please enter your email and password to begin";
			if( strlen($email) == 0 && strlen($password) !=0 ){
				$_SESSION['login_error'] =  "please enter your email address to continue";
				//header("Location: /sil");
			}
			elseif(  !(strlen($password)) && strlen($email) ){
				$_SESSION['login_error']  = "please enter your password to continue";
			//	header("Location: /sil");
			}
			header("Location: /sil");
	}
	
	if((strlen($email) != 0) && (strlen($password) !=0)){
		
	//Look up the user in the user table
	$login->check($email,$password);		
	}//end if $email && $password are set;
}//end if isset login 

if(isset($_REQUEST['logout'])){
	// unset($_SESSION['USER']);
	// unset($_SESSION['ID']);
	// unset($_SESSION['login_error']);
	session_destroy();
	header('Location:/sil');
	}
?>