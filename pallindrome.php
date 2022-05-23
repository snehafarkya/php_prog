<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form action="pallindrome.php" method="POST">
        <input type="number" name="num" id="" value="<?php if(isset($_POST['submit'])){ echo $_POST;} ?>"><br>
        <input type="submit" name="submit" value="submit"><br>
    </form>
   <?php
   if(isset($_POST['submit'])){
   $num= $_POST['num'];
   $rev=strrev($num);
   if($rev==$num){
      
       echo "hii";
   }
   else{
       echo "bye";
   }
   }

   ?>
   </body>
   </html>