<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chessboard</title>
</head>
<body>
    <h1>Chessboard</h1>
    <table width="400px" height="400px" border="3px" cellspacing="1" >
        <?php
            $val = 0;
            for ($i=0; $i < 8; $i++) { 
               echo "<tr>";
               $val= $i;

                for ($j=0; $j <8 ; $j++) { 
                    if($val%2==0){
                        echo "<td height='40px' width='20px' bgcolor='black' ></td>" ;
                        $val++;
                    }
                    else{
                        echo "<td height='40px' width='20px' bgcolor='white' ></td>" ;
                        $val++;
                    }
                }
                echo "</tr>";
            } 

        ?>
    </table>
    <Br><h1>q 11 patterns</h1>
    <?php
    for ($i=0; $i <= 6 ; $i++) { 
        for ($j=1; $j <$i; $j++) { 

            echo "*";

        }
        echo "<br>";
    }
echo "<br>";
    for ($i=1; $i <=5 ; $i++) { 
        for ($j=5; $j>$i-1 ; $j--) { 

            echo $j."  ";

        }
        echo "<br>";
    }
    for ($i=0; $i <= 6 ; $i++) { 
        for ($j=1; $j <$i; $j++) { 

            echo $j." ";

        }
        echo "<br>";
    }
?>
</body>
</html>