<?php #crimes
/*
 *	set up how the user will do crimes towards other
 * 	people or their property in the same current city.
 * 
 * -player chooses a crime out of select buttons which will 
 * have their key from the $crimes array, which will help get the 
 * confirmation message form the $crime_message array().
 * -The higher the crimestat that the player has will 
 * determin how many choices of crimes are shown.
 * -Players will get dirty money from completing crimes 
 * that will be shown on hand and can only be laundered, 
 * taken from you by a theif or contributed to crew leader 
 * 
 * (*) Note updates to crimestat and crimeXP will happen only.
 * 
 * 
*/
?><section id="main">
	<header id="notice">
	<h2></h2>
	</header>
	<style>
form#earns{ 
	margin:20px 20%;
	
}
.confirm{color: green;}
.content{border:5px outset red; font-size:1.05em; height:220px; margin:10%; padding:50px;}
</style>
<div class="content">

<?php
require_once('./models/ActionsModel.php');
//variables
$id = $_SESSION['ID'];


if( $_POST && ( !empty($_POST['crime']) ) ){
$cstat = $_SESSION['crime_stat'];
	$crime = (int)$_POST['crime'];
	

	$money = array(100,150,200,250,300,400);
	if($cstat  <= 15){
		$amount = floor(rand(0, $money[0]));
	}

	$crime_message = array(
		"thanks for stealing my mail! you found \$$amount worth.", 
		"I think you owe me some of that! You took \$$amount from player's wallet."
	);
	
	if($crime == 1){
		$html = "<p class=\"confirm\">".$crime_message[0]."</p>";
		
	}
	if($crime == 2){
		$html = "<p class=\"confirm\">".$crime_message[1]."</p>";
		
	}
	$Actions->crime($crime,$amount);
	echo $html;

	





}
else{
?>
<div class="styled">
<form method="post" id="earns">
<?php
$crimes = array("steal cheques","mugging","pickpocket");
	$q = "SELECT `crime_stat` FROM `stats` WHERE `charID=`$id";
	$dbc->query($q);
	$stat = 3;
	$_SESSION['crime_stat'] = $stat;
	if($stat < 15 ){
		// add 2 of them starts at 0
		$stop = 1;
		// go through the array and create the inputs
		
			 
			for($i =0; $i <= $stop; $i++ ){
				echo '<input type="radio" name="crime" value="'.($i+1).'">
				<label for="" class="jobs">'.$crimes[$i]. '</label><br />';
			}
		
	}

echo '<input type="submit" name="do" value="do"/>';
}
?>
</div>
</div>
</section>
