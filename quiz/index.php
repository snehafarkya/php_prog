<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/DesignSystemsOSS/eccentrictouch@master/source/eccentrictouch.css" />
    
</head>
<body>

    <center>
        <?php
      echo " <h1>Let's bang on to QUIZ</h1><br>";
      echo " <form action='index.php' method='post'> ";
      echo "<input type='text' placeholder='Enter your name' name = 'name'><br><br>";
      echo "<input type='text' placeholder='Enter your enrolment no.' name = 'enrol'><br><br>";
      echo "<input type='text' placeholder='Enter your program name' name = 'pro'><br><br>";

     echo "<ul> <li> Ques 1: When is the Independance day of India celebrated? <br><br> </li>" ;
     echo "<input type='radio' name='q1' value = 'A' > 1924 <br><br>
            <input type='radio' name='q1' value = 'B' > 1947 <br><br>
            <input type='radio' name='q1'value = 'C'> 1950 <br><br>
            <input type='radio' name='q1' value = 'D' > 1952 <br><br> ";
        echo " <li>Ques 2: What is the national bird of India? <br> <br> </li>
        <input type='radio' name='q2' value = 'A'> Peacock <br><br>
        <input type='radio' name='q2'value = 'B' > sparrow <br><br>
        <input type='radio' name='q2' value = 'C'> squirrel <br><br>
        <input type='radio' name='q2' value = 'D' > pigeon <br><br> ";
        echo "<input type='submit' class='p-8' value='submit'><br><br>";
        echo "</ul>";
        echo "</form>"; 


?>
<?php
 error_reporting(E_ALL ^ E_WARNING); 
$count = 0;
$name = $_POST['name'];
$ans1 = $_POST['q1'];
$ans2 = $_POST['q2'];
$enrol = $_POST['enrol'];
$pro = $_POST['pro'];

$hostname = "localhost";
$userid = "root";
$pass = "sneha";
$dbname = "quizz";
$conn = new mysqli($hostname,$userid,$pass,$dbname);

$sql = "insert into quiz values('$name','$enrol','$pro','$ans1','$ans2');";
$result = mysqli_query($conn,$sql);


   if($ans1 == "B" && $ans2 == "A"){
    for ($count=1; $count <2 ; $count++) { 
        $count;
   }
   echo "you have answered $count correct answers";
}
else if($ans1 != "B" || $ans2 != "A"){
echo  "you have answered 1 correct answers";
}
else {
    echo "wrong answer";
}
?>


    </center>
</body>
</html>