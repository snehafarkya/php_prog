<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    
<form action="index.php" method="post">
    <input type="text" name="fname" id=""  placeholder="Enter first name"><br><br>
    <input type="text" name="lname" id="" placeholder="Enter last name"><br><br>
    <input type="email" name="email" id="" placeholder="Enter email"><br><br><br>

    <input type="submit" value="submit" name="submit">
</form>


<?php
 $hostname = "localhost";
 $userid = "root";
 $pass = "sneha";
 $dbname = "test";
 $conn = new mysqli($hostname,$userid,$pass,$dbname);
 
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
$mail=$_POST['email'];

  $sql = "insert into phplabmysql values('$fname','$lname','$mail');";
  $result = mysqli_query($conn,$sql);
 if($conn->query($sql)===TRUE){
     echo "Inserted successfully <br><br>"; 
     echo "Your full name is : $fname"." $lname";
 }
 else{
       echo "Failed to insert record";
 }
 
?>
</body>
</html>