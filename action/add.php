<?php 
include('../include/conn.php');
include('../include/config.php');
$emailmsg="";
$phmsg="";
$namemsg="";
$msg="";

$name=$_POST['name'];
$email= filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$phon= filter_var($_POST['ph_name'],FILTER_SANITIZE_NUMBER_INT);
$address=$_POST['address'];

$val_email=filter_var($email,FILTER_VALIDATE_EMAIL);
$val_phon=filter_var($phon,FILTER_VALIDATE_INT);
$val_name=preg_match ("/^[a-zA-z ]*$/", $name);


if (!$val_email || !$val_phon || !$val_name) {
    if (!$val_email) {
        $emailmsg= "Email address is not valid";
        //  echo $emailmsg;
       
    }
    if (!$val_phon) {
        $phmsg= "phon number is not valid";
        //  echo $phmsg;
    }
    if (!$val_name) {
        $namemsg= "Name is not valid";
        // echo $namemsg;
    }
}


else{
$result=add('emp_tble',$name,$email,$phon,$address);
if ($result) {
     $message="Data added sucessfully";
}
else{
    $message="Data doesnot added sucessfully";
}
}


header("location:../index.php?emailmsg=$emailmsg&phmsg=$phmsg&namemsg=$namemsg&msg=$message");

 ?>