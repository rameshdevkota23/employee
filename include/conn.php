
<?php 
include('constant.php'); 
//connect with database
function connect(){
   $conn= mysqli_connect(local,root,pass,dbname);
   return $conn;
   
}
//execute query
function execute($conn,$query){
    return mysqli_query($conn,$query);
}
//convert into associative array the data  which fetch from database
function assoc($result){
   return mysqli_fetch_assoc($result);
}
//return the number of rows in the table
 function num($array){
    return mysqli_num_rows($array);
 }

 ?>