<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){


$name = $_POST['name'];
$email= $_POST['email'];
$number=$_POST['mobile'];
$message= $_POST['message'];
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>success!</strong> thank you to contact us.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
} 
//$to = "viveksingh144399@gmail.com";
//$subject = "Mail From website";
//$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ."\r\n mobile number=" .$number;
//$headers = "From: noreply@covid-19.com" . "\r\n" .
//"CC: somebodyelse@example.com";
//if($email!=NULL){
  //  mail($to,$subject,$txt,$headers);

//redirect
//header("Location:thankyou.html");

?>
