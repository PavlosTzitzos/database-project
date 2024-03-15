<?php include("../files/connect.php");?>
<!DOCTYPE html PUBLIC>
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
    <script type='text/JavaScript' src='files/scw.js'></script>
    <script language="JavaScript" src="files/gen_validatorv31.js" type="text/javascript"></script>
</head>
<body>
    <section class="header">
        <nav>
            <a href="../Home.html"><img src="../image/logo.png" /></a>
            <div class="nav-links">
                <ul>
                    <li><a href="../Home.html">HOME</a></li>
                    <li><a href="search.html">SEARCH</a></li>
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
        #$query = ;
        #$result = mysqli_query($con, $query);
        $result = 1;
        #if (mysqli_num_rows($result) > 0) {
        print "
        <html> <body>
            <form class=\"App\" action=\"search.html\" method=\"POST\">
                <h1>Oops !! Seems like you discovered a feature that is not yet implemented !!</h1>
                <input type=\"submit\" name=\"\" value=\"Back\" />
            </form>
        </body> </html>";
        
        /*if ($result > 0) {
            // output data of each row
            #$row = mysqli_fetch_assoc($result);
            print "
            <html> <body>
            <form class=\"App\" action=\"search.html\" method=\"POST\">
                <h1>Sorry we couldn't match anything to our database with your search !!</h1>
                <input type=\"submit\" name=\"\" value=\"Try Again\" />
            </form>
            </body> </html>";
            ";
        } else {
            print "
            <html> <body>
            <form class=\"App\" action=\"search.html\" method=\"POST\">
                <h1>Sorry we couldn't match anything to our database with your search !!</h1>
                <input type=\"submit\" name=\"\" value=\"Try Again\" />
            </form>
            </body> </html>";
        }*/
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