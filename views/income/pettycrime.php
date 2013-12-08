<?php #pettycrime.php
/*
* page is an include for income.php
* user chooses which petty crime to commit, 
* this script then does some maths to see how much XP and money to give
* then updates database and sessions to add money to wallet.
* 
*/

// set file path 
 //DB
 $sql = "SELECT crime_ID, crime FROM silentmafia.crime";
 $query = $dbc->query($sql);
 


?>
<style>
span#message { margin:0 auto;}
form#earns { margin: 5% 20%;}
div.styled { width: 500px; margin:0 auto;}
</style>
	<section id="main">
		<header id="notice">
			<h2>crime</h2>
		</header>
		<div class="styled">
		<form method="post" id="earns">
		
<?php
//make first crime always appear and is selected initially
$row = mysqli_fetch_array($query);
echo '<input type="radio" name="jobs" class="jobs" value="' .$row['crime_ID']. '" selected/>
	<label for="" class="jobs">' .$row['crime']. '</label><br />';
	
//add rest of crime
while(list($crimeID, $crime) = mysqli_fetch_array($query)){
	echo '<input type="radio" name="jobs" class="jobs" value="' .$crimeID. '"/>
	<label for="" class="jobs">' .$crime. '</label><br />';
	}
	
?>
		<input type="submit" name="do" value="do"/>
		</div>
		
	</section>
	
<?php 

?>