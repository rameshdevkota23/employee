
<?php
include 'constant.php';
//connect with database
function connect()
{
   mysqli_report(MYSQLI_REPORT_STRICT);
   try {
      $conn = mysqli_connect(local, root, pass, dbname);
   } catch (Exception $ex) {
      die ("connection failed".$ex->getMessage());
      exit();
   }
   //  $conn = mysqli_connect(local, root, pass, dbname);
   
    return $conn;

}
//execute query
function execute($conn, $query)
{
    return mysqli_query($conn, $query);
}
//convert into associative array the data  which fetch from database
function assoc($result)
{
    return mysqli_fetch_assoc($result);
}


?>