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
	<div class="container">		
	  <h1 class="title text-center my-3">List Invoice</h1>
	  			  
      <table id="data-table" class="table table-condensed table-striped">
        <thead>
          <tr>
            <th>سیریل نمبر</th>
            <th>نام</th>
            <th>فون</th>
            <th>وصول کنده نام</th>
            <th>وصول کنده فون نمبر</th>
            <th>شہر و گاوں</th>
            <th>ٹوٹل رینگیٹ</th>
            <th>Print</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
			<?php
	  
	  	$query1="select * from `invoice_bill`";
	  	$dis=mysqli_query($conn,$query1)or die (mysqli_error());
	  	while($row=mysqli_fetch_array($dis))
		{
			$id= $row[1];
	  
	  ?>
	  
    <tr>
      <td><?php echo $id?></td>
      <td><?php echo $row[4]?></td>
	  <td><?php echo $row[6]?></td>
      <td><?php echo $row[7]?></td>
      <td><?php echo $row[5]?></td>
      <td><?php echo $row[15]?></td>
	  <td><?php echo $row[20]?></td>
		<td><a href="print.php?printid=<?php echo $id?>" target="_blank"><i class="fa fa-print"></i></a></td>
		<td><a href="edit.php?updateid=<?php echo $id?>"><i class="fa fa-pen"></i></a></td>
		<td><a href="delete.php?deleteid=<?php echo $id?>" >
			<i class="fa fa-trash"></i></a></td>
      
    </tr>
			
			<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title ">Do you </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body 
      <div class="modal-body">
         <button type="submit" class="btn btn-primary fw-bold">
			 <a class="text-decoration-none text-light" href="delete.php?deleteid=">Yes</a>
		  </button>
      </div>-->


      <!-- Modal footer -->
      <div class="modal-footer justify-content-center">
        
        <button type="submit" class="btn btn-primary fw-bold">
			 <a class="text-decoration-none text-light" href="<?php echo $id?>">Yes</a>
		  </button>
      <button type="button" class="btn btn-danger ms-3" data-bs-dismiss="modal">No</button>
      </div>

    </div>
  </div>
</div>
	  
	  <?php
		}
	  ?>
		
        </thead>
		  
      </table>	

</div>	
		</body>
</html>
