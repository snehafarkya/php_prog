<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
   <style>
       body{
           background: black;
           text-align:center;
       }
       h1{
           color: blue;
           text-align: center;
       }
    </style>
    <?php
     error_reporting(E_ALL ^ E_WARNING); 
     $name = $_POST['name'];

     ?>
     </body>
    <?php
     function log(string $name = null)
     {
        return true;
     }
   
    if(isset($name)){
        if(log($name)){
        echo "<h1>hello $name </h1>";
    }
    else{
        ?>
        <script>
            function click(){
                    <?php
                    echo "<h1>Hello sneha!</h1>";
                    ?>
            }
        </script>
    <?php
    }
}
    else{
        ?>
        
        <form action="test.php" method="post">
        <input type="text" name="name" >
        <input type="button" value="Submit" onclick="click()">
    </form>
<?php  
    }

    ?>

</html>