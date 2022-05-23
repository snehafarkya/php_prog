<?php
$hostname = "localhost";
$userid = "root";
$pass = "sneha";
$dbname = "students";
$conn = new mysqli($hostname,$userid,$pass,$dbname);

if(!$conn){
    echo "error in getting connection";
}
else{
    echo "connection successfull";
}

$uname = '501';
$upass = 'arun';
 
$sql = "select * from students where USERID = '$uname' and PASSWORD = '$upass'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);


echo "<br>number of rows: $count <br>";


?>