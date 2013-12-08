<?php //market.php
/* 
this is where players can buy items in stock and then travel to another city to
 sell for higher price.
*/
?>
<style>
table#market{
	border:1px solid black;
	width: 80%;
}
#market tr th{
	font-size:14px;
}
#market tr td { 
	text-align: center;
}
#market input[type="text"]{
	width:50px;
	
	} 
#market input[type="submit"]{
	background: inherit;
	border: none;
	width:100%;
	margin: 0;
	margin-left: 40px;
}
</style>
<section id=main>
	<header id="notice"><h2>Black Market</h2></header>
	
	<div class="styled">
		<form method="post">
		<table id="market">
			<tr>
				<th>item</th>
				<th>cost</th>
				<th>amount owned</th>
				<th>buy</th>
			</tr>
			<tr>
				<td>Book</td>
				<td>$900</td>
				<td>0</td>
				<td><input type="text" /></td>			
			</tr>
			<tr>
				<td>jacket</td>
				<td>$1200</td>
				<td>2</td>
				<td><input type="text" /></td>			
			</tr>
			<tr>
				<td>t.v</td>
				<td>$1500</td>
				<td>2</td>
				<td><input type="text" /></td>			
			</tr>
			<tr>
				<td>audio system</td>
				<td>$2000</td>
				<td>0</td>
				<td><input type="text" /></td>			
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="buy" /></td>			
			</tr>
		</table>
		</form>
	</div>
</section>