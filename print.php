<!DOCTYPE html>
<?php
	require 'db_conn.php';

	
	
?>
<html lang="en">
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<style>	
		.table {
			width: 100%;
			margin-bottom: 20px;
		}	
		
		.table-striped tbody > tr:nth-child(odd) > td,
		.table-striped tbody > tr:nth-child(odd) > th {
			background-color: #f9f9f9;
		}
		
		@media print{
			#print {
				display:none;
			}
		}
		@media print {
			#PrintButton {
				display: none;
			}
		}
		
		@page {
			size: auto;   /* auto is the initial value */
			margin: 0;  /* this affects the margin in the printer settings */
		}
			.main{
				display: flex;
				justify-content: center;
				margin-top: -2em
				
			}
			.rules{
				width: 30%;
				font-size: 10px;
			}
			.bill{
				width: 70%;
			}
			.bill tbody td{
				border-bottom: 1px solid #d7d7d7;
			}
			.bill thead td{
			}
			.bill tbody{
				width: 80%;
			}
			.t_size{
				font-size: 20px
			}
			
	</style>
	</head>
<body dir="rtl">
	
	<table class="table table-borderless">
    <tbody>
      <tr>
        <td><img src="assets/img/logo 3.png" alt="" height="100" width="150"></td>
        <td class="pt-4">
			<h3>ایکسپریس کارگو سروس وس</h3>
			<p>&nbsp;&nbsp;&nbsp;(Reg No: 202203159312 (003410318-V</p>
			<p style="font-size: 14">بہترین ریٹے اور بہترین سروس کے ساتھ آسے اپکا سامان ملایشیا کے</p>
			<p>ہر صوبے سے پاکستان کے ہر صوبے تکے چند ہی دنوں میں</p>
		  
		</td>
        <td><img src="assets/img/logo.png" alt="" height="100" width="150"></td>
      </tr>
     
    </tbody>
  </table>
	<div class="main">
		
		<div class="bill px-5">
			<table class="table table-borderless">
				
				<?php
				$id = $_GET['printid'];
	
	  	$sql12="Select * from `invoice_bill` WHERE serailnunber1='$id' " ;
		$dis1=mysqli_query($conn,$sql12)or die (mysqli_error());
	  	while($row=mysqli_fetch_array($dis1)){
		$optradio1 = $row[0];
		 $snunber1 = $row[1];
		 $date1 = $row[2];
		 $ddate1 = $row[3];
		 $sname1 = $row[4];
		 $rname1 = $row[5];
		 $pnum1 = $row[6];
		 $rnum1 = $row[7];
		 $weight1 = $row[8];
		 $rnum21 = $row[9];
		 $price1 = $row[10];
		 $province1 = $row[11];
		 $qty1 = $row[12];
		 $district1 = $row[13];
		 $place1 = $row[14];
		 $city1 = $row[15];
		 $ttransport1 = $row[16];
		 $packing1 = $row[17];
		 $custom1 = $row[18];
		 $tweight1 = $row[19];
		 $tprice1 = $row[20];
		 $discount1 = $row[21];
	?>
		<thead>
			<tr>
				<td class="fw-bolder"><?php echo $optradio1?></td>
				
			</tr>
			
		</thead>
	  	<tbody>
			
			
			<tr>
			  <td>سیریل نمبر:&nbsp;&nbsp;<?php echo $id?></td><br>

			</tr>
			<tr>

			  <td>تاریخ:&nbsp;&nbsp;<?php echo $date1?></td>
			  <td>تاریخ روانگی:&nbsp;&nbsp;<?php echo $ddate1?></td>
			</tr>
			<tr>
			  <td>نام: &nbsp;&nbsp;<?php echo $sname1?></td>
			  <td>وصول کنده نام: &nbsp;&nbsp;<?php echo $rname1?></td>
			</tr>
			
			<tr>
			  <td>فون : &nbsp;&nbsp;<?php echo $pnum1?></td>
			  <td>فون نمبر : &nbsp;&nbsp;<?php echo $rnum1?></td>
			</tr>
			<tr>
			  <td>وزن: &nbsp;&nbsp;<?php echo $weight1?></td>
			  <td>فون نمبر 2: &nbsp;&nbsp;<?php echo $rnum21?></td>
			</tr>
			<tr>
			  <td>ریٹ: &nbsp;&nbsp;<?php echo $price1?></td>
			  <td>صوبہ: &nbsp;&nbsp;<?php echo $province1?></td>
			</tr>
			  <td>تعداد: &nbsp;&nbsp;<?php echo $qty1?></td>
			  <td> ضلع و تحصیل: &nbsp;&nbsp;<?php echo $district1?></td>
			</tr>
			</tr>
			  <td>مقام: &nbsp;&nbsp;<?php echo $place1?></td>
			  <td>شہر و گاوں: &nbsp;&nbsp;<?php echo $city1?></td>
			</tr>
			</tr>
			  <td>لوکل ٹرانسپورٹ: &nbsp;&nbsp;<?php echo $tweight1?></td>
			  <td style="border: none; text-align:center; text-align:center" class="fw-bolder t_size"> Maybank</td>
			</tr>
			</tr>
			  <td>پیکینگ: &nbsp;&nbsp;<?php echo $packing1?></td>
			  <td style="border: none; text-align:center" dir="ltr" class="text-danger fw-bold t_size"> 5620 5808 6124</td>
			</tr>
			</tr>
			  <td>کسٹم: &nbsp;&nbsp;<?php echo $custom1?></td>
			  <td style="border: none; text-align:center" class="fw-bolder t_size"> Express Cargo Service</td>
			</tr>
			</tr>
			  <td>ٹوٹل وزن: &nbsp;&nbsp;<?php echo $weight1?></td>
			  <td style="border: none; text-align:center"> </td>
			</tr>
			</tr>
			  <td>رعایت: &nbsp;&nbsp;<?php echo $discount1?></td>
			  <td style="border: none; text-align:center" class="fw-bolder t_size">___________________________</td>
			</tr>
			</tr>
			  <td>ٹوٹل رینگیٹ: &nbsp;&nbsp;<?php echo $tprice1?></td>
			  <td style="border: none; text-align:center" class="fw-bolder t_size"> MD Sign</td>
			</tr>
			
			
		</tbody>
				<?php
		}
				?>
			</table>	
		
		</div>
		
		<div class="rules text-danger">
			<h4 align="center">ضروری ہدایت</h4>
			<p><ul><li>شیشہ (کانچ کے سامان کی ٹوٹ جانے کی کوئی گارنٹی یاذ مہ داری نہیں۔</li></ul></p>
			<p><ul><li>بلندر ، رائس کو کر اور اس طرح نازک ٹوٹنے یاموڑنے والی چیز دیگر سامان یا کارپٹ کے اندر چھپا کر رکھنے سے اگر ٹھیک صورت میں نہ پہنچاتو کمپنی پرکسی قسم کی ذمہ داری نہیں ہوگئی۔
لہذا اس طرح کا سامان اندر چھپا کر رکھنے سے گریز کرے۔</li></ul></p>
			<p><ul><li>سامان اصول کرتے وقت اچھی طرح سے تسلی کر کے ڈرائیور کو دستخط کرے۔ دستخط کرے کے بعد کمپنی کیسی چیز یا مسلے کی ذمہ دار نہیں۔ </li></ul></p>
			<p><ul><li>کوئی مسلہ ہونے کی صورت میں کمپنی کے نمبر پر کمپلین کرے اور فوٹو یاویڈیو ضرور بنا کر کمپنی کو واٹسپ کرے۔ دستخط کرنے کے بعد کمپنی پر کوئی ذمہ داری نہیں ہو گی۔ </li></ul></p>
			<p><ul><li>بحری جہاز کسی مسلے کی وجہ سے لیٹ ہونے صورت میں یا گورنمنٹ یا پاکستان میں موسم کی خرابی کی وجہ سے یادیگر ملک کی حالت خراب ہونے کی صورت میں لوکل ڈیلور پالیٹ ہو سکتی ہیں۔ لہذا اس صورت میں کمپنی کے ساتھ تعاون کرے </li></ul></p>
			<p><ul><li>ه ائیر پورٹ یا بندر گاہ پر تمام سامان کسٹم والے ہمارے نمائندے کے سامنے کو لتے ہیں۔اس کی کوئی شکایت قبول نہیں۔ </li></ul></p>
			<p><ul><li>چکنائی اور لیک ہونے والی چیزوں کی کمپنی ذمہ دار نہیں ہو گی۔ سونا اور قیمتی چیزیں مثلا گڑیاں، نقدی، موبائیل سیٹ ، کمپیوٹر لیپ ٹاپ شیشہ ٹوٹنے والی اور دیگر اس طرح کی چیزیں نہیں لے جایا جا تا۔ </li></ul></p>
			<p><ul><li> ہمارا نمائندہ صرف ایک بار نہ پرائے گا۔</li></ul></p>
		</div>
		

	</div>

	<p class="fw-bolder text-center">Address : No 65 Jalan Mulia Taman Mulia 42700 Banting Selangor</p>
	<center>
		<button class="btn btn-outline-danger my-5" id="PrintButton" onclick="PrintPage()">Print</button>
<!--
		<button class="btn btn-outline-danger my-5" id="share" onclick="Share()">Share</button> 
-->
		
	</center>
</body>
<script type="text/javascript">
	function Share(){
		
	}
	function PrintPage() {
		window.print();
	}
	document.loaded = function(){
		
	}
		window.addEventListener('DOMContentLoaded', (event) => {
   		PrintPage()
		setTimeout(function(){ window.close() },750)
	});
	
	
</script>
</html>
