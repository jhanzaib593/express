<?php

include "db_conn.php";

if(isset($_GET['deleteid'])){
	$id1 = $_GET['deleteid'];
	$sql="DELETE FROM `invoice_bill` WHERE  serailnunber1=$id1";
	$res=mysqli_query($conn,$sql);
	if($res){
		header('location:invoice_list.php');
	}else{
		die(mysql_error($conn));
	}
}
?>