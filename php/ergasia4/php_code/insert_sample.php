<?php include("connect.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login in as Salesman</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-style: italic;
}
body {
	background-color: #FFFFFF;
}
-->
</style>
</head>
<body>
  <div align="center">
    <p><BR>
      <?php 
    
    $salesman_ssn = $_POST['salesman_ssn'];

    $query = "SELECT * FROM SALESMAN WHERE SALESMAN_SSN = '$salesman_ssn' ";
    //$query = "CREATE VIEW user_sample AS SELECT * FROM SALESMAN WHERE SALESMAN_SSN = '$salesman_ssn' ";
// $query = "INSERT INTO prof (FirstName, LastName, FatherFirstName, BirthDay, Fylo, Work, Tmhma) VALUES 
//('$firstname','$lastname','$fatherfirstname','$birthday','$RadioFylo','$RadioWork','$Tmhma')";
  
    //execute query 
    $queryexe = mysqli_query($con, $query);
    
    if (!$queryexe){
        echo("Error description: " . mysqli_error($con));
    }else{
        echo("Success!");
    }

?>
      </p>
    <a href="Home.php">Back</a><BR>
</div>
</body>
</html>