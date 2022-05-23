<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form action="calculator.php" method="POST">
        <input type="number" name="num"  placeholder="Enter first operand" value="<?php if(isset($_POST['submit'])){ echo $_POST['num'];} ?>"><br><br>
      <select name="operator" >
          <option value="+">Add</option>
          <option value="-">substract</option>
          <option value="*">multiply</option>
          <option value="/">Adivide</option>
      </select><br><br>
      <input type="number" name="num2" placeholder="Enter second operand" value="<?php if(isset($_POST['submit'])){ echo $_POST['num2'];} ?>"><br><br>
        <input type="submit" name="submit" value="submit"><br><br>
    </form> 
    <?php 
       error_reporting(E_ALL ^ E_WARNING);
       if(isset($_POST['submit'])){
    $num = $_POST['num'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator']; 

    if($operator == '+'){
        echo $num+$num2;
    }
    else if($operator == '-'){
        echo $num-$num2;
    } 
    else if($operator == '*'){
        echo $num*$num2;
    }
    else{
        echo $num/$num2;
    }
}
    ?>
</body>
</html>