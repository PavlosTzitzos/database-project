<?php include("connect.php");?>
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
    <script type='text/JavaScript' src='files/scw.js'></script>
    <script language="JavaScript" src="files/gen_validatorv31.js" type="text/javascript"></script>
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
            $company_names = $_REQUEST['company_names'];
            $query = "SELECT COMPANY_NAME FROM COMPANY";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $row = mysqli_fetch_assoc($result);
                count($row);
                print "
                <html> <body>
                <form class=\"App\" action=\"results.php\">
                        <input list=\"company name\" name=\"company_names\">
                        <input type=\"submit\" value=\"Search\">
                </form>
                </body> </html>";
                #echo "Company: " . $row["COMPANY_NAME"]. "<br> Income/Outcome: " . $row["INCOME_OUTCOME"]. "<br> HQ Address: " . $row["HQ_ADDRESS"]. "<br> Number of Salesmen: " . $row["NUMBER_OF_SALESMEN"]. "<br> Number of Factories: " . $row["NUMBER_OF_FACTORIES"]. "<br> Rate of production of new drugs: " . $row["NEW_DRUG_RATE"]. "<br><br>";
            } else {
                echo "0 results !!";
            }
        ?>
        <script language="JavaScript" type="text/javascript">
            //You should create the validator only after the definition of the HTML form
            var frmvalidator  = new Validator("myform");
            frmvalidator.EnableMsgsTogether();
            frmvalidator.addValidation("company_name","req","Please give a valid name !");
        </script>
    </section>
</body>
</html>