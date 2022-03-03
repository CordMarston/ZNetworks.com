<?php
$pw = file_get_contents('zconf.php');
$pw = base64_decode(base64_decode($pw));
require '../assets/mail/PHPMailerAutoload.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$position = $_POST['position'];
$website = $_POST['website'];
$locations = $_POST['locations'];
$workstations = $_POST['workstations'];
$servers = $_POST['servers'];

$notes = $_POST['notes'];


$body = '<b>Name:</b> '.$firstname.' '.$lastname.'<br/><b>Email:</b> '.$email.'<br/><b>Phone:</b> '.$phone.'<br/><b>Company:</b> '.$company.'<br/><b>Position:</b> '.$position.'<br/><b>Website:</b> '.$website.'<br/><b>Locations:</b> '.$locations.'<br/><b>Workstations:</b> '.$workstations.'<br/><b>Servers:</b> '.$servers.'<br/><b>Notes:</b> '.$notes.'<br/>';

$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = '50.245.144.205';  // Specify main and backup SMTP servers
$mail->SMTPAuth = false;                               // Enable SMTP authentication
$mail->Username = 'helpdesk@znws.com';                 // SMTP username
$mail->Password = $pw;                           // SMTP password
$mail->Port = 25;        

$mail->From = 'helpdesk@znws.com';;
$mail->FromName = 'Helpdesk';
$mail->addAddress('sales@znws.com');     // Add a recipient
$mail->addCC('web@znws.com');
$mail->addReplyTo('helpdesk@znws.com', 'Helpdesk');

$mail->isHTML(true);                                  // Set email format to HTML
// $mail->SMTPDebug = true;	
$mail->Subject = 'Z Networks Consultation';
$mail->Body = $body;
$mail->send();

if(!empty($firstname) && !empty($company)) 
{
	// this is the connection string, do not alter
	mysql_connect("helpdesk2.znetworks.biz", "zinternal_write", "znetdev63119!") or die(mysql_error());
	mysql_select_db("zadmin_noctester") or die(mysql_error());
	
	// insert string will need to filled with variables. You can stick the random questions like area of interest, locations, employees, etc in the “notes” variable
	mysql_query("INSERT INTO CRM_leads (firstname, lastname, title, phone, email, company, website, notes) VALUES('$firstname', '$lastname', '$position', '$phone', '$email', '$company', '$website', '$body')");
                

}
?>