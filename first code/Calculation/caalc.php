<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
       <center>
       <style>
           table,th,td{
               border:2px black solid;
               border-collapse: collapse;
                }
          
       </style>
       <h2>Display the results of input taken from user in form</h2>
   <form method='POST'>
 <input type="text" name="namee" value="<?php echo $namee;  ?>" placeholder="Enter your name"><br><br>
 <input type="number" name="count" placeholder="Enter Repetitions " ><br><br>
 <input type="number" name="num" placeholder="Enter your age" ><br><br>
 <input type="number" name="g1" placeholder="Enter a number" ><br><br>
 <input type="number" name="g2" placeholder="Enter another number" ><br><br>
 <input type="text" name="flow" placeholder="Enter flower name"><br><br>
 <input type="number" name="dayn" placeholder="Enter day name" ><br><br>
 <input type="submit" value="Submit">
 </form>
            </center>
</body>
</html>


<?php 
// phpinfo();

echo "<center> ";
$namee = $_POST['namee'];
$age = $_POST['num']; 
$count = $_POST['count'];
$n = 0;
while($n < $count){
echo "<h3> Hello $namee! <br></h3>";
$n++;
}
echo "<table cellspacing=5px cellpadding= 10px> <tr> <th> name </th> <th>age </th> </tr><tr> <td> $namee </td><td>$age</td></tr> </table> <br> <br>";
// Working eith variables
echo "<b>Calculator!<br><br></b>";
$num1 = 5;
$num2 = 10;
$num3 = $num1 + $num2; 
$sub = $num1 -  $num2;
$mul = $num1* $num2;
$mod = $num1 % $num2;
$div = $num1 / $num2;
echo "Addition is $num3 <br> Subtraction is $sub <br> Multiplication is $mul <br>Division is $div <br> Mod is $mod <br><br>"; 


// var_dump is a inbuilt func which returns data type and values 
echo "<b>var_dump example with array<br><br></b> ";
$flo = array("Rose", "Lily","Jasmine");
var_dump($flo);
echo "<br><br>";


// Writing a object 
echo "<b>Php objects and clasess<br><br></b>";
class Flower{
    public $name ;
    public $color;
    public function __construct($color, $name){
        $this->name = $name;
        $this->color = $color;
    }
    public function text(){
        return "This is a ". $this->color . " ". $this->name ."!!" ;
    }
    }
    $newflower = new Flower("red", "Rose");
    echo $newflower -> text();
    echo "<br>";
    $newflower = new Flower("yellow", "Sunflower");
    echo $newflower -> text();
    echo "<br>";
    // strings nd their methods
    echo "<b>String function</b><br><br>";
    echo strlen("Namaste People!");
    echo "<br>";
    echo strrev("Namaste People!");
    echo "<br>";
    echo str_word_count("New York is Beautiful!");
    echo "<br>";
    echo str_repeat("Sneha",2);
    echo "<br>";
    echo strchr("Incredible India","e");
    echo "<br>"; 
    echo strncmp("sneha","sneha",3);
    echo "<br>";  
    echo strtoupper("sneha"); 
    echo "<br>";  
    echo str_replace("h","i","sneha"); 
    echo "<br><br>"; 


    // Math library
    echo "<b>Math in-built functions</b><br><br>";
    echo (pi());
    echo "<br>";
    echo min(5,50,1,-6);
    echo "<br>";
    echo abs(-59);
    echo "<br>";
    echo rand();
    echo "<br>";
    echo round(1.499999);
    echo "<br>";  


    // if else programs
// input is from form above
echo "<b>If else statements</b><br><br>";
    $a = $_POST['g1'];
    $b = $_POST['g2'];
    if($a>$b && $a>$age){
        echo "<br>$a is greator and You are $age years old<br><br> ";
    }
    else if($b>$a && $b>$age){
        echo "<br>$b is greator  and You are $age years old <br><br>";
    }
    else{
        echo "<br>You are ".($age-$a-$b) ." years older than this numbers  <br><br>";
    }



// switch case
echo "<b>This is a switch case example</b><br><br>";
$flowerr = $_POST['flow']; 
switch($flowerr){
case 'rose':  
     echo "this is a rose<br> "; 
     break; 
case 'Lily': 
    echo "This is a Lily<br>";
    echo "This is white in color<br>";
    break;
default: 
     echo "this is a $flowerr <br><br>";
}  

echo "<b>Printing day name using sitch</b><br>";
$day = $_POST['dayn'];
switch($day){
    case 1 : 
        echo "Today is Monday<br>";
        break;
    case 2 : 
        echo "Today is Tuesday<br>";
        break;
    case 3 : 
        echo "Today is Wednesday<br>";
        break;   
    case 4 : 
        echo "Today is Thursday<br>";
        break;
    case 5 : 
        echo "Today is Friday<br>";
        break;
    case 6 : 
        echo "Today is Saturday<br>";
        break;
    case 7 : 
        echo "Today is Sunday<br>";
        break; 
    default: 
        echo "Please enter a valid day number(from 1 to 7)<br><br>";
}

// loops 
echo "<b>while loop</b><br><br>";
while($a>20) {
    echo "Sneha is an incredible Singer<br>"; 
    $a--;
} 
echo "<b>Do-while loop</b><br><br>"; 
do{
    echo "Sneha is a great Content writer and Frontend developer!<br>"; 
    $b--;
}
while($b>12) ;

echo "<b>For loop</b><br><br>"; 
$arr = array("Sneha","John","10","David");
for($i=0;$i< count($arr);$i++)
{
    echo "$arr[$i]<br>";
} 
echo "End of an array<br><br>";

for($n=0; $n<11; $n++){
    echo "<br>$n<br>";
}


?>