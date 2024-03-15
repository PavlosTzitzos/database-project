<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Προσωπικό</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
body {
	background-color: #FFEBCD;
}
.style3 {font-size: 9px}
-->
</style>
</head>

<body>
<p align="center"><strong><font size="+2">Εγεγγραμμένοι</font></strong><br/>
<center>
<table border="2" bgcolor="lightcyan">
<thead>
 <tr>
  <th>
   ID
  </th>
  <th>
   Όνομα
  </th>
  <th>
   Επώνυμο
  </th>  
  <th>
   Τμήμα
  </th>     
 </tr>
</thead>
<tbody>
<?php
    include('connect.php');

    //SQL query 
    $query = "Select ID,FirstName,LastName,Tmhma from prof"; 
     
    //execute query 
    $result = mysqli_query($con, $query); 

    if (!$result){
        echo("Error description: " . mysqli_error($con));
    }
    
    //query database 
    while($rows = mysqli_fetch_array($result)){
        $id = $rows['ID'];
        $FirstName = $rows['FirstName'];
        $LastName = $rows['LastName'];
        $Tmhma = $rows['Tmhma'];
    //format results 

        echo ("<tr><td><div align=\"center\"> $id </div></td> <td><div align=\"center\"> $FirstName </div></td> <td><div align=\"center\"> $LastName </div></td> <td><div ");     
        echo ("align=\"center\"> $Tmhma </div></td>");  
        echo ("</tr>");
    
    }  

    ?> 

</tbody>
	</table>
    </center>
<br><br>
<center>  
    <a href="index.php">Πίσω</a>
</center>
</body>
</html>
