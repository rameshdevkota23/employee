<?php 
include('include/conn.php');
include('include/config.php');
$data=view('emp_tble');
echo $data[0]['email'];
//    include('include/conn.php');
//    include('include/config.php');
//    function data(){
//     $result=view('emp_tble');
//    while($data=assoc($result)) {
//            for ($i=0; $i < num($result); $i++) { 
//              $emp[$i]['name']=$data['nam'];
//              $emp[$i]['email']=$data['email'];
//              $emp[$i]['ph_name']=$data['ph_name'];
//              $emp[$i]['address']=$data['addres'];
//            }
//    } 
// return $emp;
// }


?>