<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// indexed arrays
echo "<b>var_dump example with array<br><br></b> ";
$flo = array("Rose", "Lily","Jasmine");
var_dump($flo); 
// echo "<br>";
// echo gettype($flo);
echo "<br><br>";

print_r($flo);
echo "<br><br> for loop<br><br>";
$arrlength = count($flo);

for($x = 0; $x < $arrlength; $x++) {
  echo $flo[$x];
  echo "<br>";
}
echo "<br>";
// associated array
$cost = array("Paper packet"=>"35", "Pen"=>"10", "Copy"=>"50");
echo "<br> var_dump<br><br>";
var_dump($cost);
echo "<br> foreach loop <br><br>";
foreach ($cost as $item => $value) {
    echo   $item . "=" . $value;
    echo "<br>";
}

echo "<br><br> print_r<br><br>";
print_r($cost);

?>
</body>
</html>