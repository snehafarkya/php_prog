<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HCF </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>HCF/LCM Calculator</h1>
    <form action="hcf.php" name="myform" method="post">
        <input type="number" name="num1" id="n" value="<?php if(isset($_POST['sub']) || isset($_POST['sub1']) ){ echo $_POST['num1'];} ?>" placeholder="Enter first number"><br>
        <input type="number" name="num2" id="m" value="<?php if(isset($_POST['sub']) || isset($_POST['sub1'])){ echo $_POST['num2'];} ?>" placeholder="Enter second number"><br>
        <input type="submit" name="sub" value="HCF">
        <input type="submit" name="sub1" value="LCM">
    </form>
    
    <?php 
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $x=$num1;
    $y=$num2;
    function hcf($x,$y){
        if($y==0)
        return $x;
        return hcf($y,$x%$y);
    }
    
    if(isset($_POST['sub'])){
    
        $gcd = hcf($x,$y);
        
    echo "<h2><center>The hcf of $num1 and $num2 is ". $gcd." </center></h2>" ;
    }
    else{
        $lcm = ($x*$y)/hcf($x,$y);
    echo "<h2><center>The lcm of $num1 and $num2 is ". $lcm." </center></h2>" ;
    }
   ?>
   </div>
</body>
</html>