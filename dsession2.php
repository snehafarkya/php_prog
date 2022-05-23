<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-size:2em;
    }
</style>
<body>
    <center>
<?php 
        Session_start();
        ?>
        <?php
        for ($i=0; $i <4 ; $i++) { 
        
        echo "Your fav color is ".$_SESSION['favcolor']."<br>";
        echo "Your fav animal is ".$_SESSION['favanimal']."<br><br>";
        }
        ?>
        </center>
</body>
</html>