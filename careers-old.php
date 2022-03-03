<?php 
$title = ' - Careers';
include('includes/header.inc.php');?>
<section class="careers">
	<div class="container">
		<div class="row py-5">
			<div class="col-md-12 d-block">
				<p class="text-center text-uppercase">Work at Z Networks</p>
				<h2 class="text-center">Employment Opportunities</h2>
				<p class="pt-3">Why work for Z Networks? There are many reasons to work for Z Networks starting with the people, the benefits, the fast paced work environment and most importantly the potlucks!</p>
				<p class="font-weight-bold">Z Networks offers 100% paid medical and dental insurance for all employees and their dependants under 21 years old. In addition, Z Networks also offers a $50,000 life insurance policy to their employees.</p>
				<table id="jobTable" class="table table-striped table-bordered" style="width:100%;">
					<thead>
						<tr>
							<th data-priority="1">Title</th>
							<th>State</th>
							<th data-priority="1">City</th>
							<th>Date Posted</th>
							<th data-priority="2">Info</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</section> 
<style>#jobTable_length, #jobTable_filter {display:none;} .jconfirm.jconfirm-supervan .jconfirm-box div.jconfirm-content {overflow-x:hidden;}</style> 
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="js/tables.js"></script>
<script src="js/responsive.js"></script>
<script>
var windowHeight = window.innerHeight -270;

<?php 
$action = $_GET['submit'];
if($action == 'app') {?>
var jobAction = $.confirm({
			title: 'Application Submitted',
			type: 'green',
			content: 'Your application has been submitted.', 
			 buttons: {
				close: function () {
					
				}
			}
		});
<?php } ?>
var table = $('#jobTable').dataTable( {
	responsive:true,
	"processing": true,
	"deferRender": true,
	"serverSide": true,
	"responsive": true,
	"iDisplayLength": 25,
	"ajax": {
		timeout: 4000,
		"url": "https://dashboard.znetworks.biz/tables/sharejobs.php",
		"type": "POST",
		"data": function ( d ) {
		}
	}
});

$(document).on("click", '.joblink', function(event) { 
	var jobId = $(this).attr("jobId");
	var jobTitle = $(this).attr("jobTitle");
	var joblisting = $.confirm({
			columnClass: 'col-md-10 text-left',
			theme: 'supervan',
			title: jobTitle+' Job Description',
			content: 'url:https://dashboard.znetworks.biz/includes/forms/jobdesc.php?jobId='+jobId, 
			 buttons: {
				close: function () {
					
				},
				apply: function () {
						var jobapp = $.confirm({
							columnClass: 'col-md-10 text-left',
							theme: 'supervan',
							title: jobTitle+' Job Application',
							content: 'url:https://dashboard.znetworks.biz/includes/forms/jobapp.php?jobId='+jobId, 
							 buttons: {
								close: function () {
									
								},
								submit: function () {
									text:'Submit Application'
									$('#appForm').submit();
								}
							},
							onContentReady: function() {
								$('#jobApp').height(windowHeight);
							}
						});
				}
			},
			onContentReady: function() {
				$('#jDesc').height(windowHeight);
			}
		});
})
</script>
<?php include('includes/footer.inc.php');?>