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
        $sdop_city = $_GET['sdop_city'];
        $sdop_address = $_GET['sdop_address'];
        $query = "SELECT * FROM STATE_DEPOSIT_OF_PHARMACEUTICALS WHERE CITY = '$sdop_city' AND ADDRESS = '$sdop_address'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
            $sdop_address = $row['ADDRESS'];
            $sdop_range = $row['SDOP_RANGE'];
            $sdop_capacity = $row['SDOP_CAPACITY'];
            $sdop_delivery_time = $row['SDOP_DELIVERY_TIME'];
            
            print "
            <html> <body>
            <form class=\"App\" action=\"sdop.html\" method=\"POST\">
                <h1>Hello </h1><h2> $sdop_address , $sdop_city</h2>
                <br>
                <p1>Range : $sdop_range Km </p1> <br>
                <p1>Capacity : $sdop_capacity m<sup>3</sup></p1> <br>
                <p1>Delivery time : $sdop_delivery_time days</p1> <br>
                <br>
                <input type=\"submit\" name=\"\" value=\"Log out\" />
            </form>
            </body> </html>";
        } else {
            print "
            <html> <body>
            <form class=\"App\" action=\"sdop.html\" method=\"POST\">
                <h1>Company not found !!</h1>
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