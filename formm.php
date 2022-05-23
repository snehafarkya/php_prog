<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
body {
  margin: 0;
  padding: 0;
  font-family:'Coiny',cursive;
  background: #FFFFFF;
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
  border-radius: 5px;
  box-shadow: 0 50px 50px;
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
  transition: 0.25s;
}
.container input[type="text"]:focus,.container input[type="password"]:focus{
  width: 280px;
  border-color: #2ecc71;
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

    </style>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="Login Form.css">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
  </head>

  <?php
    error_reporting(E_ALL ^ E_WARNING); 
    $username =   $_POST['username'];
    $password =   $_POST['password'];
  ?>
<body>
  <?php


  function login(string $username = null, string $password = null)
  {
     return true;
  }

    //User has clicked on the submit button
    if(isset($username) && isset($password)) {
      if(login($username,$password))
      {    
          print("<center>". "Logged in successfully" . "</center>");
      } else {
          print("<center>"."Invalid username or password"."</center>");
    ?>        
          <form class="container" action="formm.php" method="POST">
          <h1>LOGIN</h1>
          <input type="text" name="username" placeholder="Username" required>
          <!-- pattern="^(?![_ -])(?:(?![_ -]{2})[\w -]){5,16}(?<![_ -])$" required --> 
          <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,}" placeholder="Password" required >
          
          <!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required -->
          
          
          <input type="submit" value="Login">
        </form>
  <?php        
      }
    } else 
        //User has aceessed the form for the first time.
    { ?>
          <form class="container" action="formm.php" method="POST">
          <h1>LOGIN</h1>
          <input type="text" name="username" placeholder="Username" required>
          <!-- pattern="^(?![_ -])(?:(?![_ -]{2})[\w -]){5,16}(?<![_ -])$" required --> 
          <input type="password" name="password" placeholder="Password" required >
          
          <!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required -->
          
          
          <input type="submit" value="Login">
        </form>


  <?php 
    }
  ?>
  </body>
</html>