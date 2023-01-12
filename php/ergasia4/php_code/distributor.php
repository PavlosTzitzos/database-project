<?php include("connect.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta name="viewport" content="width=devide-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link href="StyleSheet.css" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;700&family=Varela+Round&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;700&family=Varela+Round&display=swap');
    </style>

    <title></title>
    <script type='text/JavaScript' src='files/scw.js'></script>
    <script language="JavaScript" src="files/gen_validatorv31.js" type="text/javascript"></script>
</head>
<body>
    <section class="header">
        <nav>
            <a href="Home.html"><img src="image/logo.png" /></a>
            <div class="nav-links">
                <ul>
                    <li><a href="Home.html">HOME</a></li>
                    <li><a href="search.php">SEARCH</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                </ul>
            </div>
        </nav>
        <p><BR>
        <?php
            $distributor_name = $_GET['distributor_name'];
            $query = "SELECT * FROM DISTRIBUTOR WHERE DISTRIBUTOR_NAME = '$distributor_name' ";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $row = mysqli_fetch_assoc($result);
                echo "Distributor: " . $row["DISTRIBUTOR_NAME"]. "<br> Distribution Points: " . $row["DISTR_POINTS"]. "<br> Distributor Capacity: " . $row["DISTR_CAPACITY"]. "<br> Mean Distribution Time: " . $row["MEAN_DISTR_TIME"]. "<br> Distribution Range: " . $row["DISTR_RANGE_Km"]. "<br><br>";
            } else {
                echo "0 results !!";
            }
        ?>
      </p>
</section>
</body>
</html>