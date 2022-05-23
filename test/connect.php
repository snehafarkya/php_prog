<?php 
include 'connect.html';
$hostname = "localhost";
$userid = "root";
$pass = "sneha";
$dbname = "test";
$conn = new mysqli($hostname,$userid,$pass,$dbname);

if(!$conn){
    echo "error in getting connection";
}
else{
      echo "";
}

$text = $_POST['text'];
$stext = $_POST['stext'];
$atext = $_POST['atext'];

$sql = "insert into testtdb  values('$text','$stext','$atext');";
$result = mysqli_query($conn,$sql);

if(isset($_POST['submit'])){
echo "hii ".$text;
}

?>
<?php  ?>

<div class="container">
<?php
$sql="select * from testtdb";
$data=mysqli_query($conn, $sql);
$result=mysqli_num_rows($data);
if($result){
    while($row=mysqli_fetch_array($data)){
    ?>
    <!-- <tr>
        <td><?php echo "<h2>".$row['name']; "</h2>"?></td>
        <td><?php echo $row['surname']; ?></td>
      </tr> -->
     <?php echo "<div><h2>".$row['name'];  ;

echo $row['surname']; 
echo "<br><br>";
echo $row['message']; 

echo "</h2></div";
?>
    <?php
    }
}
?>
</div>

<style>
    .container{
        display:grid;
        grid-template-columns:auto auto auto;
        gap:1em;

    }
    div{
        height:300px;
        width:300px;
        border:2px white solid;
        border-radius:12px;
        background: black;

    }
    h2{
        color:white;
        margin:15px;
        
    }
</style>