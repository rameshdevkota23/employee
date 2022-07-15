<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="../css/bootstrap.css" media="all" rel="stylesheet">
</head>
<body>
<div class="container">
  <div class="row">
  <div class="col-6">
 
<?php 
 include('../include/conn.php');
 include('../include/config.php');
  $id=$_GET['id'];
 $result=view_one_row('emp_tble',$id);
 $array=assoc($result);

 ?>
 <form action="update.php" method="post" class="form-group">
    <label>Name:</label>
    <input type="text" name="name" class="form-control" value="<?php echo $array['nam'];?>"><br><br>
   <label>Email:</label>
   <input type="email" name="email" class="form-control" value="<?php echo $array['email'];?>"><br><br>
   <label>Phon Number:</label>
   <input type="tel" name="ph_name" class="form-control" value="<?php echo $array['ph_name'];?>"><br><br>
   <label>Address:</label>
   <input type="text" name="address"  class="form-control" value="<?php echo $array['addres'];?>"><br><br>
   <input type="hidden" name='hidden' value="<?php echo $id;?>">
   <input type="submit" value="submit" name="submit" class="btn btn-primary">
   </form> 
   </div>
   </div>
   </div>

 </body>
 </html>
 <?php 
 unset($result) ; ?>