<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./scss/main.css">
    <script type="text/javascript">
        function setText(mybutton){
    
    document.mform.op1.value=mybutton.value;
    document.mform.operator.value=mybutton.value;
    document.mform.op2.value=mybutton.value;
   
    document.getElementById('name').value= document.getElementById('name').value + mybutton.value;
}
    </script>
</head>

<body>
    <form  method="post" name="mform">
      <div class="container">
          <input type="text" name="name" id="name">
        <input type="hidden" name="op1" id="op1">
        <input type="hidden" name="operator" id="operator">
        <input type="hidden" name="op2" id="op2">
        


    <div class="buttons">
    <input type="button" value="(" onclick="javascript:setText(this)" id="op" name="open">
    <input type="button" value=")" onclick="javascript:setText(this)" name="close">
   <input type="button" onclick="javascript:setText(this)" value="%">
   <input type="button" onclick="javascript:setText(this)" value="AC" name="Ac">

   <input type="button" onclick="javascript:setText(this)" value="7" name="seven">
   <input type="button" onclick="javascript:setText(this)" value="8" name="eight">
   <input type="button" onclick="javascript:setText(this)" value="9" name="nine">
    <input type="button" onclick="javascript:setText(this)" value="/">

    <input type="button" onclick="javascript:setText(this)" value="4" name="four">
    <input type="button" onclick="javascript:setText(this)" value="5" name="five">
    <input type="button" onclick="javascript:setText(this)" value="6" name="six">
    <input type="button" onclick="javascript:setText(this)" value="*">

    <input type="button" onclick="javascript:setText(this)" value="1" name="one">
    <input type="button" onclick="javascript:setText(this)" value="2" name="two">
    <input type="button" onclick="javascript:setText(this)" value="3" name="three">
    <input type="button" onclick="javascript:setText(this)" value="-">

    <input type="button" onclick="javascript:setText(this)" value="0" name="zero">
    <input type="button" onclick="javascript:setText(this)" value="." name="dot">
    <input type="button" onclick="javascript:setText(this)" value="+">
    <input type="submit" value="=" name="res">
    </div>
    </div>
    </form>

    <?php 
    $op1 = $_POST['op1'];
    $operator = $_POST['operator'];
    $op2 = $_POST['op2'];
    $name= $_POST['name'];

    if($operator = "+")
    {
        echo 'the addition is '. $op1 + $op2;
        $name=$op1 + $op2;
    }
    elseif($operator = "-")
    {
        echo 'the subtraction is '. $op1 - $op2;
    }
    elseif($operator = "*")
    {
        echo 'the multiplication is '. $op1 * $op2;
    }
    elseif($operator = "/")
    {
        echo 'the division is '. $op1 / $op2;
    }
    elseif($operator = "%")
    {
        echo 'the mod is '. $op1 % $op2;
    }
    else{
        echo "hiii";
    }
?>
</body>
<script src="./script.js"></script>
</html>