<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping</title>
</head>
<body>
 <form action="Dsplay.php" method="post">
        <input type="text" name="name" placeholder="Enter your name" id=""><br>
        Choose the fruit you wanna buy:<br> <input type="radio" name="apple" value="apple" id="">Apple<br>
        <input type="radio" name="apple" value="mango" id="">Mango<br>
        <input type="radio" name="apple" value="banana" id="">Banana<br>
        <input type="radio" name="apple" value="Grapes" id="">Grapes<br>
        <input type="number" name="qty" id=""><br>
        <input type="submit" value="submit" name="submit"><br>
 </form>   
 <?php 
 Session_start();
 extract($_SESSION[$_POST]);
 $_SESSION['quantity']=$qty;
 $_SESSION['fruit']=$apple;
 if(isset($submit)){

    if($apple =="apple"){
        echo "you have choosen  ".$_SESSION['quantity'],  $_SESSION['fruit']." ";
    }
    elseif ($apple == "mango") {
        echo "you have choosen ".$_SESSION['quantity'] , $_SESSION['fruit'] ." ";
    }
 }


 ?>
 
</body>
</html>