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
                                <?php 
                                	include 'include/connection.php';
                                	$selectSql = $conn->query("SELECT * FROM `applicant` LEFT JOIN registermember on applicant.user_id=registermember.reid WHERE jid='".base64_decode($_GET['id'])."'");
                                	while($fetchData = $selectSql->fetch_object())
                                	{
                                		$cate = $conn->query("SELECT catname FROM categories WHERE catid='".$fetchData->categorie."'")->fetch_object();
                                ?>
                                <div class="manager-resumes-item">
                                    <div class="manager-content">
                                        <a href="//"><img class="resume-thumb" src="profilepic/<?php echo $fetchData->profilepic; ?>" alt=""></a>
                                        <div class="manager-info">
                                            <div class="manager-name">
                                                <h4><a href="//"><?php echo ucfirst($fetchData->fname)." ".ucfirst($fetchData->lname); ?></a></h4>
                                                <h5><?php echo $cate->catname; ?></h5>
                                            </div>
                                            <div class="manager-meta">
                                                <span class="location"><i class="ti-location-pin"></i> <?php echo $fetchData->hometown ?></span>
                                                <a href="cv/<?php echo $fetchData->cv; ?>" download style="font-weight: bold;font-size: 15px;margin-top: 5px;"><i class="ti-download"></i> &nbsp;Download CV</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="update-date">
                                        <p class="status">
                                            <strong>Updated on:</strong>&nbsp;  <?php echo date("M d, Y",strtotime($fetchData->date)); ?>
                                        </p>
                                        <div class="action-btn">
                                            <a class="btn btn-xs btn-danger" href="changestatus.php?st=<?php echo base64_encode('highered'); ?>&aid=<?php echo base64_encode($fetchData->id); ?>" style="background: #5cb85c !important;">Highered</a>
                                            <a class="btn btn-xs btn-danger" style="background: #f0ad4e !important;" href="changestatus.php?st=<?php echo base64_encode('shortlisted'); ?>&aid=<?php echo base64_encode($fetchData->id); ?>">Shortlisted</a>
                                            <a class="btn btn-xs btn-danger" href="changestatus.php?st=<?php echo base64_encode('rejected'); ?>&aid=<?php echo base64_encode($fetchData->id); ?>">Rejected</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<?php include 'include/footer.php'; ?>
	</body>
</html>
