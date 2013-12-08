<?php 
$debug = true;
/*	this page = bank.php
	an include file for income.php
	Players can view date/time and description of last 4 transactions
	Deposit $money on hand, withdraw or transfer from bank to another players bank
*/
$check = false;
$date =date('d/M');
$id = $_SESSION['ID'];

	//$_SESSION['credit'] = (int)$row['credit'];
	//$credit = $_SESSION['credit'];
	if(empty($_SESSION['bank_trans'])){
$_SESSION['bank_trans'] = "";
}


if(isset($_POST) && isset($_POST['bank'])){
	//$money = 44444;
	//if(!empty($_POST['amount'])){
		$amount = (int)trim($_POST['amount']);
	$balance = 	((!empty($_SESSION['balance'])))?$_SESSION['balance']:'0';
	//}
	
	if($_POST['trans_type'] == 'deposit'){
		$sum = $amount + $balance;
	
		$_SESSION['bank_trans']= "You loaded $amount into your vault";
	
		$deposit ="UPDATE `bank` SET `amount`=\"$sum\" WHERE `charID`=$id"; //"INSERT INTO `bank`(`ID`, `charID`, `amount`) VALUES('',$id, $sum);"

		$insert="INSERT INTO `bank_trans`(`trans_id`, `charID`, `trans_type`, `trans_time`, `money_trans`) VALUES (null,$id,'Deposit',null, $amount)";

		$result = $dbc->query($deposit);
	//	if($dbc->affected_rows > 0){
			$_SESSION['bank_trans']= "you added to your \$$amount vault";
			$result = $dbc->query($insert);
		//	}
		////header('Location: income.php?p=bank'); 	
	}
	if($_POST['trans_type'] == 'withdraw'){
		$sum = $balance - $amount;
		//$money = $amount;
		$_SESSION['bank_trans']= "You extracted $amount from your vault";
		
		$withdraw = "UPDATE `bank` SET `amount`=\"$sum\" WHERE `charID`=$id";
		
		$insert2 = "INSERT INTO `bank_trans`(`trans_id`, `charID`, `trans_type`, `trans_time`, `money_trans`) VALUES (null,$id,'Withdraw',null, $amount)";
		$result2 = $dbc->query($withdraw);
		//header('Location: ?p=bank'); 	

		$_SESSION['bank_trans']= "You extracted $amount from your vault";
		$result2 = $dbc->query($insert2);
			}
	if($_POST['trans_type'] == 'transfer'){
		$check = true;
		
	//	header('Location:income.php?p=bank');
		}
	//	header('Location:?p=bank');
}// end of if form has been submited
//else{
	?>

<?php
	$sql = "SELECT `amount`, `trans_type`,`trans_time`, `money_trans` FROM `bank`
	INNER JOIN(`bank_trans`) LIMIT 5";
	$result = $dbc->query($sql);
global	$balance;
	while(list($bankbal,$transType,$transTime,$moneyTrans) = $result->fetch_array()){
		$balance = $bankbal;
 $trans_time = date('d/M/y H:i:s', strtotime($transTime));
 echo "
	<tr> 
	<td class=\"date\">{$trans_time}</td> 
	<td colspan=2 class=\"desc\">{$transType}</td>
	<td colspan=2 class=\"moneyDiff\">{$moneyTrans}</td>
	</tr>";
	$_SESSION['balance']=$bankbal;
	}//end of while
	$_SESSION['balance']=$balance;
 ?>
	