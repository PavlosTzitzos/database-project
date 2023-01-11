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
        <div class="Butterfly">
            <ul>
                <li>
                    <a href="company_login.php" class="Butterfly1">COMPANY</a>
                    <a href="" class="Butterfly1">MEDICINE</a>
                    <a href="salesman_login.php" class="Butterfly1">SALESMEN</a>
                    <a href="distributor_login.php" class="Butterfly1">DISTRIBUTORS</a>
                    <a href="sdop_login.php" class="Butterfly1">STATE DEPOSITE OF PHARMACEUTICALS</a>
                    <a href="doctor_login.php" class="Butterfly1">DOCTOR</a>
                    <a href="patient_login.php" class="Butterfly1">PATIENT</a>
                </li>
            </ul>
        </div>
        <div class="container">
            <form action="results.php" method="GET" class="Search_Bar">
                <input type="text" placeholder="Search for ... " name="q" />
                <button type="submit"><img src="image/search.png" /></button>
            </form>
        </div>
    </section>
</body>
</html>