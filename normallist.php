<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="author" content="Jobboard">
		<title>Post Job</title>
		<?php include 'include/alllink.php'; ?>
	</head>
	<body>
		<?php include 'include/header.php'; ?>
		<div class="page-header" style="background: url(assets/img/banner1.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-wrapper">
							<h2 class="product-title">Post Job</h2>
							<ol class="breadcrumb">
								<li><a href="#"><i class="ti-home"></i> Home</a></li>
								<li class="current">Post Job</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="job-alerts-item candidates">
                                <h3 class="alerts-title">Applied Candidate List</h3>
                                <div class="manager-resumes-item">
                                    <div class="manager-content">
                                        <a href="//"><img class="resume-thumb" src="assets/img/jobs/avatar.jpg" alt=""></a>
                                        <div class="manager-info">
                                            <div class="manager-name">
                                                <h4><a href="#">John Doe</a></h4>
                                                <h5>Front-end developer</h5>
                                            </div>
                                            <div class="manager-meta">
                                                <span class="location"><i class="ti-location-pin"></i> Cupertino, CA, USA</span>
                                                <span class="rate"><i class="ti-time"></i> $55 per hour</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="update-date">
                                        <p class="status">
                                            <strong>Updated on:</strong> Fab 22, 2017
                                        </p>
                                        <div class="action-btn">
                                            <a class="btn btn-xs btn-gray" href="#">Highered</a>
                                            <a class="btn btn-xs btn-gray" href="#">Shortlisted</a>
                                            <a class="btn btn-xs btn-danger" href="#">Rejected</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

		<?php include 'include/footer.php'; ?>
	</body>
</html>
