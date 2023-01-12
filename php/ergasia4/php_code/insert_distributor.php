<?php include("connect.php");?>
<!DOCTYPE html>
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
        $distributor_name = $_POST['distributor_name'];
        $distribution_points = $_POST['distribution_points'];
        $distribution_capacity = $_POST['distribution_capacity'];
        $mean_distribution_time = $_POST['mean_distribution_time'];
        $distribution_range = $_POST['distribution_range'];
        #create query
        $q_insert = "INSERT INTO DISTRIBUTOR(DISTRIBUTOR_NAME,DISTR_POINTS,DISTR_CAPACITY,MEAN_DISTR_TIME,DISTR_RANGE_Km) VALUES('$distributor_name','$distribution_points','$distribution_capacity','$mean_distribution_time','$distribution_range') ";
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