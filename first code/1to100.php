 <?php 
// echo "series from 1 to 100 <br>";
// for( $i=0;$i<=100;$i++){
//     echo "$i <br>";
// }
?>  
<?php
 $str="hello I am sneha";
 echo "String to array conversion using explode function<br>";
print_r (explode(" ",$str,2));
echo "<br>";
echo "Array to string conversion using implode() function<br>";
$ar=array("rose","taylor","swift");
print_r (implode("-",$ar));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="text" id="">
        <input type="submit" value="submit" name="sub">
    </form>

    <?php 
    error_reporting(E_ALL ^ E_WARNING);
       $text = $_POST['text'];
       print_r(explode(" ",$text,2));
    ?>

    <?php
    print" <form  method=post>";
    for ($i=0; $i < 5; $i++) { 
        print"<input type=text name=tex$i size=5>";
    }
    print"input type=submit";
       print 

?>
</body>
</html>