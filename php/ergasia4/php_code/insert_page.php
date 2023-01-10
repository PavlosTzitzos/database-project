<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Salesman Data</title>
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
<script type='text/JavaScript' src='files/scw.js'></script>
<script language="JavaScript" src="files/gen_validatorv31.js" type="text/javascript"></script>
</head>

<body>

<center>
  <table width="400" border="0">
    <tr>
       <td><div align="center" class="style1">Login as Salesman</div></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
</center>
    <form method="GET" action="insert_sample.php"  name="myform">
      <center>
      <table>
        <tr>
        <td>
      <div align="center"><strong>SSN:</strong> <input name="salesman_ssn" type="text" size="50"/></div><br>
      
        <br/><br/>
        <table width="200" border="0">
          <tr>
            <td width="90"><div align="center">
              <input type="submit" value="Εισαγωγή" />
            </div></td>
            <td width="100"><div align="center">
              <input type="reset" value="Καθαρισμός" />
            </div></td>
          </tr>
        </table>
    </center>
</form>
<script language="JavaScript" type="text/javascript">
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  frmvalidator.EnableMsgsTogether();
  frmvalidator.addValidation("salesman_ssn","req","Please give a valid ssn !");
</script>
</body>
</html>
