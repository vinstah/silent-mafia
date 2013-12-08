<?php #city 

$curr_city = $_SESSION['current_city'];

?>
<style>
.city{text-align:left;}
.city a{color:grey;font-size:medium;font-weight:bold; margin-left:0} 
.city p{color:black; font-size:14px; }
.citylinks {float:left;width:150px;margin-left: 50px;}
</style>
<section id="main" class="city">
<header id="notice"><h2><?php echo $curr_city; ?> City</h2></header>
  <div class="citylinks">
    <a href="?p=club">local club</a>
    <p>join in with the fun and meet others</p><br>
    <a href="?p=job">vacant jobs</a>
    <p>choose the right job to suit your lifestyle</p>
  </div>
  <div class="citylinks">
    <a href="?p=market">market</a>
    <p>buy and sell items with other players</p><br>
    <a href="?p=weapon">weapons and defense</a>
    <p>find the right weapon and defense clothing for the job.</p>
  </div>
  <div class="citylinks">
    <a href="?p=crew">crew</a>
    <p>buy and sell items with other players</p><br>
    <a href="?p=travel">travel</a>
    <p>explore different towns. go by public transport or purchase a vehicle</p>
  </div>
</section>
