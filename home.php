<?php
	session_start();
include "db_conn.php";
if(isset ($_SESSION['id']) && isset($_SESSION['user_name'])){

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
	/*	function mty() {
			var c = 0, d = 0, e = 0, f = 0; 
  		var a = parseInt(document.getElementById("weight").value);
  		var b = parseInt(document.getElementById("price").value);
  		c = parseInt(document.getElementById("totaltransport").value);
  		d = parseInt(document.getElementById("packing").value);
  		e = parseInt(document.getElementById("custom").value);
  		f = parseInt(document.getElementById("discount").value);
  		
  		
		document.getElementById("total").value = a*b + c + d + e + - f;
		
		
}*/
	function add_number(e) {
  if (isNumberKey(e)) {
    setTimeout(() => {
      var weight = document.getElementById("weight").value !== "" ? parseInt(document.getElementById("weight").value) : 0;
      var price = document.getElementById("price").value !== "" ? parseInt(document.getElementById("price").value) : 0;
      var totaltransport = document.getElementById("totaltransport").value !== "" ? parseInt(document.getElementById("totaltransport").value) : 0;
      var packing = document.getElementById("packing").value !== "" ? parseInt(document.getElementById("packing").value) : 0;
      var custom = document.getElementById("custom").value !== "" ? parseInt(document.getElementById("custom").value) : 0;
      var discount = document.getElementById("discount").value !== "" ? parseInt(document.getElementById("discount").value) : 0;
      var result = weight * price + totaltransport + packing + custom - discount;
      document.getElementById("total").value = result;
    }, 50)
    return true;
  } else {
    return false;
  }
}

function isNumberKey(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    return false;
  }
  return true;
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
		
		<button type="button" class="btn invoice_logout mx-2"><a class="text-decoration-none" href="#">Search</a></button>
		  <button type="button" class="btn invoice_logout mx-2"><a class="text-decoration-none" href="logout.php">Logout</a></button>
		  <a class="navbar-brand" href="#"><img src="assets/img/logo 2.png" alt="" width="150" height="100"></a>
      </div>
    </div>
  </nav>
	
	<?php
	 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		 $optradio = $_POST['optradio'];
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
		
		 
		
		 
		
		 $query =  "INSERT INTO `invoice_bill` (`optradio`, `date`, `dispatchdate`, `sname`, `receivedname`, `phonenum`, `receivednum`, `weight`, `receivednum2`, `price`, `province`, `qty`, `district`, `place`, `city`, `totaltransport`, `packing`, `custom`, `totalweight`, `totalprice`, `discount`) VALUES ('$optradio', '$date', '$ddate', '$sname', '$rname', '$pnum', '$rnum', '$weight', '$rnum2', '$price', '$province', '$qty', '$district', '$place', '$city', '$ttransport', '$packing', '$custom', '$tweight', '$tprice', '$discount')";
  
		 $result=mysqli_query($conn,$query) ;
		 if($result){
			echo  "<script>
			alert('Data stored');
			</script>";
/*
				header("Location: print1.php");
*/
		}else{
			echo "<script>
			alert('Data not stored');
			</script>";
		}

	 }
	



	
	?>
	
	
	
	<div class="container my-4">
		<form method="post" dir="rtl" class="invoice_form fw-bolder">
			<div class="row mt-2">
    			<div class="col-md-1">
					<div class="form-check">
  						<input type="radio" class="form-check-input" id="radio1" required name="optradio" value="سمندری">سمندری 
  						<label class="form-check-label" for="radio1"></label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="form-check">
  						<input type="radio" class="form-check-input" id="radio2" required value="ہوائی" name="optradio" > ہوائی 
  						<label class="form-check-label" for="radio2"></label>
					</div>
				</div>
			</div>
			
			<div class="row mt-2">
    			<div class="col-md-4">
					<label for="" class="form-label">سیریل نمبر</label>
    				<input type="number" class="form-control" id="serailnunber" name="serailnunber" readonly>
				</div>
				<div class="col-md-4">
					<label for="" class="form-label">تاریخ</label>
    				<input type="date" class="form-control" id="" name="date">
				</div>
				<div class="col-md-4">
					<label for="" class="form-label">تاریخ روانگی</label>
    				<input type="date" class="form-control" id="" name="dispatchdate">
				</div>
			</div>
			<div class="row mt-2">
    			<div class="col-md-6">
					<label for="" class="form-label">نام</label>
    				<input type="text" class="form-control" id="" name="sname" required>
				</div>
				<div class="col-md-6">
					<label for="" class="form-label">وصول کنده نام</label>
    				<input type="text" class="form-control" id="" name="receivedname">
				</div>
			</div>
			<div class="row mt-2">
    			<div class="col-md-6">
					<label for="" class="form-label">فون</label>
    				<input type="number" class="form-control" id="" name="phonenum">
				</div>
				<div class="col-md-6">
					<label for="" class="form-label">فون نمبر</label>
    				<input type="text" class="form-control" id="" name="receivednum">
				</div>
			</div>
			<div class="row mt-2">
    			<div class="col-md-6">
					<label for="" class="form-label">وزن</label>
    				<input type="number" class="form-control" id="weight" name="weight" onkeypress="return add_number(event)" placeholder="weight in Kg">
				</div>
				<div class="col-md-6">
					<label for="" class="form-label">فون نمبر</label>
    				<input type="number" class="form-control" id="" name="receivednum2">
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">ریٹ</label>
    				<input type="number" class="form-control" id="price" name="price" onkeypress="return add_number(event)">
				</div>
    			<div class="col-md-6">
					<label for="Province" class="form-label">صوبہ</label>
    				 <select id="Province" name="province" class="form-control">
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
    				<input type="number" class="form-control" id="" name="qty">
				</div>
				<div class="col-md-6">
					<label for="" class="form-label">ضلع و تحصیل</label>
    				<input type="text" class="form-control" id="" name="district">
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">مقام</label>
    				<input type="text" class="form-control" id="" name="place">
				</div>
				<div class="col-md-6">
					<label for="" class="form-label">شہر و گاوں</label>
    				<input type="text" class="form-control" id="" name="city">
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">لوکل ٹرانسپورٹ</label>
    				<input type="number" class="form-control" id="totaltransport" name="totaltransport" onkeypress="return add_number(event)">
				</div>
				
			</div>
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">پیکینگ</label>
    				<input type="number" class="form-control" id="packing" name="packing" onkeypress="return add_number(event)">
				</div>
				
			</div>
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">کسٹم</label>
    				<input type="number" class="form-control" id="custom" name="custom" onkeypress="return add_number(event)">
				</div>
				
			</div>
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">ٹوٹل وزن</label>
    				<input type="number" class="form-control" id="totalweight" name="totalweight" readonly value="0">
				</div>
				
			</div>
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">رعایت</label>
    				<input type="number" class="form-control" id="discount" name="discount" onkeypress="return add_number(event)">
				</div>
				
			</div>
			
			<div class="row mt-2">
				<div class="col-md-6">
					<label for="" class="form-label">ٹوٹل رینگیٹ</label>
    				<input type="number" class="form-control" id="total" name="totalprice" readonly>
				</div>
				
			</div>
			 
			<div class="invoice_button" dir="ltr">
				<button type="submit"  class="btn btn-primary m-3 fw-bold">Save</button>
				<button type="button" onKeyUp="mty()" class="btn btn-primary m-3 fw-bold">Save & Paid</button>
			</div>
		</form>
	<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <button type="submit" class="btn btn-primary fw-bold">Share</button>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
	
	</div>
  
</body>
</html>



	<!--<h1>Hello <?php //echo $_SESSION['user_name'];?></h1>-->

<?php
}
else{
	header("Location: index.php");
	exit();
}

?>