<?php 
#define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run.
## Database configuration
include ('../../files/connect.php');

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value
$company_name = $_GET['company_name'];
echo "Company Name: '$company_name'";
## Search 
if($searchValue != ''){
   $searchQuery .= " AND DRUG_NAME LIKE %'$searchValue%' OR 
        SERIAL_CODE LIKE %'$searchValue'% OR 
        DISTRIBUTOR_NAME LIKE %'$searchValue'% OR 
        SALESMAN_NAME LIKE%'$searchValue'%";
}

## Total number of records without filtering
#$sel = mysqli_query($con,"SELECT count(DRUG_NAME), SERIAL_CODE,DISTRIBUTOR_NAME,SALESMAN_NAME FROM DRUG d, BUY b, SALESMAN s WHERE d.COMPANY_NAME = '$company_name' AND b.COMPANY_NAME = '$company_name' AND s.COMPANY_NAME = '$company_name'");
$sel1 = mysqli_query($con, "SELECT * FROM COMPANY WHERE COMPANY_NAME = 'Pfizer'");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

echo $sel;

## Total number of record with filtering
#$sel = mysqli_query($con,"SELECT count(DRUG_NAME), SERIAL_CODE, DISTRIBUTOR_NAME, SALESMAN_NAME FROM DRUG d, BUY b, SALESMAN s WHERE d.COMPANY_NAME = '$company_name' AND b.COMPANY_NAME = '$company_name' AND s.COMPANY_NAME = '$company_name' ".$searchQuery);
$sel = mysqli_query($con,"SELECT count(DRUG_NAME) FROM DRUG WHERE COMPANY_NAME = '$company_name' ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
#$empQuery = "SELECT d.DRUG_NAME, d.SERIAL_CODE, b.DISTRIBUTOR_NAME, s.SALESMAN_NAME FROM DRUG d, BUY b, SALESMAN s WHERE d.COMPANY_NAME = '$company_name' AND b.COMPANY_NAME = '$company_name' AND s.COMPANY_NAME = '$company_name' '$searchQuery' ORDER BY '$columnName' '$columnSortOrder' LIMIT '$row' , '$rowperpage'";
$empQuery = "SELECT d.DRUG_NAME, d.SERIAL_CODE, b.DISTRIBUTOR_NAME, s.SALESMAN_NAME FROM DRUG d, BUY b, SALESMAN s WHERE d.COMPANY_NAME = '$company_name' AND b.COMPANY_NAME = '$company_name' AND s.COMPANY_NAME = '$company_name'";
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
   $data[] = array( 
      "DRUG_NAME"=>$row['DRUG'],
      "SERIAL_CODE"=>'<div contenteditable class="update" data-id="'.$row["id"].'" data-column="SERIAL_CODE">' . $row['SERIAL_CODE'] . '</div>',
      "DISTRIBUTOR_NAME"=>'<div contenteditable class="update" data-id="'.$row["id"].'" data-column="DISTRIBUTOR_NAME">' . $row['DISTRIBUTOR_NAME'] . '</div>',
      "SALESMAN_NAME"=>'<div contenteditable class="update" data-id="'.$row["id"].'" data-column="SALESMAN_NAME">' . $row['SALESMAN_NAME'] . '</div>',
   );
}
## Response
$response = array(
  "draw" => intval($draw),
  "iTotalRecords" => $totalRecordwithFilter,
  "iTotalDisplayRecords" => $totalRecords,
  "aaData" => $data,
  "thomas" => $sel1
);
echo json_encode($response);