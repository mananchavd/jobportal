<?php 
session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] == 'company') {
	header('Location: companydashboard.php');
}
include 'include/connection.php';
$id = base64_decode($_GET['id']);
$selectSql = $conn->query("SELECT * from jobpost Left join registermember on registermember.reid=jobpost.comp_id where jobid='".$id."'");
$fetchData = $selectSql->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="author" content="Jobboard">
		<title>Job Details</title>
		<?php include 'include/alllink.php'; ?>
	</head>
	<body>
		<?php
			if(isset($_SESSION['role']))
		 		include 'include/sessionheader.php'; 
		 	else
		 		include 'include/header.php';
		?>
		<div class="page-header" style="background: url(assets/img/banner1.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-wrapper">
							<h2 class="product-title">Job Details</h2>
							<ol class="breadcrumb">
								<li><a href="#"><i class="ti-home"></i> Home</a></li>
								<li class="current">Job Details</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="job-detail section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="header-detail">
							<div class="header-content pull-left">
								<h3><a href="#"><?php echo $fetchData->jobtitle; ?></a></h3>
								<p><span>Date Posted: &nbsp;<?php echo date('M d, Y',strtotime($fetchData->poston)); ?></span></p>
								<p>Monthly Salary: <strong class="price">&nbsp;<i class="fa fa-rupee"></i><?php echo $fetchData->salary; ?></strong></p>
							</div>
							<div class="detail-company pull-right text-right">
								<div class="img-thum">
									<img class="img-responsive" src="profilepic/<?php echo $fetchData->campanylogo; ?>" alt="">
								</div>
								<div class="name">
									<h4><?php echo $fetchData->companyname; ?></h4>
									<h5><?php echo trim($fetchData->joblocation,", "); ?></h5>
									<p><?php echo $fetchData->opening  ?> Current jobs openings</p>
								</div>
							</div>
							<div class="clearfix">
								<div class="meta">
									<span><a class="btn btn-border btn-sm" href="//"><i class="ti-email"></i> <?php echo $fetchData->email; ?></a></span>
									<span><a class="btn btn-border btn-sm" href="//"><i class="fa fa-globe"></i> <?php echo $fetchData->website; ?></a></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="content-area">
							<div class="clearfix">
								<div class="box">
									<h4>Job Description</h4>
									<p><?php echo $fetchData->jobdec; ?></p>
									<h4>Qualification</h4>
									<p><?php echo $fetchData->eligibility; ?></p>
									<h4>Requirements</h4>
									<p><?php echo $fetchData->skill; ?></p>
									<a href="
									<?php 
										if(isset($_SESSION['role'])) 
											echo "function.php?id=".$_GET['id']."&st=".base64_encode('apply');
										else
											echo "login.php?id=".$_GET['id'];
									?>" class="btn btn-common">Apply for this Job Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<aside>
							<div class="sidebar">
								<div class="box">
									<h2 class="small-title">Job Details</h2>
									<ul class="detail-list">
										<li>
											<a href="#">Job Id</a>
											<span class="type-posts">Jb1246789</span>
										</li>
										<li>
											<a href="#">Location</a>
											<span class="type-posts">New York, NY</span>
										</li>
										<li>
											<a href="#">Company</a>
											<span class="type-posts">LemonKids LLC</span>
										</li>
										<li>
											<a href="#">Type</a>
											<span class="type-posts">Private</span>
										</li>
										<li>
											<a href="#">Employment Status</a>
											<span class="type-posts">Permanent</span>
										</li>
										<li>
											<a href="#">Employment Type</a>
											<span class="type-posts">Manager</span>
										</li>
										<li>
											<a href="#">Positions</a>
											<span class="type-posts">5</span>
										</li>
										<li>
											<a href="#">Career Level</a>
											<span class="type-posts">Experience</span>
										</li>
										<li>
											<a href="#">Experience</a>
											<span class="type-posts">3 Years</span>
										</li>
										<li>
											<a href="#">Gender</a>
											<span class="type-posts">Male</span>
										</li>
										<li>
											<a href="#">Nationality</a>
											<span class="type-posts">United States</span>
										</li>
										<li>
											<a href="#">Degree</a>
											<span class="type-posts">Masters</span>
										</li>
									</ul>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section>
		<?php include 'include/footer.php'; ?>
	</body>
</html>