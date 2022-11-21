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
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/bootbox.min.js"></script>
<script type="text/javascript" src="assets/js/deleteRecords.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



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
       <form action="search.php" method="get">
          <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search">
        
			</form>
		  <button type="button" class="btn invoice_logout mx-2"><a class="text-decoration-none" href="logout.php">Logout</a></button>
		  <a class="navbar-brand" href="#"><img src="assets/img/logo 2.png" alt="" width="150" height="100"></a>
      </div>
    </div>
  </nav>'
	
	

	<?php
$sub_sql="";
$toDate=$fromDate="";
if(isset($_POST['submit'])){
	$from=$_POST['from'];
	$fromDate=$from;
	$fromArr=explode("/",$from);
	$from=$fromArr['2'].'-'.$fromArr['1'].'-'.$fromArr['0'];
	$from=$from." 00:00:00";
	
	$to=$_POST['to'];
	$toDate=$to;
	$toArr=explode("/",$to);
	$to=$toArr['2'].'-'.$toArr['1'].'-'.$toArr['0'];
	$to=$to." 23:59:59";
	
	$sub_sql= " where date >= '$from' && date <= '$to' ";
}

$res=mysqli_query($conn,"select * from invoice_bill $sub_sql order by serailnunber1 desc");
?>
<div class="container">		
	<form method="post" class="">
		<label for="from">From</label>
		<input class="date" type="text" id="from" name="from" required value="<?php echo $fromDate?>">
		<label for="to">to</label>
		<input class="date" type="text" id="to" name="to" required value="<?php echo $toDate?>">
		<input type="submit" name="submit" value="Filter">
	</form>
  
		  <h1 class="title text-center my-3" style="  padding-top: 3em !important;">List of Invoice</h1>
	  		<form action="Excel.php" method="post">
				<button type="submit" name="submit" class="btn btn-outline-primary float-end">Download</button>
			</form>	  
<table id="data-table" class="table table-condensed table-striped">
    <thead>
       <tr>
            <th>سیریل نمبر</th>
            <th>نام</th>
            <th>فون</th>
            <th>وصول کنده نام</th>
            <th>وصول کنده فون نمبر</th>
            <th>تاریخ</th>
            <th>ٹوٹل رینگیٹ</th>
            <th>Print</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
    </thead>
	<?php if(mysqli_num_rows($res)>0){?>

    <tbody>
      <?php while($row=mysqli_fetch_assoc($res)){
		$id= $row['serailnunber1'];
		
		?>
      
		<tr>
      <td><?php echo $row['serailnunber1']?></td>
        <td><?php echo $row['sname']?></td>
		<td><?php echo $row['phonenum']?></td>
		<td><?php echo $row['receivedname']?></td>
		<td><?php echo $row['receivednum']?></td>
		<td><?php echo $row['date']?></td>
		<td><?php echo $row['totalprice']?></td>
		<td><a href="print.php?printid=<?php echo $id?>" target="_blank"><i class="fa fa-print"></i></a></td>
		<td><a href="edit.php?updateid=<?php echo $id?>"><i class="fa fa-pen"></i></a></td>
		<td><a class="delete_employee" data-emp-id="<?php echo $id; ?>" href="javascript:void(0)">
			<i class="fa fa-trash"></i></a></td>
      
    </tr>
	  <?php } ?>
    </tbody>
  </table>
  <?php } else {
	echo "No data found";  
  }
  ?>
<script>
  $( function() {
    var dateFormat = "dd/mm/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1,
		  dateFormat:"dd/mm/yy",
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
		dateFormat:"dd/mm/yy",
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>
	

	

</div>
	
</body>
</html>