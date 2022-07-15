<?php 

//execute the select query by taking table name as argument
  function view($table) 
  { 
    $query="SELECT * FROM $table"; 
    $query_result=mysqli_query(connect(),$query);
    return $query_result; 
  } 

  //execute insert query by taking table name and data as argument
  function add($tname,$name,$email,$ph,$address){
   $query = "INSERT INTO $tname (nam,email,ph_name,addres) 
    VALUES ('".$name."','".$email."','".$ph."','".$address."')";
    $query_result=mysqli_query(connect(),$query);
    return $query_result;
  }
  //execute update query by taking table name and data as argument
  function edit($tname,$name,$email,$ph,$address,$id){
    $query = "UPDATE $tname SET nam='".$name."',
    email='".$email."',ph_name='".$ph."',addres='".$address."' 
    WHERE id='".$id."'";
     $query_result=mysqli_query(connect(),$query);
     return $query_result;
   }

   //execute delete query by taking table name and id as argument
   function delete($tname,$id){
    $query="DELETE FROM $tname WHERE id='".$id."' ";
     $result=mysqli_query(connect(),$query);
     return $result;
   }
   
   //execute the select query by taking table name and id as argument
   function view_one_row($table,$id) 
   { 
     $query="SELECT * FROM $table WHERE id='".$id."'"; 
     $query_result=mysqli_query(connect(),$query); 
     return $query_result; 
   } 
 
 ?>