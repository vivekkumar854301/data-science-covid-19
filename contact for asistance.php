<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$number=$_POST['mobile'];
$message= $_POST['message'];
$to = "viveksingh144399@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ."\r\n mobile number=" .$number;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
