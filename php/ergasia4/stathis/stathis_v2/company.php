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
	<!-- Datatables -->
	<link rel="stylesheet" href="./datatables/datatables.min.css" type="text/css"/>
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
                    <li><a href="search.html">SEARCH</a></li>
                    <li><a href="insert.html">INSERT</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                </ul>
            </div>
        </nav>
        <p><BR>
        <?php
            $company_name = $_GET['company_name'];
            $query = "SELECT * FROM COMPANY WHERE COMPANY_NAME = '$company_name' ";
            $query_2 = "select DRUG_NAME, SERIAL_CODE, DISTRIBUTOR_NAME, SALESMAN_NAME FROM DRUG d, BUY b, SALESMAN s WHERE d.COMPANY_NAME = 'Pfizer' AND b.COMPANY_NAME = 'Pfizer' AND s.COMPANY_NAME = 'Pfizer' ";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $row = mysqli_fetch_assoc($result);
                echo "Company: " . $row["COMPANY_NAME"]. "<br> Income/Outcome: " . $row["INCOME_OUTCOME"]. "<br> HQ Address: " . $row["HQ_ADDRESS"]. "<br> Number of Salesmen: " . $row["NUMBER_OF_SALESMEN"]. "<br> Number of Factories: " . $row["NUMBER_OF_FACTORIES"]. "<br> Rate of production of new drugs: " . $row["NEW_DRUG_RATE"]. "<br><br>";
            } else {
                echo "0 results !!";
            }
        print_r("Data <br> ".mysqli_fetch_assoc($result));
        ?>
      </p>
</section>
<section id="tables">
	<div class="main container box">
        <div class="table-responsive">
        <div id="alert_message"></div>
        <table id='empTable' class='display dataTable'>
             <thead>
               <tr>
                 <th>DRUG</th>
                 <th>SERIAL CODE</th>
                 <th>DISTRIBUTOR</th>
                 <th>SALESMAN</th>
               </tr>
             </thead>
        </table>
        </div>
    </div>
</section>
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./datatables/datatables.min.js"></script>
<script type="text/javascript" language="javascript" >
  $(document).ready(function(){
    fetch_data();
    function fetch_data(){
       var dataTable = $('#empTable').DataTable({
        "processing" : true,
        "serverSide" : true,
        'columns': [
             { data: 'DRUG_NAME' },
             { data: 'SERIAL_CODE' },
             { data: 'DISTRIBUTOR_NAME' },
             { data: 'SALESMAN_NAME' },
          ],
        'ajax': {
               'url':'./datatables/ajaxfile.php',
               'type':"POST",
               'data': function(data){
                  // Read values
                  var gender = $('#searchByGender').val();

                  // Append to data
                  data.searchByGender = gender;
               }
            }
       });
        $('#searchByGender').change(function(){
            dataTable.draw();
        });
    };
 });
</script>
</body>
</html>