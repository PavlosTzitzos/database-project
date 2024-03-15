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
        $distributor_name = $_GET['distributor_name'];
        $query = "SELECT * FROM DISTRIBUTOR WHERE DISTRIBUTOR_NAME = '$distributor_name' ";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
            $distribution_points = $row['DISTR_POINTS'];
            $distribution_capacity = $row['DISTR_CAPACITY'];
            $mean_distribution_time = $row['MEAN_DISTR_TIME'];
            $distribution_range = $row['DISTR_RANGE_Km'];
            
            $result1 = mysqli_query($con,"SELECT COMPANY_NAME FROM BUY WHERE DISTRIBUTOR_NAME = '$distributor_name' ");
            $result2 = mysqli_query($con,"SELECT DRUG_NAME, SERIAL_CODE FROM DRUG WHERE SERIAL_CODE IN( SELECT SERIAL_CODE FROM DISTRIBUTE WHERE DISTRIBUTOR_NAME = '$distributor_name')");
            $result3 = mysqli_query($con,"SELECT CITY, ADDRESS FROM SELL WHERE DISTRIBUTOR_NAME = '$distributor_name'");
            ?>
            
            <form class="App" action="distributor.html" method="POST">
                <h1>Hello </h1><h2><?php echo "$distributor_name"?></h2>
                <br>
                <p1>Number of distribution points : <?php echo"$distribution_points"?></p1> <br>
                <p1>Total Capacity : <?php echo"$distribution_capacity"?> m<sup>3</sup></p1> <br>
                <p1>Mean Distribution Time : <?php echo"$mean_distribution_time"?> days</p1> <br>
                <p1>Distribution Range : <?php echo "$distribution_range Km"?></p1> <br>
                
                <input type="submit" name="" value="Log out" />
                </form>
            <section class="Cars">
                <table class="Card">
                    <tr>
                        <th>#</th>
                        <th>City</th>
                        <th>Address</th>
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
                        <th>Drug Names</th>
                        <th>Serial Codes</th>
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
                        <th>Companies Names</th>
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
            <form class=\"App\" action=\"distributor.html\" method=\"POST\">
                <h1>Distributor not found !!</h1>
                <input type=\"submit\" name=\"\" value=\"Try Again\" />
            </form>
            </body> </html>";
        }
        mysqli_close($con);
        ?>
</section>
</body>
</html>