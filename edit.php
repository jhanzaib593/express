 <?php
	session_start();
include "db_conn.php";

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Express</title>
	<meta charset="UTF-8" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<script>
		function mty() {
  		var a = parseInt(document.getElementById("weight").value);
  		var b = parseInt(document.getElementById("price").value);
  		var c = parseInt(document.getElementById("totaltransport").value);
  		var d = parseInt(document.getElementById("packing").value);
  		var e = parseInt(document.getElementById("custom").value);
  		var f = parseInt(document.getElementById("discount").value);
  		
  		
		document.getElementById("total").value = a * b ;
		
		
}
	</script>
	
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-light " aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="" width="300" height="100"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bolder nav_1">
          <li class="nav-item text-dark">
            <a class="nav-link" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item text-dark">
            <a class="nav-link" href="invoice_list.php">List Invoice</a>
          </li>
        </ul>
        <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
		  <button type="button" class="btn invoice_logout mx-2"><a class="text-decoration-none" href="logout.php">Logout</a></button>
		  <a class="navbar-brand" href="#"><img src="assets/img/logo 2.png" alt="" width="150" height="100"></a>
      </div>
    </div>
  </nav>
	
	<?php
	$id = $_GET['updateid'];
	
	
	
	 if($_SERVER['REQUEST_METHOD'] == 'POST'){
		 $snunber = $_POST['serailnunber'];
		 $date = $_POST['date'];
		 $ddate = $_POST['dispatchdate'];
		 $sname = $_POST['sname'];
		 $rname = $_POST['receivedname'];
		 $pnum = $_POST['phonenum'];
		 $rnum = $_POST['receivednum'];
		 $weight = $_POST['weight'];
		 $rnum2 = $_POST['receivednum2'];
		 $price = $_POST['price'];
		 $province = $_POST['province'];
		 $qty = $_POST['qty'];
		 $district = $_POST['district'];
		 $place = $_POST['place'];
		 $city = $_POST['city'];
		 $ttransport = $_POST['totaltransport'];
		 $packing = $_POST['packing'];
		 $custom = $_POST['custom'];
		 $tweight = $_POST['totalweight'];
		 $tprice = $_POST['totalprice'];
		 $discount = $_POST['discount'];
		
		 
		
		$query1 = " UPDATE `invoice_bill` SET serailnunber1='$id',date='$date',dispatchdate='$ddate',sname='$sname',receivedname='$rname',phonenum='$pnum',receivednum='$rnum',weight='$weight',receivednum2='$rnum2',price='$price',province='$province',qty='$qty',district='$district',place='$place]',city='[$city]',totaltransport='$ttransport',packing='$packing',custom='$custom',totalweight='$tweight',totalprice='$tprice',discount='$discount' WHERE serailnunber1='$id' ";
		
	/*	 $query =  "INSERT INTO `invoice_bill` (`optradio`, `date`, `dispatchdate`, `sname`, `receivedname`, `phonenum`, `receivednum`, `weight`, `receivednum2`, `price`, `province`, `qty`, `district`, `place`, `city`, `totaltransport`, `packing`, `custom`, `totalweight`, `totalprice`, `discount`) VALUES ('$optradio', '$date', '$ddate', '$sname', '$rname', '$pnum', '$rnum', '$weight', '$rnum2', '$price', '$province', '$qty', '$district', '$place', '$city', '$ttransport', '$packing', '$custom', '$tweight', '$tprice', '$discount')";*/
  
		 $result12=mysqli_query($conn,$query1) ;
		 if($result12){
			 	echo 
						header("Location: invoice_list.php");
							}
		 else{
			echo "<script>
			alert('Data not stored');
			</script>";
		}

	 }
	



	
	?>
	
	<?php
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
	
	<div class="container my-4">
		<form method="post" dir="rtl" class="invoice_form fw-bolder">
			
			<!--<div class="row mt-2">
    			<div class="col-md-1">
					<div class="form-check">
  						<input type="radio"  class="form-check-input" id="radio1" required value="سمندری" name="optradio">سمندری 
  						<label class="form-check-label" for="radio1"></label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="form-check">
  						<input type="radio" class="form-check-input" id="radio2" required value="ہوائی" name="optradio" > ہوائی 
  						<label class="form-check-label" for="radio2"></label>
					</div>
				</div>
			</div>-->
			
			<div class="row mt-2">
    			<div class="col-md-4">
					<label for="" class="form-label">سیریل نمبر</label>
    				<input type="number" class="form-control" id="serailnunber" name="serailnunber" value="<?php echo $id?>" readonly>
				</div>
				<div class="col-md-4">
					<label for="" class="form-label">تاریخ</label>
    				<input type="date" class="form-control" id="" value="<?php echo $date1?>" name="date">
				</div>
				<div class="col-md-4">
					<label for="" class="form-label">تاریخ روانگی</label>
    				<input type="date" class="form-control" id="" value="<?php echo $ddate1?>" name="dispatchdate">
				</div>
			</div>
			<div class="row mt-2">
    			<div class="col-md-6">
					<label for="" class="form-label">نام</label>
    				<input type="text" class="form-control" id="" value="<?php echo $sname1?>" name="sname" required>
				</div>
				<div class="col-md-6">
					<label for="" class="form-label">وصول کنده نام</label>
    				<input type="text" class="form-control" id="" value="<?php echo $rname1?>" name="receivedname">
				</div>
			</div>
			<div class="row mt-2">
    			<div class="col-md-6">
					<label for="" class="form-label">فون</label>
    				<input type="number" class="form-control" id="" value="<?php echo $pnum1?>" name="phonenum">
				</div>
				<div class="col-md-6">
					<label for="" class="form-label">فون نمبر</label>
    				<input type="text" class="form-control" id="" value="<?php echo $rnum1?>" name="receivednum">
				</div>
			</div>
			<div class="row mt-2">
    			<div class="col-md-6">
					<label for="" class="form-label">وزن</label>
    				<input type="number" class="form-control" id="weight" value="<?php echo $weight1?>" name="weight" placeholder="weight in Kg">
				</div>
				<div class="col-md-6">
					<label for="" class="form-label">فون نمبر</label>
    				<input type="number" class="form-control" id="" value="<?php echo $rnum21?>" name="receivednum2">
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">ریٹ</label>
    				<input type="number" class="form-control" id="price" value="<?php echo $price1?>" name="price" onkeyup="mty()">
				</div>
    			<div class="col-md-6">
					<label for="Province" class="form-label">صوبہ</label>
    				 <select id="Province" value="<?php echo $province1 ?>" name="province" class="form-control">
						<option value="بلوچستان" >بلوچستان</option>
						<option value="گلگت بلتستان"> گلگت بلتستان </option>
						<option value="خیبرپختونخوا">خیبرپختونخوا</option>
						<option value="پنجاب">پنجاب</option>
						 <option value="سندھ">سندھ</option>
						 <option value="پنجاب">پنجاب</option>
					  </select>
				</div>
				
			</div>
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">تعداد</label>
    				<input type="number" class="form-control" id="" value="<?php echo $qty1?>" name="qty">
				</div>
				<div class="col-md-6">
					<label for="" class="form-label">ضلع و تحصیل</label>
    				<input type="text" class="form-control" id="" value="<?php echo $district1?>" name="district">
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">مقام</label>
    				<input type="text" class="form-control" id="" value="<?php echo $place1?>" name="place">
				</div>
				<div class="col-md-6">
					<label for="" class="form-label">شہر و گاوں</label>
    				<input type="text" class="form-control" id="" value="<?php echo $city1?>" name="city">
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">لوکل ٹرانسپورٹ</label>
    				<input type="number" class="form-control" id="totaltransport" value="<?php echo $ttransport1?>" name="totaltransport">
				</div>
				
			</div>
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">پیکینگ</label>
    				<input type="number" class="form-control" id="packing" value="<?php echo $packing1?>" name="packing">
				</div>
				
			</div>
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">کسٹم</label>
    				<input type="number" class="form-control" id="custom" value="<?php echo $custom1?>" name="custom">
				</div>
				
			</div>
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">ٹوٹل وزن</label>
    				<input type="number" class="form-control" id="" value="<?php echo $tweight1?>" name="totalweight">
				</div>
				
			</div>
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">رعایت</label>
    				<input type="number" class="form-control" id="discount" value="<?php echo $discount1?>" name="discount">
				</div>
				
			</div>
			
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">ٹوٹل رینگیٹ</label>
    				<input type="number" class="form-control" id="total" value="<?php echo $tprice1?>" name="totalprice" readonly>
				</div>
				
			</div>
			 
			<div class="invoice_button" dir="ltr">
				<button type="submit"  class="btn btn-primary m-3 fw-bold" >update</button>
				<button type="reset"  class="btn btn-primary m-3 fw-bold" >clare</button>
			</div>
		</form>
	
	
	</div>
	
	<?php
		}
	?>
  
</body>
</html>



