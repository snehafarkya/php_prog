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

        function isPrime($n)
            for ($i=2; $i < $n; $i++) { 
        
                    if($n%$i==0){
                        return 0;
                        echo "<td height='40px' width='20px' bgcolor='black' ></td>" ;
                     
                    }
                    else{
                        echo "<td height='40px' width='20px' bgcolor='white' ></td>" ;
                        
                    }
                }
                echo "</tr>";
            } 

        ?>
    </table>
        </body>
        </html>