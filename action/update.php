<?php 
include('../include/conn.php');
include('../include/config.php');
$id =$_POST['hidden'];
   $name= $_POST['name'];
   $email= $_POST['email'];
   $ph_name= $_POST['ph_name'];
   $address= $_POST['address'];
   $result=edit('emp_tble',$name,$email,$ph_name,$address,$id);
   if ($result){
    $editmsg="Data Updated successfully";
   }
   else{
    $editmsg="Data doesnot Updated successfully";
   }
   header ("location:../index.php?editmsg=$editmsg");

   

 ?>