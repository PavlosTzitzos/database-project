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
        <p><BR>
        <?php
            $salesman_ssn = $_GET['salesman_ssn'];
            $query = "SELECT * FROM SALESMAN WHERE SALESMAN_SSN = '$salesman_ssn' ";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $row = mysqli_fetch_assoc($result);
                $salesman_name = $row['SALESMAN_NAME'];
                $company_name = $row['COMPANY_NAME'];
                $drug_s_c = $row['DRUG_SERIAL_CODE'];
                $experience = $row['EXPERIENCE'];
                $salary = $row['SALARY'];
                $result3 = mysqli_query($con,"SELECT DOCTOR_NAME, DOCTOR_SSN FROM DOCTOR WHERE DOCTOR_SSN IN (SELECT DOCTOR_SSN FROM VISIT WHERE SALESMAN_SSN = '$salesman_ssn')");
                $drug_name = $row2['DRUG_NAME'];
                ?>
                <html> <body>
                <form class="App" action="salesman.html" method="POST">
                    <h1>Hello </h1><h2><?php echo"$salesman_name"?></h2>
                    <br>
                    <p1>SSN : <?php echo"$salesman_ssn"?></p1> <br>
                    <p1>You are working for : <?php echo"$company_name"?> </p1> <br>
                    <p1>You promote : <?php echo"$drug_name"?> </p1> <br>
                    <p1> with serial code : <?php echo"$drug_s_c"?> </p1> <br>
                    <p1>Experience in <?php echo"$company_name"?> : <?php echo"$experience"?> years</p1> <br>
                    <p1>Salary : <?php echo"$salary"?> $</p1>
                    <br>
                    <input type="submit" name="" value="Log out" />
            </form>
            <section class="Cars">
                <table class="Card">
                    <tr>
                        <th>#</th>
                        <th>Doctor Names</th>
                        <th>Doctor SSN</th>
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
        <?php
        
            } else {
                print "
                <html> <body>
                <form class=\"App\" action=\"salesman.html\" method=\"POST\">
                    <h1>Company not found !!</h1>
                    <input type=\"submit\" name=\"\" value=\"Try Again\" />
                </form>
                </body> </html>";
            }
        ?>
      </p>
</section>
</body>
</html>