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
        $company_name = $_POST['company_name'];
        $hqaddress = $_POST['hqaddress'];
        $in_out = $_POST['in_out'];
        $n_salesmen = $_POST['n_salesmen'];
        $n_factories = $_POST['n_factories'];
        $new_drug_rate = $_POST['new_drug_rate'];
        #create query
        $q_insert = "INSERT INTO COMPANY(COMPANY_NAME,HQ_ADDRESS,INCOME_OUTCOME,NUMBER_OF_SALESMEN,NUMBER_OF_FACTORIES,NEW_DRUG_RATE) VALUES('$company_name','$hqaddress','$in_out','$n_salesmen','$n_factories','$new_drug_rate') ";
        $result = mysqli_query($con, $q_insert);
        if ($result) {
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