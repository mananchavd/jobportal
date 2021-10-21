<?php
include 'include/allid.php';
include 'include/connection.php';

$qry = "SELECT * from jobpost Left join registermember on registermember.reid=jobpost.comp_id left join categories on categories.catid=registermember.categorie WHERE 1=1";
if (isset($_GET['category']) && !empty($_GET['category']))
$qry .= " AND jobpost.categorie='".$_GET['category']."'";

if (isset($_GET['city']) && !empty($_GET['city']))
$qry .= " AND FIND_IN_SET('".$_GET['city']."',jobpost.location)";
$qry .=" order by jobid desc limit 5";
$sql=$conn->query($qry);
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
        <?php include 'include/alllink.php'; ?>
    </head>
    <body>
        <?php
        if (isset($_SESSION['role']))
        include 'include/sessionheader.php';
        else
        include 'include/header.php';
        ?>
        <div class="page-header" style="background: url(assets/img/banner1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-wrapper">
                            <h2 class="product-title">Candidate Dashboard</h2>
                            <ol class="breadcrumb">
                                <li><a href=""><i class="ti-user"></i> Applied Portal</a></li>
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
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="right-sideabr">
                            <form action="canjoblist.php" method="GET">
                                <div class="inner-box">
                                    <h3><u>Job Search</u></h3><br>
                                    
                                    <div class="form-group">
                                        <label for="tags">City</label>
                                        <input id="hometo" class="form-control" name="city" size="50">
                                    </div>
                                    <div class="row text-center">
                                        <button class="btn btn-common log-btn" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <?php
                        if(mysqli_num_rows($sql))
                        {
                        while($kd=$sql->fetch_object())
                        {
                        ?>
                        <div class="job-list col-md-12">
                            <div class="thumb">
                                <a href="<?php echo HOME_URL; ?>jobdetails.php?id=<?php echo base64_encode($kd->jobid); ?>"><img class="thumbnail" src="profilepic/<?php echo $kd->campanylogo ?>" alt="" style="width:100px;height: 100px"></a>
                            </div>
                            <div class="job-list-content">
                                <h4>
                                    <a href="<?php echo HOME_URL; ?>jobdetails.php?id=<?php echo base64_encode($kd->jobid); ?>"><?php echo $kd->jobtitle; ?>
                                    </a>
                                    <?php if ($kd->parttime=="yes") {
                                    ?>
                                    <span class="part-time">Part-Time</span>
                                    <?php }else{ ?>
                                    <span class="full-time">Full-Time</span>
                                    <?php } ?>
                                </h4>
                                <p><?php echo $kd->jobdec; ?></p>
                                <div class="job-tag">
                                    <div class="pull-left">
                                        <div class="meta-tag">
                                            <span>
                                                <a href="//">
                                                    <i class="ti-brush"></i>
                                                    <?php echo $kd->catname; ?>
                                                </a>
                                            </span>
                                            <span>
                                                <i class="ti-location-pin"></i>
                                                <?php echo $kd->location; ?>
                                            </span>
                                            <span>
                                                <i class="fa fa-rupee"></i>
                                                <?php echo $kd->salary; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo HOME_URL; ?>jobdetails.php?id=<?php echo base64_encode($kd->jobid); ?>" class="btn btn-common btn-rm">Apply Job</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } }else { echo "<h2 align='center' style='margin-top:25px;'>No Post Found.</h2>"; }?>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'include/footer.php'; ?>
    </body>
</html>