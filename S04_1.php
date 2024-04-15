<?php
session_start();
$no=$_SESSION['no'];
$name=$_SESSION['name'];
$address=$_SESSION['address'];
$sal=$_POST['sal'];
$da=$_POST['da'];
$hra=$_POST['hra'];
$total=$sal+$da+$hra;


?>
<html>
    <head>
        <title> third page</title>
    </head>

    <body>
    <?php
         echo"<br>Employee No : ".$no."<br>";
        echo"Employee Name : ".$name."<br>";
        echo"Employee Address : ".$address."<br>";
        echo"Employee Salary : ".$sal."<br>";
        echo"Employee DA : ".$da."<br>";
        echo"Employee HRA : ".$hra."<br>";
        echo"Employee's Total salary  : ".$total."<br><br>";

        ?>
        
    </body>


</html>
