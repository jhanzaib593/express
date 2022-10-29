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
</head>

<body class="main-bg">
  <!-- Login Form -->
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Login</h2>
			  
          </div>
          <div class="card-body">
            <form action="login.php" method="post">
				<?php if(isset($_GET['error'])) { ?>

            		<p class="error"><?php echo $_GET['error']; ?></p>

       			 <?php } ?>
              <div class="mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" class="form-control" name="uname" placeholder="User Name"/>
              </div>
              <div class="mb-4">
                <label for="password1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" id="password1"/>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn text-light main-bg">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
