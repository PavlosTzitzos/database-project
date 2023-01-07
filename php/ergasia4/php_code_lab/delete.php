<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Εισαγωγή προσωπικού στο Δ.Π.Θ.</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
body {
	background-color: #FFFACE;
}
.style3 {font-size: 9px}
-->
</style>
<script language="JavaScript" src="files/gen_validatorv31.js" type="text/javascript"></script>
</head>

<body>
<center>
  <table width="400" border="0">
    <tr>
       <td><div align="center" class="style1">Διαγραφή Προσωπικού</div></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
</center>
    <form method="POST" action="submit_delete.php"  name="myform">
      <center>
      <table>
        <tr>
        <td>
      <div align="center"><strong>ID:</strong> 
        <input name="id" type="text" size="20"/>
        <input type="submit" value="Διαγραφή" /></div>
      <center>
      </center>
        </td>
        </tr>
        </table> 
      </center>
</form>
<script language="JavaScript" type="text/javascript">
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  frmvalidator.EnableMsgsTogether();
  frmvalidator.addValidation("id","req","Συμπληρώστε πρώτα το πεδίο 'ID' !");
  frmvalidator.addValidation("id","num","Η τιμή που δώσατε δεν είναι ακέραιος αριθμός!");
      </script>
</body>
</html>
