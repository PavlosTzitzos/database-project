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
            $patient_ssn = $_GET['patient_ssn'];
            $query = "SELECT * FROM PATIENT WHERE PATIENT_SSN = '$patient_ssn' ";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $row = mysqli_fetch_assoc($result);
                $patient_name = $row['PATIENT_NAME'];
                $in_out = $row['INCOME_OUTCOME'];
                $n_salesmen = $row['NUMBER_OF_SALESMEN'];
                $n_factories = $row['NUMBER_OF_FACTORIES'];
                $n_drug_rate = $row['NEW_DRUG_RATE'];
                #echo "Company: " . $row["COMPANY_NAME"]. "<br> Income/Outcome: " . $row["INCOME_OUTCOME"]. "<br> HQ Address: " . $row["HQ_ADDRESS"]. "<br> Number of Salesmen: " . $row["NUMBER_OF_SALESMEN"]. "<br> Number of Factories: " . $row["NUMBER_OF_FACTORIES"]. "<br> Rate of production of new drugs: " . $row["NEW_DRUG_RATE"]. "<br><br>";
                print "
                <html> <body>
                <form class=\"App\" action=\"patient.html\" method=\"POST\">
                    <h1>Hello </h1><h2>$patient_name</h2>
                    <br>
                    <p1>SSN : $patient_ssn</p1> <br>
                    <p1>Income/Outcome : $in_out billion $ </p1> <br>
                    <p1>Number of salesmen : $n_salesmen </p1> <br>
                    <p1>Number of factories : $n_factories</p1> <br>
                    <p1>Production rate of new drugs : $n_drug_rate years</p1>
                    <br>
                    <input type=\"submit\" name=\"\" value=\"Log out\" />
                </form>
                </body> </html>";
            } else {
                print "
                <html> <body>
                <form class=\"App\" action=\"patient.html\" method=\"POST\">
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