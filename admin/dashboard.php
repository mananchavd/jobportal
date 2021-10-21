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
            <div class="row">
                <!-- left menu starts -->
                <?php include 'include/leftmenu.php'; ?>
                <!--/span-->
                <!-- left menu ends -->
                <div id="content" class="col-lg-10 col-sm-10">
                    <!-- content starts -->
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                    <?php
                    include 'include/connection.php';
                            $re=$conn->query("SELECT count(reid) as st FROM `registermember` where role='candidate'")->fetch_object();
                    $re1=$conn->query("SELECT count(reid) as cmp FROM `registermember` where role='company'")->fetch_object();
                    $re2=$conn->query("SELECT count(jobid) as jid FROM `jobpost`")->fetch_object();
                    ?>
                    <div class=" row">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a data-toggle="tooltip" title="<?php   echo $re->st; ?>" class="well top-block" href="//">
                                <i class="glyphicon glyphicon-user blue"></i>
                                <div>Total Student</div>
                                <div><?php  echo $re->st; ?></div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a data-toggle="tooltip" title="<?php   echo $re1->cmp; ?>" class="well top-block" href="//">
                                <i class="glyphicon glyphicon-list-alt blue"></i>
                                <div>Total Company</div>
                                <div><?php  echo $re1->cmp; ?></div>
                            </a>
                        </div>
                        
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a data-toggle="tooltip" title="<?php   echo $re2->jid; ?>" class="well top-block" href="//">
                                <i class="glyphicon glyphicon-list-alt blue"></i>
                                <div>Total Job Post</div>
                                <div><?php  echo $re2->jid; ?></div>
                            </a>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="box col-md-6">
                            <div class="box-inner">
                                <div class="box-header well" data-original-title="">
                                    <h2><i class="glyphicon glyphicon-file"></i> Registred Student</h2>
                                    <div class="box-icon">
                                        
                                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <table class="table table-striped table-bordered responsive">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Email ID</th>
                                                <th>Mobile Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = $conn->query("SELECT * FROM registermember WHERE role='candidate' order by reid desc limit 3");
                                                while($res = $sql->fetch_object())
                                                {
                                            ?>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo HOME_URL; ?>../profilepic/<?php echo $res->profilepic; ?>" width="70" height="70" alt="STUDENT IMAGE">
                                                </td>
                                                <td>
                                                    <?php echo "<strong>".ucfirst($res->fname)." ".ucfirst($res->lname)."</strong>"; ?>
                                                </td>
                                                <td><?php echo $res->mobile; ?></td>
                                                <td><?php echo $res->email ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <div>
                                        <a href="<?php echo HOME_URL; ?>candidatedetails.php">
                                            <button class="btn btn-info">View More</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box col-md-6">
                            <div class="box-inner">
                                <div class="box-header well" data-original-title="">
                                    <h2><i class="glyphicon glyphicon-file"></i> Registred Company</h2>
                                    <div class="box-icon">
                                        
                                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <table class="table table-striped table-bordered responsive">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Email ID</th>
                                                <th>Mobile Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = $conn->query("SELECT * FROM registermember WHERE role='company'  order by reid desc limit 3");
                                                while($res = $sql->fetch_object())
                                                {
                                            ?>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo HOME_URL; ?>../profilepic/<?php echo $res->campanylogo; ?>" width="70" height="70" alt="STUDENT IMAGE">
                                                </td>
                                                <td>
                                                    <?php echo ucfirst($res->companyname); ?>
                                                </td>
                                                <td><?php echo $res->mobile; ?></td>
                                                <td><?php echo $res->email ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <a href="<?php echo HOME_URL; ?>companydetails.php">
                                        <button class="btn btn-info">View More</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="box col-md-12">
                            <div class="box-inner">
                                <div class="box-header well" data-original-title="">
                                    <h2><i class="glyphicon glyphicon-file"></i> Job Post</h2>
                                    <div class="box-icon">
                                        
                                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <table class="table table-striped table-bordered responsive">
                                        <thead>
                                            <tr>
                                                <th>Company Logo</th>
                                                <th>Company Name</th>
                                                <th>Job Title</th>
                                                <th>City</th>
                                                <th>Start Date</th>
                                                <th>Application Deadline</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        <?php 
                                            $sql2 = $conn->query("SELECT * FROM jobpost LEFT join registermember on jobpost.comp_id=registermember.reid order by jobid desc limit 5");
                                            while($result = $sql2->fetch_object())
                                            {
                                        ?>
                                            <tr>
                                                <td>
                                                    <a href="<?php echo HOME_URL; ?>jobdetails.php?id=<?php echo base64_encode($result->jobid); ?>">
                                                        <img src="<?php echo HOME_URL; ?>../profilepic/<?php echo $result->campanylogo; ?>" width="70" height="70" alt="STUDENT IMAGE">
                                                    </a>
                                                </td>
                                                <td><?php echo $result->companyname ?></td>
                                                <td><?php echo $result->jobtitle ?></td>
                                                <td><?php echo rtrim($result->location,', '); ?></td>
                                                <td><?php echo date('M d, Y',strtotime($result->sdate)); ?></td>
                                                <td><?php echo date('M d, Y',strtotime($result->edate)); ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <a href="<?php echo HOME_URL; ?>jobpostdetails.php">
                                        <button class="btn btn-info">View More</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!-- content ends -->
                </div><!--/#content.col-md-0-->
            </div><!--/fluid-row-->
            <hr>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h3>Settings</h3>
                        </div>
                        <div class="modal-body">
                            <p>Here settings can be configured...</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                            <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'include/footer.php'; ?>
        </div><!--/.fluid-container-->
        <?php include 'include/footerscript.php'; ?>
    </body>
</html>