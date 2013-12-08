<?php #heading controller
/*this will determin if a player has already logged in when viewing the index page
	check the $_session vars to know if they have logged in
	otherwise show the index site
*/
session_start();
$head = '';
// if user is viewing index.php and has logedin set $login to false and set vars
if( isset($_SESSION['ON'])){
		$username = $_SESSION['USER'];
		$sessionID = $_SESSION['ID'];
		$title = $_SESSION['site_title'];
		$logout = true;
		$head='<a style="text-decoration:none;"  href="/sil/controllers/login.php?logout"><span id="logout">Log Out</span></a>';
		$incl = 'nav.inc.php';
	
	
}
else {
//if( (stristr($_SERVER['PHP_SELF'], "index" )) && (empty($_SESSION['ID'])) ){
	if(isset($_SESSION['login_error'])){ $login_err = '<span id="login_err"> ' .$_SESSION['login_error']. '</span>'; }
	$login = true;
	$head = '<form action="controllers/login.php" method="post" id="login">
			<input type="email" name="email" placeholder="someone@mafia.com">
			<input type="password" name="password" placeholder="password" >
			<input type="submit" id="login" name="login" value="Log in">
			<a href="signup.php" id="signup">Sign up</a>
			</form>';
			
}
if( ($_SERVER['PHP_SELF'] == "/sil/main.php") && (!isset($_SESSION['ON'] )) ){
	header('Location:/sil');
}
if( ($_SERVER['PHP_SELF'] == "/sil/index.php") && (isset($_SESSION['ON'] )) ){
	header('Location:/sil/main.php');
}
$debug= true;
require_once('includes/config.inc.php');
?>