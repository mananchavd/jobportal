<?php 
    include 'include/auth.php';
    if ($_SESSION['role'] == 'candidate' ) 
        header("Location: candidatedashboard.php");

 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="author" content="Jobboard">
		<title>Dashboard</title>
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
							<h2 class="product-title">Dashboard</h2>
							<ol class="breadcrumb">
								<li><a href="#"><i class="ti-home"></i> Home</a></li>
								<li class="current">Dashboard</li>
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
                                    <img class="thumbnail" src="profilepic/<?php echo $wf->campanylogo ?>" alt="" style="width:200px;height: 150px">
                                    <ul class="cat-list">
                                        <li>
                                            <a href="#"><i class="fa fa-user"></i> <b><?php echo $wf->fname.' '.$wf->lname; ?></b></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-id-card"></i> <?php echo $wf->designation ?></a>
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
                                    <th style="text-align:center">Job Title</th>
                                    <th style="text-align:center">Post Date</th>
                                    <th style="text-align:center">Application Deadline</th>
                                    <th style="text-align:center">Applicants</th>
                                    <th style="text-align:center">Action</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include 'include/connection.php';
                                    $sql="select * from jobpost where comp_id='".$_SESSION["userid"]."'";
                                    $ss=$conn->query($sql);
                                    while($w=$ss->fetch_object())
                                    {
                                        $cnt = $conn->query("SELECT COUNT(`id`) AS c FROM applicant WHERE jid='".$w->jobid."'")->fetch_object();
                                 ?>
                                <tr>
                                    <td><?php echo $w->jobtitle; ?></td>
                                    <td><?php echo $w->poston; ?></td>
                                    <td><?php echo $w->edate; ?></td>
                                    <td style="font-weight: bold;font-size: 18px;" align="center">
                                        <a href="candidatedetails.php?id=<?php echo base64_encode($w->jobid); ?>"><?php echo $cnt->c; ?></a>
                                    </td>
                                    <td><a href="postjob.php?eid=<?php echo $w->jobid; ?>" class="btn btn-primary btn-xs">Edit</a>
                                   	<a href="function.php?did=<?php echo $w->jobid; ?>" style="margin-right:20px;" class="btn btn-primary btn-xs">Delete</a></td>

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
