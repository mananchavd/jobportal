<?php include 'include/outerauth.php'; ?>

<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="author" content="Jobboard">
	<title>Candidate Registration</title>

	<?php include 'include/alllink.php'; ?>
</head>

<body>

	<?php include 'include/header.php'; ?>


	<div class="page-header" style="background: url(assets/img/banner1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumb-wrapper">
						<h2 class="product-title">Candidate Registration</h2>
						<ol class="breadcrumb">
							<li><a href="//"><i class="ti-home"></i> Home</a></li>
							<li class="current">Candidate Registration</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="about section">
		<div class="container">
			<div class="row">
				<form class="" action="function.php" method="post">


					<div class="col-md-6 col-sm-12">
						<div class="form-group">
								<input type="text"  class="form-control" name="fname" placeholder="Enter Your First Name">
						</div>
						<div class="form-group">
								<input type="text"  class="form-control" name="lname" placeholder="Enter Your Last Name">
						</div>
						<div class="form-group">
								<input type="email"  class="form-control" name="email" placeholder="Enter Your Email ID">
						</div>

					</div>
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
								<input type="number"  class="form-control" name="mobile" placeholder="Enter Your Mobile Number">
						</div>
						<div class="form-group">
								<input type="password"  class="form-control" name="password" placeholder="Enter Your Password">
						</div>
						<div class="form-group">
								<input type="password"  class="form-control" name="cpassword" placeholder="Enter Your Confirm Password">

								<input type="hidden"  class="form-control" name="role" value="candidate">
								<input type="hidden"  class="form-control" name="status" value="50%">
						</div>
					</div>

					<div class="row text-center">
						<button class="btn btn-common log-btn" type="submit" name="candiregistration">Register Now</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include 'include/footer.php'; ?>
</body>

</html>
