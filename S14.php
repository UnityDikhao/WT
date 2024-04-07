<?php

$tname=$_POST['n'];
$con=pg_connect("host=192.168.1.254 dbname=ty user=ty password=ty");
if (!$con)
    echo"<br>Unsuccessful <br>";
else
    echo"<br> Successful Connection <br>";
    
$qry="SELECT * FROM teacher WHERE tname='$tname'";
$ret=pg_query($con,$qry) or die("Error in the query");

if($ret)
{
   echo"<table border=1>";
   
   echo"<tr>
            <th>No</th>
            <th>Teacher Name </th>
            <th>Qualification</th>
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

<!-- create table teacher(tno int primary key,tname varchar(15) not null,quali varchar(15),sal varchar(10)); -->
<!-- insert into teacher values(1,'abc','bsc','123'); -->