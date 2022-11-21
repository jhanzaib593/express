<?php
//fetch.php
include "db_conn.php";
$columns = array('serailnunber1', 'sname', 'phonenum', 'receivedname', 'phonenum', 'date', 'totalprice');

$query = "SELECT * FROM invoice_bill WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'date BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (serailnunber1 LIKE "%'.$_POST["search"]["value"].'%" 
  OR sname LIKE "%'.$_POST["search"]["value"].'%" 
  OR phonenum LIKE "%'.$_POST["search"]["value"].'%" 
  OR receivedname LIKE "%'.$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY serailnunber1 DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));

$result = mysqli_query($conn, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["serailnunber1"];
 $sub_array[] = $row["sname"];
 $sub_array[] = $row["phonenum"];
 $sub_array[] = $row["receivedname"];
 $sub_array[] = $row["phonenum"];
 $sub_array[] = $row["date"];
 $sub_array[] = $row["totalprice"];
	?>

<?php
 $data[] = $sub_array;
}

function get_all_data($conn)
{
 $query = "SELECT * FROM invoice_bill";
 $result = mysqli_query($conn, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($conn),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>