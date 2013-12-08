<?php #profile 
$today = "2013-02-03";
$date1 = new DateTime("2012-10-24");
$date2 = new DateTime("2013-02-03");
$days = $date1->diff($date2);

?>
<style>

</style>
<section id="main" >
 <header id="profileLinks">
  <ul>
  <li><a href="">edit profile</a></li> 
  <li><a href="">change settings</a></li>
  <li><a href="">quit job/training</a></li> 
  <li><a href="">misc</a></li>
  </ul>
  </header>
  

      
    <p id="details">
      name: <a href="?p=message&ID=1"><?php echo $_SESSION['USER']; ?></a>
      <br><br>days alive:<?php echo $days->format('%a'); ?>
      <br /><br />job:  <?php echo $_SESSION['job_name']; ?>
      <br><br>home: <?php echo $_SESSION['home_city']; ?></p>
      
    
    <header class="quotes"><h3>&nbsp;quotes&nbsp;</h3></header>
      <pre id ="quotes" class="quotes"></pre>
    </section>
  
