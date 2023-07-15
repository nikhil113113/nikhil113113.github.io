<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['mail'];
$subject= $_POST['subject'];
$message= $_POST['message'];
// $number= $_POST['number'];

$to = "nikhilmanojn3@gmail.com";
$subject = "Mail From Rinshad";
$txt ="Name = ". $name . "\r\n  Email = " . $mail . "\r\n Message =" . $message . "\r\n Subject =" . $subject ;
$headers = "From: nikhilmanojn3@gmail.com" . "\r\n" .
"CC: nikhilmanojn3@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:../index.html");
?>