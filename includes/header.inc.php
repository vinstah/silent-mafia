<?php
require('controllers/header.php');
?>
<!doctype html>
<html lang="en">
<head>
  <title> ::::Silent Mafia:::: <?php (isset($title))? $title : "";?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="includes/css/style.css">
  <script src="js/html5"></script>
  <script src="includes/js/jquery.js"></script>
  <script src="includes/js/deselect_text.js"></script>
<style>
#login_err{ font-size:12px; margin-left: 250px;  }
form#login{ margin-left:200px; }
</style>
</head>
<body>
 	<header id="heading">
		<h1> Sil<span>ent Ma</span>fia</h1>
	<?php echo (isset($login_err))? $login_err :'';?>
	<?php echo (isset($logout))? $head : $head; ?>
	</header> 
	