<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
            body{
                font-size: 1.6em;
            }
    </style>
    <center>
    <table cellspacing='10' cellpadding = '10' border = '1'>
        <?php
            $text = "Hey there! I am Sneha";

            echo "<tr>";
            echo "<th colspan = '2'><b> $text </b></th><br></tr>";
            echo "<tr>";
            echo "<td><pre><b> strtoupper($text)</b></pre></td>";
            echo "<td><b>". strtoupper($text)."</b></td></tr>";
            
            echo "<tr>";
            echo "<td><pre><b> ucfirst($text)</b></pre></td>";
            echo "<td><b>". ucfirst($text)."</b></td></tr>";
            
            echo "<tr>";
            echo "<td><pre><b> ucwords($text)</b></pre></td>";
            echo "<td><b>". ucwords($text)."</b></td></tr>";
            
            echo "<tr>";
            echo "<td><pre><b> str_replace($text)</b></pre></td>";
            echo "<td><b>". str_replace('e','*',$text)."</b></td></tr>";
            
            echo "<tr>";
            echo "<td><pre><b> strrev($text)</b></pre></td>";
            echo "<td><b>". strrev($text)."</b></td></tr>";
            
        ?>
        </table>
    </center>
</body>
</html>