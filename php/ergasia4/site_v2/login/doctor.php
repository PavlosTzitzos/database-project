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
    </section>
        <?php
        $doctor_ssn = $_GET['doctor_ssn'];
        $query = "SELECT * FROM DOCTOR WHERE DOCTOR_SSN = '$doctor_ssn' ";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
            $doctor_name = $row['DOCTOR_NAME'];
            $doctor_age = $row['AGE'];
            $doctor_exp = $row['EXPERIENCE_YEARS'];
            $doctor_specialty = $row['SPECIALTY'];
            $result1 = mysqli_query($con,"SELECT SALESMAN_NAME, SALESMAN_SSN FROM SALESMAN WHERE SALESMAN_SSN IN (
                SELECT SALESMAN_SSN FROM VISIT WHERE DOCTOR_SSN = '$doctor_ssn')");
            $result2 = mysqli_query($con,"SELECT COMPANY_NAME, DRUG_NAME, SERIAL_CODE FROM DRUG WHERE SERIAL_CODE IN(
                SELECT SERIAL_CODE FROM PRESCRIBE WHERE DOCTOR_SSN = '$doctor_ssn')");
            $result3 = mysqli_query($con,"SELECT PAT.PATIENT_NAME, PAT.PATIENT_SSN, P.DATE_OF_PRESCRIPTION FROM PATIENT PAT
            INNER JOIN PRESCRIBE P ON PAT.PATIENT_SSN = P.PATIENT_SSN
            WHERE P.PATIENT_SSN IN (
            SELECT PATIENT_SSN FROM GOTO WHERE DOCTOR_SSN = '$doctor_ssn')");
            ?>
            <section class="header">
            <form class="App" action="doctor.html" method="POST" name="myform">
                <h1>Hello </h1> <h2><?php echo"$doctor_name"?></h2>
                <br>
                <p1>SSN : <?php echo"$doctor_ssn"?></p1> <br>
                <p1>Age : <?php echo"$doctor_age"?> years old</p1> <br>
                <p1>Experience : <?php echo"$doctor_exp"?> years</p1> <br>
                <p1>Specialty : <?php echo"$doctor_specialty"?> </p1> <br>
                <br>
                <input type="submit" name="" value="Log out" />
            </form>
            </section>
            <section class="Cars">
                <table class="Card">
                    <tr>
                        <th>#</th>
                        <th>Salesmen Names</th>
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
                <table class="Card">
                    <tr>
                        <th>#</th>
                        <th>Distributor Names</th>
                    </tr>
                    <?php
                    $i = 1;
                    while ($rows = mysqli_fetch_assoc($result2)) { // Important line !!! Check summary get row on array ..
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
                <table class="Card">
                    <tr>
                        <th>#</th>
                        <th>Drug Names</th>
                        <th>Serial Codes</th>
                    </tr>
                    <?php
                    $i = 1;
                    while ($rows = mysqli_fetch_assoc($result1)) { // Important line !!! Check summary get row on array ..
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
        <?php
        
        } else {
            print "
        <html> <body>
        <form class=\"App\" action=\"doctor.html\" method=\"POST\">
            <h1>Doctor not found !!</h1>
            <input type=\"submit\" name=\"\" value=\"Try Again\" />
        </form>
        </body> </html> </section>";
        }
        mysqli_close($con);
        ?>
</body>
</html>