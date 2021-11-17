<?
$name = $_POST{'name'};
$email = $_POST{'email'};
$message = $_POST['message'];
$mailTo = "patelgautam762@gmail.com"
$email_message = "Your mail is recieved"

Name: ".$name."
Email: ".$email."
Message: ".$message."

";

mail ("name@youremail.com" , "New Message", $email_message);
header("location: ../mail-success.html ");
?>


