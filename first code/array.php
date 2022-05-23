<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    body{
      background: black;
      color: white;
    }
    h2{
      color: pink;
    }
    h1{
      color: skyblue;
    }
</style>
<center>
<form method="POST">
  <input style="padding:15px" type="number" name="num" value="<?php if(isset($num)){ print($num);} ?>" placeholder="Enter index number">
  <input style="padding:15px" type="submit" name="submit" value="submit">
</form>
  </center>
<?php 
echo "<center>";
  error_reporting(E_ALL ^ E_WARNING); 
  $num = $_POST['num'];
// sorting array
  $ar = array(10,2,36,7,58);
  $ar[5]=99;
  $ar[6]=16;
// sort for ascending order
  sort($ar);
// rsort for reverse sorting 
// rsort($ar);
  echo "<h1>Sorting of array in ascending order<br></h1>";
  $length=count($ar);
  echo "<h2>No of elements in an array $length</h2>";
  for($i=0;$i<$length;$i++)
  {
  echo "<h3>Element at $i position is $ar[$i]</h3>";
 
  }

  // key value pair
  echo "<h1>Key value pair example</h1>";
  $aray = array('white' => 'apple','yellow' => 'mango', 'skyblue' => 'grapes');
  echo "<h3>$aray[white]</h3>";

  $shopinglist = array('orange','apple','grapes','mango','watermelon');
  echo "<h1>Printing shopping list through array <br></h1>";
  echo "<br><ol>";
  for ($i=0; $i < sizeof($shopinglist) ; $i++) { 
   
     echo "<h3><li>$shopinglist[$i]</li></h3>";
  }
  echo "</ol>";
  if(isset($num) && $num<=sizeof($shopinglist) && $num != " "){
  echo "<h2>The element at $num is $shopinglist[$num]</h2>";
  }
  else{
    echo "<h2>Enter valid number ‼</h2>";
  }
  echo "<ol>";
  foreach ($shopinglist as $item) {
  echo "<h3><li>$item</li></h3>";
  }
  echo "</ol>";
  foreach ($aray as $key => $item) {
    echo "<h2>$key $item </h2>";
  }
echo "</center>";


echo "<br><br>";
$count= count($ar);
echo "<pre>";
print_r($ar);

for ($i=0; $i < $count ; $i++) { 
  for ($j=$i+1; $j <$count ; $j++) { 
       if($ar[$i]>$ar[$j])
       {
         $temp=$ar[$i];
         $ar[$i]=$ar[$j];
         $ar[$j]=$temp;

       }
  }
}
echo "<br>Sorted array is: "."<br/>";
print_r($ar);
?>

<?php
$car = array(
  array("swift","maruti"),
  array("bmw","roadies")
);
print_r($car);

?>

</body>
</html>