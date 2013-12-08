<?php
require_once('includes/heading1.inc.php');
?>
<style>
form#register{
	margin:40px;
	}
form#register fieldset{
	padding:20px;
	min-height:150px;
	}
form#register #left{
	margin-right:55%;
	}
form#register #right{
	margin:-28.5% 0 0 50%;
	}	
form#register input[type=submit]{
	margin:5% 0 0 40%;
	width:150px;
	
	}
</style>
	<section id="main">
		<header id="notice"><h2>Registration</h2></header>
		<form action="" method="get" id="register">
			<fieldset id="left">
			<legend>Personal details</legend>
			<label for="fname">First Name</label><br>
			<input type="text" id="fname"  name="fname"size="20" ><br>
			<label for="lname">Last Name</label><br>
			<input type="text" id="fname" name="lname" size="20"><br>
			<label for="email">Email</label><br>
			<input type="text" size="20" id="email" name="email"><br>
			</fieldset>
			<fieldset id="right">
			<legend>Character details</legend>
			<label for="user">Username</label><br>
			<input type="text" id="user" name="user" size="20"><br>
			<label for="pass">Password</label><br>
			<input type="text" id="pass" name="pass" size="20"><br>
			</fieldset>
			<br><input type="submit" value="submit" name="submit">
		</form>
		</section>
</body>
</html>