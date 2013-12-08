
	<nav id="qLinks">
		<ul>
			<li class="li"><a href="main.php">Home</a></li>
			<li class="li"><a href="?p=city">City</a></li>
			<li class="li"><a href="?p=profile">Profile</a></li>
		</ul>
	</nav>
	<aside>
		<script>
		$(function(){
			$('.menuLink').click(function() {
				$(this).next('.Links').toggle();
			});
		});
		</script>
		<header class="menuLink">Income</header>
				<ul class="Links">
					<li><a href="?p=jobs">Work</a></li>
					<li><a href="?p=bank">Bank</a></li>
					<li><a href="?p=crime">Crime</a></li>
					<li><a href="?p=market">Market</a></li>
					<li><a href="#">Community</a></li>
				</ul>
				
				
			<header class="menuLink">Combat</header>
				<ul class="Links">
					<li><a href="">hit list</a></li>
					<li><a href="">fight</a></li>
					<li><a href="">whack</a></li>
				</ul>
		
			<header class="menuLink">travel</header>
				<ul class="Links">
					<li><a href="">Airpot</a></li>
					<li><a href="">Bus stop</a></li>
					<li><a href="">garage</a></li>
					<li><a href="">purchase</a></li>
				</ul> 
	
	</aside>
	<?php
	//require_once('controllers/income.php')
?>	
