<?php define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run.
## Database configuration
include ('../connect.php');

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value

$company_name = $_POST['company_name'];
echo "Company Name: '$company_name'";

## Search 
if($searchValue != ''){
   $searchQuery .= " and (DRUG_NAME like '%".$searchValue."%' or SERIAL_CODE like '%".$searchValue."%' or DISTRIBUTOR like'%".$searchValue."%' or SALESMAN like'%".$searchValue."%'";
}
#$searchQuery = "SELECT DRUG_NAME, SERIAL_CODE,DISTRIBUTOR_NAME,SALESMAN_NAME FROM DRUG d, BUY b, SALESMAN s WHERE d.COMPANY_NAME = '$company_name' AND b.COMPANY_NAME = '$company_name' AND s.COMPANY_NAME = '$company_name'";
## Total number of records without filtering
$sel = mysqli_query($con,"select count(DRUG_NAME, SERIAL_CODE,DISTRIBUTOR_NAME,SALESMAN_NAME) FROM DRUG d, BUY b, SALESMAN s WHERE d.COMPANY_NAME = '$company_name' AND b.COMPANY_NAME = '$company_name' AND s.COMPANY_NAME = '$company_name'");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of record with filtering
$sel = mysqli_query($con,"select count(*) as allcount from COMPANY WHERE 1 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from COMPANY WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
   $data[] = array( 
      "DRUG"=>$row['DRUG'],
      "SERIAL_CODE"=>'<div contenteditable class="update" data-id="'.$row["id"].'" data-column="SERIAL_CODE">' . $row['SERIAL_CODE'] . '</div>',
      "DISTRIBUTOR"=>'<div contenteditable class="update" data-id="'.$row["id"].'" data-column="DISTRIBUTOR">' . $row['DISTRIBUTOR'] . '</div>',
      "SALESMAN"=>'<div contenteditable class="update" data-id="'.$row["id"].'" data-column="SALESMAN">' . $row['SALESMAN'] . '</div>',
   );
}
## Response
$response = array(
  "draw" => intval($draw),
  "iTotalRecords" => $totalRecordwithFilter,
  "iTotalDisplayRecords" => $totalRecords,
  "aaData" => $data
);

echo json_encode($response);