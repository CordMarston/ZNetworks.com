<?php
// ini_set('display_errors',1);
// error_reporting(E_ALL);
mysql_connect("localhost", "znetworks", "utaqavaze") or die(mysql_error());
mysql_select_db("zadmin_employees") or die(mysql_error());

$firstname = mysql_real_escape_string($_POST['firstname']);
$lastname = mysql_real_escape_string($_POST['lastname']);
$email = mysql_real_escape_string($_POST['email']);
$phone = mysql_real_escape_string($_POST['phone']);
$jobId = mysql_real_escape_string($_POST['jobId']);

$today = date("Y-m-d");

function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
  
$alias = getName(128);

if(!empty($firstname)) {
	mysql_query("INSERT INTO jobApplicants (firstname, lastname, email, phone, signupDate) VALUES ('$firstname', '$lastname', '$email', '$phone', '$today')");
	$applicant = mysql_insert_id();
	if(!empty($applicant) && !empty($jobId)) {	
		mysql_query("INSERT INTO jobApplications (applicant, job, date) VALUES ('$applicant', '$jobId', '$today')");
		$application = mysql_insert_id(); 
	}
	
	if(!empty($_FILES["fileToUpload"]["name"])) {
		$target_dir = "../resume/";
		$file = basename($_FILES["fileToUpload"]["name"]);
		$nf = $target_dir.$file;
		$extension = strtolower(pathinfo($nf,PATHINFO_EXTENSION));
		$newfile = $alias.'.'.$extension;
		$target_file = $target_dir.$newfile;
		echo $target_file;
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
		
		mysql_query("INSERT INTO resumes (name, src, application) VALUES ('$file', '$newfile', '$application')");
	}

	header("Location: ../careers?submit=app");
} else {
	header("Location: ../careers");
}

?> 