<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 include 'connect.php';

if(isset($_POST['sub'])){
  $usname = $_POST['name'];
  $uspass = $_POST['pwd'];
}
if(mysqli_query($conn,$sql)){
  echo "record inserted";
}

?>
</body>
</html>
