<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mysqlifunc.php" method="post">
        <input type="text" name="name" id="">
        <input type="submit" value="submit" name="sub">
    </form>



</body>
</html>


<?php
$hostname ="localhost";
$username = "root";
$pass = "sneha";
$dbname = "test";

$conn= mysqli_connect($hostname,$username,$pass,$dbname);

if(!$conn){
    die("Connection failed". mysqli_connect_error());
}
echo "connected successfully <br>";
if(isset($_POST['sub'])){
$name=$_POST['name'];
$query = "Insert into mysqll values('$name');";
$res = mysqli_query($conn,$query);

?>
<table border = '1' cellspacing = '2' cellpadding = '4'>
<tr>
    <th> Name </th>
</tr>
<?php
$sel = "Select name from mysqll";
// if($result = mysqli_query($conn,$sel)){
//     $rowcount = mysqli_num_rows($result);
//     printf("It has %d rows",$rowcount);
//     echo "<br>";
//    $arr = mysqli_fetch_array($result);
//     // printf("  %s <br>",$arr["name"]);
//     mysqli_free_result($result);
// }
$data = mysqli_query($conn,$sel);
$result = mysqli_num_rows($data);

if($result){
    while($row=mysqli_fetch_array($data)){
    ?>
  
    <tr>
        <td><?php echo $row['name']; ?></td>
    </tr>
    </table>
    <?php
}
}
}
?>
