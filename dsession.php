
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
        $_SESSION['favcolor']='green';
        $_SESSION['favanimal']='tiger';
        echo "Session variables set";
        ?>
        <a href="./dsession2.php"><br>Click to see iteration</a>
        </center>
</body>
</html>