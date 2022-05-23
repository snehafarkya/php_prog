<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
body{
  margin: 0;
  padding: 0;
  font-family:'Coiny',cursive;
  background: #34495e;
}
.container{
  width:300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;
  border-radius: 15px;
  box-shadow: black 20px 15px 20px;
}
.container h1{
  color: white;
  font-weight: 500;

}
.container input[type="text"],.container input[type="password"],.container input[type="email"]{
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  font-size: 16px;
  border-radius: 24px;
  transition: 0.5s all ease-in-out;
}
.container input[type="text"]:focus,.container input[type="password"]:focus,.container input[type="email"]:focus{
    transform: scale(1.2);
 border-color: white;
 border-radius: 12px;
 background: gray;
 opacity: 50;
}
.container input[type="submit"]{
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 25px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  font-size: 17px;
  font-family: 'Libre Baskerville', serif;
}
.container input[type="submit"]:hover{
  background: #2ecc71;

}
a{
  color: skyblue;;
  font-size: 1em;
}
h2{
  color: white;
  font-family: monospace;
  position: relative;
}

    </style>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="Login Form.css">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
  </head>
 
  <body>
  <?php
$hostname = "localhost";
$userid = "root";
$pass = "sneha";
$dbname = "register";
$conn = new mysqli($hostname,$userid,$pass,$dbname);

if(!$conn){
    echo "error in getting connection";
}
else{
    echo "connection successfull";
}

$usname = $_POST['uname'];
$usemail = $_POST['email'];
$uspass = $_POST['upass'];
$usrpass = $_POST['rpass'];
$sql = "insert into reg values('$usname','$usemail','$uspass','$usrpass');";
$result = mysqli_query($conn,$sql);


?>
    <?php  
    error_reporting(E_ALL ^ E_WARNING); 
    $uname = $_POST['uname'];
    $upass = $_POST['upass']; 
    $email = $_POST['email'];
    $rpass = $_POST['rpass'];

    function register(string $uname = null, string $upass = null,string $email = null,string $rpass = null)
    {
       return true;
    }
    if(isset($uname) && isset($upass) && isset($email) && isset($rpass) ){
      if(register($uname,$upass,$email,$rpass)){
        echo "<center><h2>Registered successfully </h2></center>";
      }
      else{
        echo "Invalid username or password!";
    ?>

<div class="container">
    <form action="registration.php" method="POST">
      <h1>Registration Form</h1>
      <input type="text" name="uname"  placeholder="Username" pattern="^(?![_ -])(?:(?![_ -]{2})[\w -]){5,16}(?<![_ -])$" required>
      <input type="email" name="email" placeholder="Enter valid email address" pattern="^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$" required>
      <input type="password" name="upass"  placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
      <input type="password" name="rpass" placeholder="Confirm password" required>
      <input type="submit" value="Register">
    </form>
    <h2>Already registered? <a href="form.php">Login here!</a></h2>
</div>
    <?php

      }
    }
    else{
      // User has aceessed the form for the first time.
      ?>
<div class="container">
    <form action="registration.php" method="POST">
      <h1>Registration Form</h1>
      <input type="text" name="uname" placeholder="Username" pattern="^(?![_ -])(?:(?![_ -]{2})[\w -]){5,16}(?<![_ -])$" required>
      <input type="email" name="email" placeholder="Enter valid email address" pattern="^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$" required>
      <input type="password" name="upass"  placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
      <input type="password" name="rpass"  placeholder="Confirm password" required>
      <input type="submit" value="Register">
    </form>
    <h2>Already registered? <a href="form.php">Login!</a></h2>
</div>
    <?php 
    }
    ?>

</body>

 </html>