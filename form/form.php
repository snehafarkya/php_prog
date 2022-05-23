<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/DesignSystemsOSS/eccentrictouch@master/source/eccentrictouch.css" />
  
</head>
<body>
    <center>
<form action="index.php" method="post">
     <input type="text"  name="uname" placeholder="Enter Your Name" required><br><br>
     <input type="email" name="uemail" placeholder="Enter your email" required><br><br>
     <textarea id="w3review" name="msg" rows="4" cols="23"></textarea><br><br>
     <fieldset>
         
         <legend>Gender </legend>
            <input type="radio" name="male" id="">Male<br>
            <input type="radio" name="male" id="">Female<br>
        
     </fieldset>
     <br><input type="color" name="color" value = "green" id="">  color <br>
     <br> <input type="date" name="date" id="">date
     <br> <input type="datetime-local" name="" id="">datetime local<br>
     <br> <input type="file" name="" id="">f <br>
     <br> <input type="file" name="" id="">file <br>
     <br> <input type="hidden" name="">hidden
     <br> <input type="image" src="https://www.jotform.com/blog/wp-content/uploads/2019/04/form-design-ultimate-guide-FFEBE9.png" alt="my">
     <br><br><input type="number" name="" id="">number <br><br>
     <input type="range" name="" id="">range <br> <br>
     <input type="range" list="tickmarks">
        <datalist id="tickmarks">
            <option value="0" label="0%"></option>
            <option value="10"></option>
            <option value="20"></option>
            <option value="30"></option>
            <option value="40"></option>
            <option value="50" label="50%"></option>
            <option value="60"></option>
            <option value="70"></option>
            <option value="80"></option>
            <option value="90"></option>
            <option value="100" label="100%"></option>
        </datalist><br> <br>
        <input type="search" list="listitem" name="" id="">search 
       <datalist id="listitem">
           <option value="hello">hello people</option> <br> <br>
</datalist><br><br>
<input type="tel" name="" id="">tel <br><br>
<input type="url" name="" id="">url <br> <br>

     <br><input type="submit" name="submit" class="p-6 	color-purple-900 shadow-light"  value="Submit">
 </form>
 </center>
</body>
</html>