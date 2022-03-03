<?php
mysql_connect("localhost", "znetworks", "utaqavaze") or die(mysql_error());
mysql_select_db("zadmin_employees") or die(mysql_error());

$firstname = mysql_real_escape_string($_POST['firstname']);
$lastname = mysql_real_escape_string($_POST['lastname']);
$title = mysql_real_escape_string($_POST['title']);
$bio = mysql_real_escape_string($_POST['bio']);
$date = date("Y-m-d", strtotime($_POST['hiredate']));
$admin = mysql_real_escape_string($_POST['admin']);
$fromCity = mysql_real_escape_string($_POST['fromCity']);
$fromState = mysql_real_escape_string($_POST['fromState']);
$admin = mysql_real_escape_string($_POST['admin']);
$level = mysql_real_escape_string($_POST['level']);
$currentCity = mysql_real_escape_string($_POST['currentCity']);
$currentState = mysql_real_escape_string($_POST['currentState']);
$whyZ = mysql_real_escape_string($_POST['whyZ']);

function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
  
$alias = getName(64);

$target_dir = "../img/employees/";
$target_file = $target_dir . $alias.'-'. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}


if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
} else {
	echo "Sorry, there was an error uploading your file.";
}

if(!empty($firstname)) {
	mysql_query("INSERT INTO employees (fromCity, fromState, currentCity, currentState, admin, level,  firstname, lastname, title, picture, bio, hiredate) VALUES ('$fromCity', '$fromState', '$currentCity', '$currentState', '$admin', '$level',  '$firstname', '$lastname', '$title', '$target_file', '$bio', '$date')");
	header("Location: ../admin2");
}
?>