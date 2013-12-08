<?php //income.php
//validate which  page to show
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
		$page = '/income/bank.php';
		$title = 'Bank';
		break;
	
	// case 'jobs':
		// $page = '/income/jobs.php';
		// $title = 'Work';
		// break;

	case 'crime':
		$page = '/income/pettycrime.php';
		$title = 'Crime';
		break;
	
	case 'market':
		$page = '/income/market.php';
		$title = 'Black Market';
		break;
	//combat links
	case 'fight':
		$page = 'fight.php';
		$title = 'fuck yer';
		break;
	
	
	
	
	//default is this page
	default:
		$page = '/default.php';
		$title = '';
		break;
}// end of main switch


//make sure file exists
// if(!file_exists('views' . $page)) {
	// $page = '/default.php';
	// $title = 'Home';
// }
//include page
require_once('views'.$page);
?>