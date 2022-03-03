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
		<lable>Bio</lable><textarea name="bio" placeHolder="Bio" style="width:100%; height:120px;"><?php echo $e['bio'];?></textarea>
	</div>

</div>
<div class="d-md-flex pt-md-3">
	<div class="form-group z-form-box"> 
		<lable>Active</lable>
			<select name="active">
				<option value="0"<?php if($e['active'] == 0) { echo ' selected';}?>>Yes</option>
				<option value="1"<?php if($e['active'] == 1) { echo ' selected';}?>>No</option>
			</select>
	</div>
	<div class="form-group z-form-box">
		<lable>Administrator</lable><select name="admin" id="adminOption"><option value="0">No</option><option value="1" <?php if($e['admin'] == 1) { echo ' selected';}?>>Yes</option></select>
	</div>
	<div class="form-group z-form-box">
		<lable>Admin Level (Low is top)</lable>
		<select name="level" id="adminLevel">
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
		</select>
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