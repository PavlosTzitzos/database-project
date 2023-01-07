<?php include("connect.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Εισαγωγή δεδομένων</title>
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
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $fatherfirstname = $_POST['fatherfirstname'];
    $birthday = $_POST['birthday'];
    $RadioFylo = $_POST['RadioFylo'];
    $RadioWork = $_POST['RadioWork'];
    $Tmhma = $_POST['Tmhma'];   

    $query = "INSERT INTO prof (FirstName, LastName, FatherFirstName, BirthDay, Fylo, Work, Tmhma) VALUES 
('$firstname','$lastname','$fatherfirstname','$birthday','$RadioFylo','$RadioWork','$Tmhma')";
  
    //execute query 
    $queryexe = mysqli_query($con, $query);
    
    if (!$queryexe){
        echo("Error description: " . mysqli_error($con));
    }else{
        echo("Success!");
    }

?>
      </p>
    <a href="index.php">Πίσω</a><BR>
</div>
</body>
</html>