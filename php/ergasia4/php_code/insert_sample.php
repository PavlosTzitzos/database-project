<?php include("connect.php");?>
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
    
    $salesman_ssn = $_GET['salesman_ssn'];

    $query = "SELECT * FROM SALESMAN WHERE SALESMAN_SSN = '$salesman_ssn' ";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "SSN: " . $row["SALESMAN_SSN"]. "<br> Name: " . $row["SALESMAN_NAME"]. "<br> Company Name: " . $row["COMPANY_NAME"]. "<br><br>";
        }
      } else {
        echo "0 results !!";
      }
?>
      </p>
    <a href="Home.php">Back</a><BR>
</div>
</body>
</html>