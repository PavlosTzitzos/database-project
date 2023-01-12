<?php include("../files/connect.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=devide-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link href="../StyleSheets/StyleSheet.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;700&family=Varela+Round&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;700&family=Varela+Round&display=swap');
    </style>

    <title></title>
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
        $salesman_name = $_POST['salesman_name'];
        $salesman_ssn = $_POST['salesman_ssn'];
        $company_name = $_POST['company_name'];
        $serial_code = $_POST['serial_code'];
        $experience = $_POST['experience'];
        $salary = $_POST['salary'];
        #create query
        $q_insert = "INSERT INTO SALESMAN(SALESMAN_NAME,SALESMAN_SSN,COMPANY_NAME,DRUG_SERIAL_CODE,EXPERIENCE,SALARY DECIMAL) VALUES('$salesman_name','$salesman_ssn','$company_name','$serial_code','$experience','$salary') ";
        $result = mysqli_query($con, $q_insert);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            print "
            <html> <body>
            <form class=\"App\" action=\"insert.html\" method=\"POST\">
                <h1>Insert was successful!!</h1>

                <input type=\"submit\" name=\"\" value=\"Insert New\" />
            </form>
            </body> </html>";
        } else {
            #echo "0 results !!";
            print "
            <html> <body>
            <form class=\"App\" action=\"insert.html\" method=\"POST\">
                <h1>Something went wrong !!</h1>
                <input type=\"submit\" name=\"\" value=\"Try Again\" />
            </form>
            </body> </html>";
        }
        mysqli_close($con);
        ?>
    </section>
</body>
</html>