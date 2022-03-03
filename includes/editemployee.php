<?php
mysql_connect("localhost", "znetworks", "utaqavaze") or die(mysql_error());
mysql_select_db("zadmin_employees") or die(mysql_error());

$id = $_GET['employee'];
$getEmployee = mysql_query("SELECT * FROM employees WHERE id='$id'");
$e = mysql_fetch_array($getEmployee);
?>
<form id="eForm" method="post" action="assets/updateemployee.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id;?>">
<div class="d-md-flex">
	<div class="form-group z-form-box">
		<lable>First Name</label><input type="text" name="firstname" class="form-control z-form" placeholder="First Name" value="<?php echo $e['firstname'];?>"> 
	</div>
	<div class="form-group ml-md-4 z-form-box">
		<lable>Last Name</label><input type="text" name="lastname" class="form-control z-form" placeholder="Last Name" value="<?php echo $e['lastname'];?>">
	</div>
</div>
<div class="d-md-flex pt-md-3">
	<div class="form-group z-form-box"> 
		<lable>Title</label><input type="text" name="title" placeHolder="Job Title" class="form-control z-form" value="<?php echo $e['title'];?>">
	</div>
	<div class="form-group ml-md-4 z-form-box"> 
		<lable>Hire Date</label><input type="date" name="hiredate" placeHolder="Date" class="form-control z-form" value="<?php echo date("Y-m-d", strtotime($e['hiredate']));?>">
	</div>
</div>
<div class="d-md-flex pt-md-3">
	<div class="form-group z-form-box"> 
		<lable>From City</label><input type="text" name="fromCity" placeHolder="From City" class="form-control z-form" value="<?php echo $e['fromCity'];?>">
	</div>
	<div class="form-group ml-md-4 z-form-box"> 
		<lable>From State</label><input type="text" name="fromState" placeHolder="From State" class="form-control z-form" value="<?php echo $e['fromState'];?>" maxlength="10">
	</div>
</div>
<div class="d-md-flex pt-md-3">
	<div class="form-group z-form-box"> 
		<lable>Current City</label><input type="text" name="currentCity" placeHolder="Current City" class="form-control z-form" value="<?php echo $e['currentCity'];?>">
	</div>
	<div class="form-group ml-md-4 z-form-box"> 
		<lable>Current State</label><input type="text" name="currentState" placeHolder="Current State" class="form-control z-form" value="<?php echo $e['currentState'];?>" maxlength="10">
	</div>
</div>
<div class="d-md-flex pt-md-3">
	<div class="form-group z-form-box"> 
		<lable>Bio</lable><textarea name="bio" placeHolder="Bio" style="width:100%; height:90px;"><?php echo $e['bio'];?></textarea>
	</div>
</div>
<div class="d-md-flex pt-md-3">
	<div class="form-group z-form-box"> 
		<lable>Why Z Networks?</lable><textarea name="whyZ" placeHolder="Bio" style="width:100%; height:90px;"><?php echo $e['whyZ'];?></textarea>
	</div>
</div>
<div class="container">
	<div class="row pt-md-3">
		
		<div class="col-md text-left">Administrator</div>
		<div class="col-md text-left"><select name="admin" id="adminOption" style="width:100%;"><option value="0">No</option><option value="1"<?php if($e['admin'] == 1) { echo ' selected';}?>>Yes</option></select></div>
		<div class="col-md text-left">Admin Level</div>
		<div class="col-md text-left"><select name="level" id="adminLevel" style="width:100%;">
			<?php
			$i = 0;
			while($i <= 50) {
				if($e['level'] == $i) {
					echo '<option value="'.$i.'" selected>'.$i.'</option>';
				} else {
					echo '<option value="'.$i.'">'.$i.'</option>';
				}
				$i++;
			}
			?>
		</select></div>
		<div class="col-md text-left">Active</div>
		<div class="col-md text-left"><select name="active" style="width:100%;">
				<option value="0"<?php if($e['active'] == 0) { echo ' selected';}?>>Yes</option>
				<option value="1"<?php if($e['active'] == 1) { echo ' selected';}?>>No</option>
			</select></div>
	</div>
</div>
<div class="d-md-flex pt-md-3">
	<div class="form-group z-form-box">
		<lable>Picture<?php if(!empty($e['picture'])) {echo '<br/><img src="'.$e['picture'].'" width="60">';}?></lable><input type="file" name="fileToUpload" class="form-control z-form" placeholder="Employee Photo">
	</div>
	
</div>
</form>
<script>
var adminOption = $('#adminOption').val();
if(adminOption == 0) {
	$('#adminLevel').prop('disabled', 'disabled');
}

$('#adminOption').change(function() {
	var adminOption = $('#adminOption').val();
	if(adminOption == 0) {
		$('#adminLevel').prop('disabled', 'disabled');
	} else {
		$('#adminLevel').removeAttr('disabled');
	}
})
</script>