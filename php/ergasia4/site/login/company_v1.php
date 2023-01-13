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
        $company_name = $_GET['company_name'];
        $query = "SELECT * FROM COMPANY WHERE COMPANY_NAME = '$company_name' ";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
            $hqaddress = $row['HQ_ADDRESS'];
            $in_out = $row['INCOME_OUTCOME'];
            $n_salesmen = $row['NUMBER_OF_SALESMEN'];
            $n_factories = $row['NUMBER_OF_FACTORIES'];
            $n_drug_rate = $row['NEW_DRUG_RATE'];
            $result1 = mysqli_query($con,"SELECT DRUG_NAME, SERIAL_CODE FROM DRUG WHERE COMPANY_NAME = '$company_name'");
            $result2 = mysqli_query($con,"SELECT DISTRIBUTOR_NAME FROM BUY WHERE COMPANY_NAME = '$company_name'");
            $result3 = mysqli_query($con,"SELECT SALESMAN_NAME FROM SALESMAN WHERE COMPANY_NAME = '$company_name'");
            $row1 = mysqli_fetch_assoc($result1);
            $row2 = mysqli_fetch_assoc($result2);
            $row3 = mysqli_fetch_assoc($result3);
            $drug_names = $row1['DRUG_NAME'];
            $serial_codes = $row1['SERIAL_CODE'];
            $distributor_names = $row['DISTRIBUTOR_NAME'];
            $salesman_names = $row3['SALESMAN_NAME'];
            ?>
            
            <form class="App" action="company.html" method="POST">
                <h1>Hello </h1><h2><?php echo "$company_name"?></h2>
                <br>$data = mysqli_fetch_assoc($result)
                <p1>HQ ADDRESS : <?php echo "$hqaddress"?></p1> <br>
                <p1>Income/Outcome : <?php echo "$in_out" ?> billion $ </p1> <br>
                <p1>Number of salesmen : <?php echo "$n_salesmen" ?></p1> <br>
                <p1>Number of factories : <? echo "$n_factories" ?> </p1> <br>
                <p1>Production rate of new drugs : <?php echo "$n_drug_rate" ?> years</p1>
                <br>
                <input type="submit" name="" value="Log out" />
            </form>
            <table class='display'>
                <tr>
                    <th>#</th>
                    <th>Drug Name</th>
                    <th>Serial Code</th>
                    <th>Distributor</th>
                    <th>Salesman Name</th>
                </tr>
                <?php
                for($i=1;$i<11;$i++){
                    ?>
                    <tr>
                        <td><?php echo" $i"?></td>
                        <td><?php echo" $drug_names "?></td>
                        <td><?php echo" $serial_codes "?></td>
                        <td><?php echo" $distributor_names "?></td>
                        <td><?php echo" $salesman_names "?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
            </body> </html>";
        <?php
        
        } else {
            print "
            <html> <body>
            <form class=\"App\" action=\"company.html\" method=\"POST\">
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