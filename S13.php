<?php
$name = $_POST['name'];
if(empty($name)) 
    echo "Stranger, please tell me your name!";
else 
if(in_array($name, array("Rohit", "Virat", "Dhoni", "Ashwin", "Harbhajan"))) 
    echo "Hello, master $name!";
else 
    echo "$name, I don't know you!";
?>
