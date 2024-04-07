<?php

$ename=$_POST['n'];
$con=pg_connect("host=192.168.1.254 dbname=ty user=ty password=ty");
if (!$con)
    echo"<br>Unsuccessful <br>";
else
    echo"<br> Successful Connection <br>";
    
$qry="SELECT * FROM employee WHERE ename='$ename'";
$ret=pg_query($con,$qry) or die("Error in the query");

if($ret)
{
   echo"<table border=1>";
   
   echo"<tr>
            <th>No</th>
            <th>Employee Name </th>
            <th>Designation</th>
            <th>Salary</th>
        </tr>";
      while ($row=pg_fetch_row($ret))
      {
            echo"<tr>";
            echo"<td>".$row[0]."</td>";
            echo"<td>".$row[1]."</td>";
            echo"<td>".$row[2]."</td>";
            echo"<td>".$row[3]."</td>";
            echo"</tr>";
      }   
      echo"</table>";   
}        
else
    echo"Error";
pg_close($con);   

?> 

<!-- create table employee (eno int primary keyL ,ename VARCHAR(15) NOT NULL , designation VARCHAR(15) NOT NULL , salary INT NOT NULL ); -->
<!-- insert into employee values(1,'xyz','manager',12312); -->