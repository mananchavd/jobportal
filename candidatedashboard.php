<?php
	include 'include/auth.php';
	include 'include/allid.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="author" content="Jobboard">
		<title>Candidate Dashboard</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

        <?php include 'include/alllink.php'; ?>

	</head>
	<body>
		<?php include 'include/sessionheader.php'; ?>
		<div class="page-header" style="background: url(assets/img/banner1.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-wrapper">
							<h2 class="product-title">Candidate Dashboard</h2>
							<ol class="breadcrumb">
								<li><a href="#"><i class="ti-user"></i> Applied Portal</a></li>
								<li class="current"><?php echo $fname.' '.$lname; ?></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>

        <section class="job-browse section">
            <div class="container">
                <div class="row">
                	<div class="col-md-3 col-sm-4">
                        <aside>
                            <div class="sidebar">
                                <div class="inner-box">
                                    <?php
                                    include 'include/connection.php';
                                    $sqlf="select * from registermember where reid='".$_SESSION["userid"]."'";
                                    $ssf=$conn->query($sqlf);
                                    $wf=$ssf->fetch_object();

                                 ?>
                                    <img class="thumbnail" src="profilepic/<?php echo $wf->profilepic ?>" alt="" style="width:200px;height: 150px">
                                    <ul class="cat-list">
                                        <li>
                                            <a href="#"><i class="fa fa-user"></i> <b><?php echo ucfirst($wf->fname).' '.ucfirst($wf->lname); ?></b></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope"></i> <?php echo $wf->email ?></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-phone-square"></i> <?php echo $wf->mobile ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-9 col-sm-8">
                      <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="text-align:center">Company Name</th>
                                    <th style="text-align:center">Job Title</th>
                                    <th style="text-align:center">Applied Date</th>
                                    <th style="text-align:center">Application Dedline</th>
                                    <th style="text-align:center;position:relative">Status</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = $conn->query("SELECT * FROM `applicant` LEFT JOIN jobpost on jobpost.jobid = applicant.jid LEFT JOIN registermember on registermember.reid=jobpost.comp_id WHERE applicant.user_id='".$_SESSION['userid']."'");
                                    while ($fetchD = $sql->fetch_object()) 
                                    {
                                ?>
                                <tr>
                                    <td><?php echo $fetchD->companyname; ?></td>
                                    <td><?php echo $fetchD->jobtitle; ?></td>
                                    <td><?php echo date('d-m-Y',strtotime($fetchD->date)); ?></td>
                                    <td><?php echo date('d-m-Y',strtotime($fetchD->edate)); ?></td>
                                    <td><?php echo ucfirst($fetchD->app_status); ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>

        <?php include 'include/footer.php'; ?>
 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>

	</body>
</html>
