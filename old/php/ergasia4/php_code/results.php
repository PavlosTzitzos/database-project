<?php include("connect");?>
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
    </head>
<body>
    <section class="header">
        <nav>
            <a href="Home.html"><img src="image/logo.png" /></a>
            <div class="nav-links">
                <ul>
                    <li><a href="Home.html">HOME</a></li>
                    <li><a href="search.html">SEARCH</a></li>
                    <li><a href="insert.html">INSERT</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                </ul>
            </div>
        </nav>
        <?php
            $search_item = $_GET['q'];
            $table_name = ['DRUG','DOCTOR','PATIENT',''];
            foreach( $table_name as $table_value) {
                $query = "SELECT * FROM '$table_value' WHERE DOCTOR_SSN = '$search_item' ";
                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    $row = mysqli_fetch_assoc($result);
                    echo "Results: <br>" . $row["DOCTOR_NAME"]. "<br> Doctor ssn: " . $row["DOCTOR_SSN"]. "<br> Age: " . $row["AGE"]. "<br> Experience: " . $row["EXPERIENCE_YEARS"]. "<br> Specialty: " . $row["SPECIALTY"]. "<br> <br>";
                } else {
                    echo "Sorry we couldn't match your search";
                    break;
                }
            }
        ?>
    </section>
</body>
</html>