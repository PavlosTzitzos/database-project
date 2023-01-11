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
            <a href="Home.html"><img src="image/logo.png" /><li><a href="Home.html"></a></li></a>
            <div class="nav-links">
                <ul>
                    <li><a href="Home.html">HOME</a></li>
                    <li><a href="search.php">SEARCH</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                </ul>
            </div>
        </nav>
        <form method="GET" action="doctor.php"  name="myform">
            <label for="user">Doctor ssn:</label><br>
            <input type="text" name="company_name"><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Clear">
        </form>
        <script language="JavaScript" type="text/javascript">
            //You should create the validator only after the definition of the HTML form
            var frmvalidator  = new Validator("myform");
            frmvalidator.EnableMsgsTogether();
            frmvalidator.addValidation("doctor_ssn","req","Please give a valid ssn !");
        </script>
</section>
</body>
</html>
