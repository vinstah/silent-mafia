<?php #if this script gets to big create controller
require_once('models/statsModel.php');
$stats->getstats($_SESSION['ID']);
$stats->job($_SESSION['jobID']);
?>
<style>
/*section#main { max-width:650px; }
div#stats {
	background:#f2f2f2;
	border-left:1px solid green;
	color:orange;
	opacity:8;
	padding:10px;
	position:absolute; 
	right:0;
	top:19.6%;
	width:9.2em;
	line-height:1.5em;
	min-height:100px;
	height:100px;
	z-index:3;
}
#stats > span{
	margin-left:50px;
}
#stats .user{
	font-weight:bold;
}
#stats .job{
	margin-left:10%;
}
*/
</style>

<div id="stats">
	<span class="user"><?php echo $_SESSION['USER']; ?></span><br>
	<span class="level">Level: <?php echo $_SESSION['level']; ?></span><br>
	<span class="XP">XP: <?php echo $_SESSION['XP']; ?></span><br>
	<?php echo (isset($_SESSION['job_name']))?'<span class="job">Job: '.$_SESSION['job_name'].'</span>':''; ?>
</div>
