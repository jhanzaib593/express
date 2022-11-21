

<?php
include "db_conn.php";
$output = "";
if (isset($_POST['submit'])) {
$sql = "SELECT * FROM invoice_bill";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
	$output .='
		<table class="table" bordered="1" dir="rtl">
			<tr>
				<th>سفر</th>
				<th>سیریل نمبر</th>
				<th>تاریخ</th>
				<th>تاریخ روانگی</th>
				<th>نام</th>
				<th>فون</th>
				<th>وصول کنده نام</th>
				<th>فون نمبر 1</th>
				<th>2 فون نمبر</th>
				<th>صوبہ</th>
				<th>ضلع و تحصیل</th>
				<th>مقام</th>
				<th>شہر و گاوں</th>
				<th>وزن</th>
				<th>ریٹ</th>
				<th>تعداد</th>
				<th>لوکل ٹرانسپورٹ</th>
				<th>پیکینگ</th>
				<th>کسٹم</th>
				<th>ٹوٹل وزن</th>
				<th>رعایت</th>
				<th>ٹوٹل رینگیٹ</th>
			</tr>
';
	while ($row = mysqli_fetch_array($res)) {
		$output .='
		<tr>
		<td>'.$row["optradio"].' </td>
		<td>'.$row["serailnunber1"].' </td>
		<td>'.$row["date"].' </td>
		<td>'.$row["dispatchdate"].' </td>
		<td>'.$row["sname"].' </td>
		<td>'.$row["phonenum"].' </td>
		<td>'.$row["receivedname"].' </td>
		<td>'.$row["receivednum"].' </td>
		<td>'.$row["receivednum2"].' </td>
		<td>'.$row["province"].' </td>
		<td>'.$row["district"].' </td>
		<td>'.$row["place"].' </td>
		<td>'.$row["city"].' </td>
		<td>'.$row["weight"].' </td>
		<td>'.$row["price"].' </td>
		<td>'.$row["totaltransport"].' </td>
		<td>'.$row["packing"].' </td>
		<td>'.$row["custom"].' </td>
		<td>'.$row["totalweight"].' </td>
		<td>'.$row["discount"].' </td>
		<td>'.$row["totalprice"].' </td>
		</tr>
		'	;
		
		
		$output .='</table>';
		
		header('Content-Type: application/xls');
		header('Content-Disposition:attachment; filename=reports.xls');
		
		
			}
	echo $output;
		}else{
			echo 'no data found';
		}
	
	}
?>