<?php
error_reporting(E_ERROR | E_PARSE);
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
error_reporting(E_ERROR | E_PARSE);
$name = $_POST['name'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$sub= $_POST['sub'];
$message= $_POST['message'];
$subject="Royal chest Chungath Jewellery Diamond Boutique";
$to="royal_chest@hotmail.com" ;
//  $to="ehasalpha@gmail.com" ;

$txt ="Name : ". $name . "\r\n phone : " . $phone . "\r\n  sub :" . $sub . "\r\n Message : ". $message;
$sub= ". $sub";
$headers = "From:" . $email;
 $status = null;
if(mail($to,$subject,$txt,$headers)) {
 
$status=1;

} else {
    $status=0;
}
header("Location:index.php?s=".$status);
exit;
?>