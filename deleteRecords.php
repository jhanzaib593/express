<?php
include_once("db_conn.php");
if($_REQUEST['empid']) {
	$sql = "DELETE FROM `invoice_bill` WHERE serailnunber1='".$_REQUEST['empid']."'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	
	if($resultset) {
		echo "Record Deleted";
	}
}
?>
