<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){


$name = $_POST['name'];
$email= $_POST['email'];
$number=$_POST['mobile'];
$message= $_POST['message'];

//connection to database
$servername="localhost";
$username="root";
$passworrd=" ";
$database="contact us";

//create a connection
$conn= mysqli_connect($servername,$username,$passworrd,$database);
if(!$conn){
  die("sorry we faild to connect:".mysqli_connection_error());
}
else{
  echo "connect was successfully";
  $sql="INSERT INTO `contact us` (`serial no`, `Name`, `email`, `phone number`, `message`) VALUES ('$name', '$email', '$number', '$message')";
$result=mysqli_query($conn,$sql);
if($result){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success!</strong> thank you to contact us.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
else{
  echo "the record was not sumited successfully because the error --->".mysqli_error($conn);
}
}
}


?>
