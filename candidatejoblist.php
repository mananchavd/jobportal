<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="author" content="Jobboard">
		<title>Job List</title>
		<?php include 'include/alllink.php'; ?>
	</head>
	<body>
		<?php include 'include/header.php'; ?>
		<div class="page-header" style="background: url(assets/img/banner1.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-wrapper">
							<h2 class="product-title">Job List</h2>
							<ol class="breadcrumb">
								<li><a href="#"><i class="ti-home"></i> Home</a></li>
								<li class="current">Job List</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="content">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-12">
						<div class="right-sideabr">
							<div class="inner-box">
								<h3><u>Sort Job</u></h3><br>
								<form class="" action="" method="get">
									<div class="form-group">
										<label>Sort By</label>
										<label class="styled-select" >
											<select name="location" id="" class="form-control dropdown-product selectpicker">
												<option>Select Option</option>
												<option>Start date</option>
												<option>Post date</option>
												<option>Application Deadline</option>
											</select>
										</label>
									</div>
									<h3><u>Job Search</u></h3><br>
									<div class="form-group">
										<label>Catagories</label>
										<label class="styled-select" >
											<select name="location" id="" class="form-control dropdown-product selectpicker">
												<option>All Categories</option>
												<option>Finance</option>
												<option>IT & Engineering</option>
												<option>Education/Training</option>
												<option>Art/Design</option>
												<option>Sale/Markting</option>
												<option>Healthcare</option>
												<option>Science</option>
												<option>Food Services</option>
											</select>
										</label>
									</div>
									<div class="form-group">
										<label for="tags">Cities</label>
										<input id="tags" class="form-control" name="joblocation" size="50">
									</div>
									<div class="row text-center">
										<button class="btn btn-common log-btn" type="Search">Search</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="inner-box">
							<table id="example" class="display" style="width:100%">
								<thead>
									<tr>
										<th>Start Date</th>
										<th>Duration</th>
										<th>Salary</th>
										<th>Posted on</th>
										<th>Application Deadline</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include 'include/footer.php'; ?>
	</body>
</html>