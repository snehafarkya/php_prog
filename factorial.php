<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form action="factorial.php" method="POST">
        <input type="number" name="num" id="" value="<?php if(isset($num)){ echo "hi";}  ?>"><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    error_reporting(E_ALL ^ E_WARNING);
    $num= $_POST['num'];
    if(isset($num)){
    $fact = 1; 
   for ($i=1; $i <= $num ; $i++) { 
    $fact = $fact*$i;
   }
    echo "Factorial of $num is: $fact";
    }

    ?>
</body>
</html>