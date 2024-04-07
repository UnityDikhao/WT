<?php
session_start();
$cnt=0;
$user = $_POST['uname'];
$pass = $_POST['pass'];

if($user=="abc" and $pass=="xyz"){
        
        $_SESSION['username'] = $user;

        echo"<form fieldset=1>
               
                Welcome...
             </form>";
       
        
    }
    else {
        $cnt = isset($_SESSION['attempt']) ? $_SESSION['attempt'] : 0;
        echo"Its your ".$cnt." try";
         $cnt++; 
    
    if ($cnt >3){
       echo "<br> Error ...Too many unsuccessful attempts<br>";
        session_destroy();
    }
    else
         $_SESSION['attempt']=$cnt;
    }


?>