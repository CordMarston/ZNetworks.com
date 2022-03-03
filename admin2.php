<html>
<head>
<title>Z Networks Technology Solutions</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/znws.css">
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/jquery-confirm.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/my.js"></script>
<script src="js/jquery-confirm.js"></script>
</head>
<body class="bg-cust-light p-1">
<div class="row">
	<div class="col py-2 text-right align-text-right">
		<a href="#" class="btn btn-success" id="addEmployee">Add Employee</a>
	</div>
</div>
<div class="row">
	<div class="col">
		<table id="employeeTable" class="table table-striped table-bordered" style="width:100%;">
			<thead>
				<tr>
					<th>Picture</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Title</th>
					<th>From Location</th>
					<th>Current Location</th>
					<th>Hire Date</th>
					<th>Active</th>
					<th>Admin</th>
					<th>Level</th>
					<th>Bio</th>
					<th>Why Z?</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
			<?php
			mysql_connect("localhost", "znetworks", "utaqavaze") or die(mysql_error());
			mysql_select_db("zadmin_employees") or die(mysql_error());
			$getEmployees = mysql_query("SELECT * FROM employees ORDER BY firstname ASC");
			while($e = mysql_fetch_array($getEmployees)) {
				$admin = $e['admin'];
				if($admin == 1) {
					$ad = 'Yes';
				} else {
					$ad = 'No';
				}
				
				$active = $e['active'];
				if($active == 0) {
					$act = 'Yes';
				} else {
					$act = 'No';
				}
				$bio = $e['bio'];
				if(!empty($bio)) {
					$bio = substr($bio, 0, 25);
					$bio = $bio.'...';
				}
				
				$whyZ = $e['whyZ'];
				if(!empty($whyZ)) {
					$whyZ = substr($whyZ, 0, 25);
					$whyZ = $whyZ.'...';
				}
				$fromCity = $e['fromCity'];
				$fromState = $e['fromState'];
				$currentCity = $e['currentCity'];
				$currentState = $e['currentState'];
				
				if(empty($fromCity)) {
					$fromCity = '<font color="red">None</font>';
				}
				if(empty($fromState)) {
					$fromState = '<font color="red">None</font>';
				}
				if(empty($currentCity)) {
					$currentCity = '<font color="red">None</font>';
				}
				if(empty($currentState)) {
					$currentState = '<font color="red">None</font>';
				}
				echo '<tr><td><img src="'.$e['picture'].'" width="50" class="oImg"></td><td>'.$e['firstname'].'</td><td>'.$e['lastname'].'</td><td>'.$e['title'].'</td><td>'.$fromCity.', '.$fromState.'</td><td>'.$currentCity.', '.$currentState.'</td><td>'.date("m/d/Y", strtotime($e['hiredate'])).'</td><td>'.$act.'</td><td>'.$ad.'</td><td>'.$e['level'].'</td><td>'.$bio.'</td><td>'.$whyZ.'</td><td><a href="#" class="editE btn btn-primary" employee="'.$e['id'].'">Edit</a></tr>';
			}
			?>
			</tbody>
		</table>
	</div>
</div>
<style>
#eForm {overflow:auto;} #employeeTable_length, #employeeTable_filter {display:none;} .jconfirm.jconfirm-supervan .jconfirm-box div.jconfirm-content {overflow-x:hidden;} .ui-widget-overlay { position: fixed;}</style> 
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="js/tables.js"></script>
<script src="js/responsive.js"></script>
<script>
$('#employeeTable').dataTable({
	paging:false
});
var windowHeight = window.innerHeight -270;
$(document).on("click", '.editE', function(event) { 
	var employee = $(this).attr("employee");
	var joblisting = $.confirm({
			columnClass: 'col-md-10 text-left',
			draggable: false,
			theme: 'supervan',
			title: 'Edit Employee',
			content: 'url:includes/editemployee.php?employee='+employee,  
			 buttons: {
				close: function () {
					
				},
				update: function () {
						$('#eForm').submit();
				}
			},
			onContentReady: function() {
				$('#eForm').height(windowHeight);
			}
		});
})


$(document).on("click", '#addEmployee', function(event) { 
	var joblisting = $.confirm({
			columnClass: 'col-md-10 text-left',
			title: 'Add Employee',
			theme: 'supervan',
			content: 'url:includes/newemployee.php', 
			 buttons: {
				close: function () {
					
				},
				add: function () {
						$('#eForm').submit();
				}
			},
			onContentReady: function() {
				$('#eForm').height(windowHeight);
			}
		});
})

$(document).on("click", '.oImg', function(event) { 
	var imgSrc = $(this).attr("src");
	var joblisting = $.confirm({
			columnClass: 'col-md-10 text-left',
			theme: 'supervan',
			title: 'Profile Picture',
			content: '<img src="'+imgSrc+'">', 
			 buttons: {
				close: function () {
					
				}
			}
		});
})
</script>
</body>
</html>