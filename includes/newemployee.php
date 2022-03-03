<form id="eForm" method="post" action="assets/addemployee.php" enctype="multipart/form-data">
<div class="d-md-flex">
	<div class="form-group z-form-box">
		<input type="text" name="firstname" class="form-control z-form" placeholder="First Name"> 
	</div>
	<div class="form-group ml-md-4 z-form-box">
		<input type="text" name="lastname" class="form-control z-form" placeholder="Last Name">
	</div>
</div>
<div class="d-md-flex pt-md-3">
	<div class="form-group z-form-box"> 
		<input type="text" name="title" placeHolder="Job Title" class="form-control z-form">
	</div>
	<div class="form-group ml-md-4 z-form-box"> 
		<lable>Hire Date</label><input type="date" name="hiredate" placeHolder="Job Title" class="form-control z-form">
	</div>
</div>
<div class="d-md-flex pt-md-3">
	<div class="form-group z-form-box"> 
		<lable>City</label><input type="text" name="fromCity" placeHolder="From City" class="form-control z-form" value="<?php echo $e['fromCity'];?>">
	</div>
	<div class="form-group ml-md-4 z-form-box"> 
		<lable>State</label><input type="text" name="fromState" placeHolder="From State" class="form-control z-form" value="<?php echo $e['fromState'];?>" maxlength="10">
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
		<lable>Bio</lable><textarea name="bio" placeHolder="Bio" style="width:100%; height:90px;"></textarea>
	</div>
</div>
<div class="d-md-flex pt-md-3">
	<div class="form-group z-form-box"> 
		<lable>Why Z Networks?</lable><textarea name="whyZ" placeHolder="Bio" style="width:100%; height:90px;"><?php echo $e['whyZ'];?></textarea>
	</div>
</div>
</div>
<div class="container">
	<div class="row pt-md-3">
		
		<div class="col text-left">Administrator</div>
		<div class="col text-left"><select name="admin" id="adminOption" style="width:100%;"><option value="0">No</option><option value="1">Yes</option></select></div>
		<div class="col text-left">Admin Level</div>
		<div class="col text-left"><select name="level" id="adminLevel" style="width:100%;">
			<?php
			$i = 0;
			while($i <= 50) {

					echo '<option value="'.$i.'">'.$i.'</option>';

				
				$i++;
			}
			?>
		</select></div>
		<div class="col text-left">Active</div>
		<div class="col text-left"><select name="active" style="width:100%;">
				<option value="0">Yes</option>
				<option value="1">No</option>
			</select></div>
	</div>
</div>

<div class="d-md-flex pt-md-3">
	<div class="form-group z-form-box">
		<lable>Picture</lable><input type="file" name="fileToUpload" class="form-control z-form" placeholder="Employee Photo">
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