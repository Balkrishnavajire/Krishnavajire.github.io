<?
$name = $_POST{'name'};
$email = $_POST{'email'};
$message = $_POST['message'];

$email_message = "Mail from krishna vajire"

Name: ".$name."
Email: ".$email."
Message: ".$message."

";

mail ("Balkrishnavajire@gmail.com.com" , "New Message", $email_message);
header("location: ../mail-success.html ");
?>


