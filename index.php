<?php
include('include/conn.php');
include('include/config.php');
$emailmsg="";
$phmsg="";
$namemsg="";
$msg="";
if (!empty($_REQUEST['dltmsg'])) {
    echo $_REQUEST['dltmsg'];
}
if (!empty($_REQUEST['msg'])) {
    echo $_REQUEST['msg'];
}
if (!empty($_REQUEST['editmsg'])) {
    echo $_REQUEST['editmsg'];
}


if (!empty($_REQUEST['namemsg'])) {
    $namemsg=$_REQUEST['namemsg'];
}
if (!empty($_REQUEST['emailmsg'])) {
    $emailmsg=$_REQUEST['emailmsg'];
}
if (!empty($_REQUEST['phmsg'])) {
    $phmsg=$_REQUEST['phmsg'];
}

  ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.css" media="all" rel="stylesheet">
</head>
<body>
   <div class="container">
  <div class="row">
  <div class="col-4">
 
   <form action="action/add.php" method="post" class="form-group">
    <label>Name:</label>
    <input type="text" name="name" class="form-control" required><br><br>
    <label ><?php echo $namemsg ; ?></label><br><br>
   <label>Email:</label>
   <input type="text" name="email" class="form-control"required><br><br>
   <label ><?php echo $emailmsg ;?></label><br><br>
   <label>Phon Number:</label>
   <input type="text" name="ph_name" class="form-control" required><br><br>
   <label><?php echo $phmsg ; ?></label><br><br>
   <label>Address:</label>
   <input type="text" name="address" required class="form-control"><br><br>
   <input type="submit" value="submit" name="submit" class="btn btn-primary" class="form-control">
   </form> 


</div>
    <div class="col-8">
<?php 


$result=view('emp_tble');
$count=num($result);
if ($count>0) {
    ?>
    <table border="1" class="table table-striped">
        <thead>
            
            <tr>
            <td>Employment Name</td>
            <td>Employment Email</td>
            <td>Phon Number</td>
            <td>Address</td>
            <td>Action</td>
            </tr>   
        </thead>
    <?php
    while ($array=assoc($result)) {
      ?>
      
        <tbody>
            <tr>
            <td><?php echo $array['nam'] ; ?></td></td>
            <td><?php echo $array['email'] ; ?></td>
            <td><?php echo $array['ph_name'] ; ?></td>
            <td><?php echo $array['addres'] ; ?></td>
            <td>
                
               <a href="action/editform.php?id=<?php echo $array['id'] ?>"><input type="button" value="Edit" class="btn btn-primary" ></a>
               <a href="action/delete.php?id=<?php echo $array['id']?>"><input type="submit" value="Delete" class="btn btn-danger"></a>
       
            </td>
            </tr>
        
        </tbody>
 <?php } ?>
      </table>
      </div>
      <?php
    
}

unset($result);
  ?>
  
</div>
</div>
</body>
</html>