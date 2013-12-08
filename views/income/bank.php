
<section id="main"> 
	<header id="notice"><h2>vault</h2></header>
<?php echo $_SESSION['bank_trans'];$_SESSION['bank_trans']=''; ?>
	<?php echo $_SESSION['bank_trans'];$_SESSION['bank_trans']=''; ?>
	<form id="transfers" method="post">
		<label for="amount">amount: $</label>
		<input type="text" name="amount" id="amount" value="<?php echo (isset($amount)) ?$amount:''; ?>" />
		<label for="trans_type">transfer type: </label>
		<select name="trans_type">
			<option> ... </option>
			<option value="deposit">Deposit</option>
			<option value="withdraw">Withdrawl</option>
			<option value="transfer">transfer</option>
		</select>
		<?php /*echo (isset($check))?'
		<label for="player">enter player:</label>
		<input type="text" name="user" id="player" />
		':''; */?>
		<input type="submit" value="bank" name="bank">
	</form>
	<table id="bank">
	<tr>
	<td class=\"date\">Date</td> 
	<td colspan=2 id=\"title\">Description</td>
	<td colspan=2 class=\"moneyDiff\">+/-</td>
	</tr>
	<tr id="tr"></td>
<?php include "controllers/bank.php";?>
	<script>
	//$(document).ready({
	//	setInterval($('#tr').load("../../bank.php"),100);
	
//});
	</script>
	<tr>
	<td colspan=2 class="bankBal">balance: <?php  echo $balance; ?></td> 
	</tr>
	</table>
	<?php echo $_SESSION['bank_trans'];$_SESSION['bank_trans']=''; ?>
	<form id="transfers" method="post">
		<label for="amount">amount:</label>
		<input type="text" name="amount" id="amount" value="<?php echo (isset($amount)) ?$amount:''; ?>" />
		<label for="trans_type">transfer type:</label>
		<select name="trans_type">
			<option> ... </option>
			<option value="deposit">Deposit</option>
			<option value="withdraw">Withdrawl</option>
			<option value="transfer">transfer</option>
		</select>
		<?php /*echo (isset($check))?'
		<label for="player">enter player:</label>
		<input type="text" name="user" id="player" />
		':''; */?>
		<input type="submit" value="bank" name="bank">
	</form>
	
<?php	if($check){ echo '<form method="post">
<p id="check"> are you sure you want to send ' .((!empty($_SESSION['balance'])))?$balance:''. ' to $player?'
.' <input type="submit" name="yes" value="yes" /></form>';}
?>	
	</section>