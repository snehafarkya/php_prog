<?php
$hostname = "localhost";
$userid = "root";
$pass = "sneha";
$dbname = "connect";
$conn = new mysqli($hostname,$userid,$pass,$dbname);

if(!$conn){
    echo "error in getting connection";
}
else{
    echo "connection successfull";
} 
$usname = $_POST['name'];
$uspass = $_POST['pwd'];
$sql = "insert into con values('$usname','$uspass');";
$result = mysqli_query($conn,$sql);


?>