<?php
mysql_connect("localhost", "znetworks", "utaqavaze") or die(mysql_error());
mysql_select_db("zadmin_employees") or die(mysql_error());

$id = $_GET['employee'];
$getEmployee = mysql_query("SELECT * FROM employees WHERE id='$id'");
$e = mysql_fetch_array($getEmployee);
?>
<div class="container">
	<div class="row eHolder">
		<div class="col-md-3">
			<img src="<?php echo $e['picture'];?>" alt="<?php echo $e['firstname'].', '.$e['lastName'];?>" class="w-100">
		</div>
		<div class="col-md-9">
		<p class="uppercase text-left">From: <?php echo $e['fromCity'].', '.$e['fromState'];?></p>
		<p class="uppercase text-left">Current Location: <?php echo $e['currentCity'].', '.$e['currentState'];?></p>
		<p class="text-left w-100"><?php echo $e['bio'];?></p>
		</div>
	</div>
</div>