<?php include("../files/connect.php");?>
<!DOCTYPE html PUBLIC>
<html>
<head>
    <meta name="viewport" content="width=devide-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link href="../StyleSheets/StyleSheet3.css" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;700&family=Varela+Round&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;700&family=Varela+Round&display=swap');
    </style>

    <title></title>
    <script type='text/JavaScript' src='../files/scw.js'></script>
    <script language="JavaScript" src="../files/gen_validatorv31.js" type="text/javascript"></script>
</head>
<body>
    <section class="header">
        <nav>
            <a href="../Home.html"><img src="../image/logo.png" /></a>
            <div class="nav-links">
                <ul>
                    <li><a href="../Home.html">HOME</a></li>
                    <li><a href="../search/search.html">SEARCH</a></li>
                    <li><a href="../insert/insert.html">INSERT</a></li>
                    <li><a href="../contact.html">CONTACT</a></li>
                    <li><a href="../about.html">ABOUT</a></li>
                </ul>
            </div>
        </nav>
        <?php
            $patient_ssn = $_GET['patient_ssn'];
            $query = "SELECT * FROM PATIENT WHERE PATIENT_SSN = '$patient_ssn' ";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $row = mysqli_fetch_assoc($result);
                $patient_name = $row['PATIENT_NAME'];
                $age = $row['AGE'];
                $gender = $row['GENDER'];
                $phone_number = $row['PHONE_NUMBER'];
                $result3 = mysqli_query($con,"SELECT COMPANY_NAME, DRUG_NAME, SERIAL_CODE FROM DRUG WHERE SERIAL_CODE IN (SELECT SERIAL_CODE FROM PRESCRIPTION WHERE PATIENT_SSN = '$patient_ssn') ");
                ?>
                <section class="header">
                    <form class="App" action="patient.html" method="POST">
                        <h1>Hello </h1><h2><?php echo"$patient_name"?></h2>
                        <br>
                        <p1>SSN : <?php echo"$patient_ssn"?></p1> <br>
                        <p1>Age : <?php echo"$age"?> years old </p1> <br>
                        <p1>Gender : <?php echo"$gender"?> </p1> <br>
                        <p1>Phone number : <?php echo"$phone_number"?></p1> <br>
                        <br>
                        <input type="submit" name="" value="Log out" />
                    </form>
                </section>
                <section class="Cars">
                    <table class="Card">
                        <tr>
                            <th>#</th>
                            <th>Company Name</th>
                            <th>Drug Name</th>
                            <th>Serial Code</th>
                        </tr>
                        <?php
                        $i = 1;
                        while ($rows = mysqli_fetch_assoc($result3)) { // Important line !!! Check summary get row on array ..
                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            foreach ($rows as $value) { // I you want you can right this line like this: foreach($row as $value) {
                                echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
                            }
                            $i++;
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </section>
            </section>
                <?php

                } else {
                    print "
                    <html> <body>
                    <form class=\"App\" action=\"patient.html\" method=\"POST\">
                        <h1>Patient not found !!</h1>
                        <input type=\"submit\" name=\"\" value=\"Try Again\" />
                    </form>
                    </body> </html> </section>";
                }
                mysqli_close($con);
                ?>
</body>
</html>