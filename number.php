<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- use numberformat to format the numbers input from using the form -->
<center>
<form action="number.php" method="POST">
    <input type="number" name="total" value= '<?php if(isset($_POST['total'])){ echo $_POST['total'];} ?>' required>
    <input type="quantity" name = "qty" value = "<?php if(isset($_POST['qty'])){ echo $_POST['qty'];} ?>" required>
    <input type="submit" name="submit" value="Submit">

</form>
<?php
    function calculate($total,$qty){
  
        return $total/$qty;
    };
    if($_POST['submit']){
        echo "The computed price is ". number_format(calculate($_POST['total'],$_POST['qty']),3);
    }
?>
</center>
</body>
</html>