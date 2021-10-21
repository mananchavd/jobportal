<?php
require_once('include/auth.php');
define('HOME_URL', 'http://localhost/jobmate/admin/');
$id=$_SESSION['aid'];
include 'include/connection.php';
        $sql="select * from adminlogin where id=$id";
        $co=$conn->query($sql);
        $re=$co->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Jobmate Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include 'include/alllink.php'; ?>
    </head>
    <body>
        <!-- topbar starts -->
        <?php include 'include/topbar.php'; ?>
        <!-- topbar ends -->
        <div class="ch-container">
            <!-- left menu starts -->
                <?php include 'include/leftmenu.php'; ?>
                <!-- left menu ends -->
            <div id="content" class="col-lg-10 col-sm-10">
                <!-- content starts -->
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="//">Home</a>
                        </li>
                        <li>
                            <a href="//">Jobpost Details</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="box col-md-12">
                        <div class="box-inner">
                            <div class="box-header well" data-original-title="">
                                <h2><i class="glyphicon glyphicon-user"></i> Jobpost Details</h2>
                                <div class="box-icon">
                                    <a href="#" class="btn btn-minimize btn-round btn-default">
                                        <i class="glyphicon glyphicon-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="box-content">
                                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                    <thead>
                                        <tr>
                                            <th>Company Logo</th>
                                            <th>Company Name</th>
                                            <th>Job Title</th>
                                            <th>City</th>
                                            <th>Start Date</th>
                                            <th>Application Deadline</th>
                                            <th>Applicants</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sql = $conn->query("SELECT *,count(applicant.jid) AS `cnt` FROM jobpost LEFT join registermember on jobpost.comp_id=registermember.reid LEFT JOIN applicant on jobpost.jobid=applicant.jid GROUP BY jobpost.jobid order by jobid DESC ");
                                            while($res = $sql->fetch_object())
                                            {
                                        ?>
                                        <tr>
                                            <td>
                                                <img src="<?php echo HOME_URL; ?>../profilepic/<?php echo $res->campanylogo; ?>" alt="" width="80" height="80">
                                            </td>
                                            <td class="center">
                                                <?php echo ucwords($res->companyname); ?>
                                            </td>
                                            <td class="center">
                                                <?php echo ucfirst($res->jobtitle); ?>
                                            </td>
                                            <td class="center">
                                                <?php echo rtrim($res->location,', '); ?>
                                            </td>
                                            <td class="center">
                                                <?php echo date('M d, Y',strtotime($res->sdate)); ?>
                                            </td>
                                            <td class="center">
                                                <?php echo date('M d, Y',strtotime($res->edate)); ?>
                                            </td>
                                            <td class="center">
                                                <a href="appliedcandidate.php?id=<?php echo base64_encode($res->jobid); ?>"><span class="label label-info"><i class="glyphicon glyphicon-user"></i>
                                                <?php echo $res->cnt; ?>
                                                </span></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <!--/row-->
            </div>
            <!-- Content End -->
            <?php include 'include/footer.php'; ?>
        </div>
        <!--/.fluid-container-->
        <?php include 'include/footerscript.php'; ?>
    </body>
</html>
