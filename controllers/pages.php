<?php //pages.php
//find out which part of the site was clicked
//and include the file to show user
if(isset($_GET['p'])) {
	$p = $_GET['p'];
}
elseif(isset($_POST['p'])) {
	$p = $_POST['p'];
}else {
	$p = null;
}

//determine which page to show
switch($p) {
	//income links
	case 'bank':
	case 'market':
	$page = 'controllers/income.php';
	break;
	
	//crime links
	case 'crime':
	$page = 'views/crime.php';
	break;
	
	
	//profile
	case 'profile':
	$page = 'views/profile/profile.php';
	break;
	
	//city links
	case 'city';
	$page = 'views/city.php';
	break;
	// case 'fight':
		// $page = 'fight.php';
		// $title = 'fuck yer';
		// break;
	
	
	
	
	//default is this page
	default:
		$page = 'views/default.php';
		$title = '';
		break;
}// end of main switch


//make sure file exists
// if(!file_exists('views' . $page)) {
	// $page = '/default.php';
	// $title = 'Home';
// }
//include page
require_once($page);
?>
