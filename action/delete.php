<?php 
include('../include/conn.php');
include('../include/config.php');
$id = $_GET['id'];
$result=delete('emp_tble',$id);

if ($result){
    $dltmsg="Data deleted sucessfully";
   }
   else{
    $dltmsg="Data doesnot deleted sucessfully";
   }
   unset($result);
   header ("location:../index.php?dltmsg=$dltmsg");
 ?>