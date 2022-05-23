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
.container input[type="text"],.container input[type="password"]{
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
.container input[type="text"]:focus,.container input[type="password"]:focus{
  transform: scale(1.2);
 border-color: white;
 border-radius: 12px;
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
    <title>Login Form</title>
    <link rel="stylesheet" href="Login Form.css">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
  </head>
    <?php  
    error_reporting(E_ALL ^ E_WARNING); 
    $uname = $_POST['uname'];
    $upass = $_POST['upass']; 
?>
  <body>
  <?php
$hostname = "localhost";
$userid = "root";
$pass = "sneha";
$dbname = "login";
$conn = new mysqli($hostname,$userid,$pass,$dbname);

if(!$conn){
    echo "error in getting connection";
}
else{
    echo "connection successfull";
}

$usname = $_POST['uname'];
$uspass = $_POST['upass'];
 
if($sql = "select * from loginn where uname = '$uname'"){
  $result = mysqli_query($conn,$sql);
}
else{
 echo "<center><h2>You are not registered!</h2></center>";  
}


?>
    <?php

    function login(string $uname = null, string $upass = null)
    {
       return true;
    }
    if(isset($uname) && isset($upass)){
      if(login($uname ,$upass)){
        
        echo "<center><h2>logged in successfully </h2></center>";
      }
      else{
      print( "<center><h2>Invalid username or password!</h2></center>");
      
    ?>
  <div class="container">
    <form  action="form.php" method="POST">
      <h1>LOGIN</h1>
      <input type="text" name="uname" placeholder="Username"  required>
      <input type="password" name="upass" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
      <input type="submit" value="Login">
    </form>
    <h2>Haven't register yet?<a href="registration.php"> Register Here</a></h2>
  </div>

    <?php

    }
    }
    else{
      // User has aceessed the form for the first time.
      ?>
         <div class="container">
    <form  action="form.php" method="POST">
      <h1>LOGIN</h1>
      <input type="text" name="uname" placeholder="Username" required>
      <input type="password" name="upass" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
      <input type="submit" value="Login">
    </form>
    <h2>Haven't register yet?<a href="registration.php"> Register Here</a></h2>
    </div>
    <?php 
    }
    ?>
    

</body>

 </html>