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
<script type='text/JavaScript' src='files/scw.js'></script>
<script language="JavaScript" src="files/gen_validatorv31.js" type="text/javascript"></script>
</head>

<body>

<center>
  <table width="400" border="0">
    <tr>
       <td><div align="center" class="style1">Εισαγωγή Προσωπικού</div></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
</center>
    <form method="POST" action="submit_insert.php"  name="myform">
      <center>
      <table>
        <tr>
        <td>
      <div align="center"><strong>Όνομα:</strong> <input name="firstname" type="text" size="50"/></div><br>
      <div align="center"><strong>Επώνυμο:</strong> <input name="lastname" type="text" size="50"/></div><br>
      <div align="center"><strong>Όνομα Πατρός:</strong> <input name="fatherfirstname" type="text" size="50"/></div><br>
      <div align="center"><strong>Ημερ/νία Γέννησης:</strong> <input type="text" name="birthday" onclick='scwShow(this,event);' readonly='readonly' size=25> <img src='files/scw.gif' alt='Click Here' onclick="scwShow(scwID('birthday'),event);" /></div><br>
        
        <center>
        <table border="1">
          <tr>
            <td width="100" valign="top">
                <div align="left">
                <strong>Φύλο:</strong> <br />
                <input type="radio" name="RadioFylo" value="Man" id="RadioGroup1_0" />
                <label>Aντρας</label>
                <br />
                <input type="radio" name="RadioFylo" value="Woman" id="RadioGroup1_1" />
                <label>Γυναίκα</label>
                <br /></div></td>
            <td width="380" valign="top"><div align="left"><strong>Ιδιότητα στο Δ.Π.Θ.:</strong> <br />
                <input type="radio" name="RadioWork" value="1" id="RadioGroup5_0" />
                <label>Διδακτικό - Εκπαιδευτικό προσωπικό (Δ.Ε.Π.)</label>
                <br />
                <input type="radio" name="RadioWork" value="2" id="RadioGroup5_1" />
                <label>Διδάσκων ΠΔ 407/80</label>
                <br />
                <input type="radio" name="RadioWork" value="3" id="RadioGroup5_2" />
                <label>Ειδικό - Τεχνικό - Εργαστ. προσωπικό (Ε.Τ.Ε.Π.)</label>
                <br />
                <input type="radio" name="RadioWork" value="4" id="RadioGroup5_3" />
                <label>Ειδικό - Εκπαιδ - Διδακτ. προσωπικό (Ε.Ε.ΔΙ.Π.)</label>
                <br />
                <input type="radio" name="RadioWork" value="5" id="RadioGroup5_4" />
                <label>Διοικητικό προσωπικό</label>
                <br />
            </div></td>
          </tr>
        </table>
        </center>
        <br/>
        <center>
		<table border="1">
          <tr>
            <td width="620" valign="top"><div align="center"><strong>Τμήμα / Υπηρεσία: </strong>
                <select class="select" name="Tmhma">
                <option value="">Επιλέξτε...</option>
                <option value="Αγροτικής Ανάπτυξης">Αγροτικής Ανάπτυξης</option>
                <option value="Αρχιτεκτόνων Μηχανικών">Αρχιτεκτόνων Μηχανικών</option>
                <option value="Γλωσσών, Φιλολογίας και Πολιτισμού Παρευξεινίων Χωρών">Γλωσσών, Φιλολογίας και Πολιτισμού Παρευξεινίων Χωρών</option>
                <option value="Δασολογίας και Διαχείρισης Περιβάλλοντος και Φυσικών Πόρων">Δασολογίας και Διαχείρισης Περιβάλλοντος και Φυσικών Πόρων</option>
                <option value="Διεθνών Οικονομικών Σχέσεων και Ανάπτυξης">Διεθνών Οικονομικών Σχέσεων και Ανάπτυξης</option>
                <option value="Διοίκησης Επιχειρήσεων">Διοίκησης Επιχειρήσεων</option>
                <option value="Ελληνικής Φιλολογίας">Ελληνικής Φιλολογίας</option>
                <option value="Επιστήμης Φυσικής Αγωγής και Αθλητισμού">Επιστήμης Φυσικής Αγωγής και Αθλητισμού</option>
                <option value="Επιστημών της Εκπαίδευσης στην Προσχολική Ηλικία">Επιστημών της Εκπαίδευσης στην Προσχολική Ηλικία</option>
                <option value="Ηλεκτρολόγων Μηχανικών και Μηχανικών Υπολογιστών">Ηλεκτρολόγων Μηχανικών και Μηχανικών Υπολογιστών</option>
                <option value="Ιατρικής">Ιατρικής</option>
                <option value="Ιστορίας και Εθνολογίας">Ιστορίας και Εθνολογίας</option>
                <option value="Κοινωνικής Διοίκησης">Κοινωνικής Διοίκησης</option>
                <option value="Λοιπές Υπηρεσίες (Βιβλιοθήκη, Επιτροπή Ερευνών, Τεχνική Υπηρεσία, κλπ)">Λοιπές Υπηρεσίες (Βιβλιοθήκη, Επιτροπή Ερευνών, Τεχνική Υπηρεσία, κλπ)</option>
                <option value="Μηχανικών Παραγωγής και Διοίκησης">Μηχανικών Παραγωγής και Διοίκησης</option>
                <option value="Μηχανικών Περιβάλλοντος">Μηχανικών Περιβάλλοντος</option>
                <option value="Μοριακής Βιολογίας και Γενετικής">Μοριακής Βιολογίας και Γενετικής</option>
                <option value="Νομικής">Νομικής</option>
                <option value="Παιδαγωγικό Τμήμα Δημοτικής Εκπαίδευσης">Παιδαγωγικό Τμήμα Δημοτικής Εκπαίδευσης</option>
                <option value="Πολιτικών Επιστημών">Πολιτικών Επιστημών</option>
                <option value="Πολιτικών Μηχανικών">Πολιτικών Μηχανικών</option>
              </select>
            </div>
            </td>

          </tr>
        </table>
        </center>
        </td>
        </tr>
        </table>
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
  frmvalidator.addValidation("firstname","req","Συμπληρώστε πρώτα το πεδίο 'Όνομα' !");
  frmvalidator.addValidation("lastname","req","Συμπληρώστε πρώτα το πεδίο 'Επώνυμο' !");
  frmvalidator.addValidation("fatherfirstname","req","Συμπληρώστε πρώτα το πεδίο 'Όνομα Πατρός' !");
  frmvalidator.addValidation("birthday","req","Συμπληρώστε πρώτα το πεδίο 'Ημερ/νία Γέννησης' !");
  frmvalidator.addValidation("RadioFylo","selone_radio","Επιλέξτε Φύλο!");
  frmvalidator.addValidation("RadioWork","selone_radio","Επιλέξτε Ιδιότητα στο Δ.Π.Θ.!");
  frmvalidator.addValidation("Tmhma","dontselect=0","Επιλέξτε Τμήμα / Υπηρεσία!");
      </script>
</body>
</html>
