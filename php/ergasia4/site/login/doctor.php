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
            print "
            <html> <body>
            <form class=\"App\" action=\"distributor_login.html\" method=\"POST\" name=\"myform\">
                <h1>Hello </h1> <h2>$doctor_name</h2>
                <br>
                <p1>SSN : $doctor_ssn</p1> <br>
                <p1>Age : $doctor_age years old</p1> <br>
                <p1>Experience : $doctor_exp years</p1> <br>
                <p1>Specialty : $doctor_specialty </p1> <br>
                <br>
                <input type=\"submit\" name=\"\" value=\"Log out\" />
            </form>
            </body> </html>";
        } else {
            print "
        <html> <body>
        <form class=\"App\" action=\"doctor_login.html\" method=\"POST\">
            <h1>Doctor not found !!</h1>
            <input type=\"submit\" name=\"\" value=\"Try Again\" />
        </form>
        </body> </html>";
        }
        mysqli_close($con);
        ?>
      </p>
</section>
</body>
</html>