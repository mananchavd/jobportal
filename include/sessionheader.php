<?php include 'include/include.php';

    error_reporting(0);
   include 'include/auth.php';
   include 'include/allid.php';
    $valqw=$_SESSION['role'];
?>
<div class="header">
    <div class="logo-menu">
        <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="//"><img src="assets/img/logo/logo.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
    
                    <?php
                    //checking wheather candidate or comapany.
                     if ($valqw=="candidate"){ 
                    ?>
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo HOME_URL; ?>candidatedashboard.php">Dashboard</a></li>
                        <li><a href="<?php echo HOME_URL; ?>canjoblist.php">Serach Jobs</a></li>
                    </ul>
                    <?php }else if($valqw=="company"){ ?>
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo HOME_URL; ?>companydashboard.php">Dashboard</a></li>
                                <li><a href="<?php echo HOME_URL; ?>postjob.php">Post Job</a></li>
                            </ul>
                    <?php } ?>
                    <ul class="nav navbar-nav navbar-right float-right">
                        <li class="left"><a href="//"><i class="ti-user"></i> Welcome: <?php echo $fname.' '.$lname ?></a>
                            <ul class="dropdown">
                                <li>
                                    <?php if ($valqw=="candidate"){ ?>
                                    <a href="<?php echo HOME_URL ?>candidateprofile.php" style="color:#fff !important;font-weight:bold">
                                        Edit Profile
                                    </a>
                                    <?php }elseif($valqw=="company"){ ?>
                                    <a href="<?php echo HOME_URL ?>companyprofile.php" style="color:#fff !important;font-weight:bold">
                                        Edit Profile
                                    </a>
                                <?php } ?>
                                </li>
                            </ul>
                        </li>
                        <li class="right"><a href="<?php echo HOME_URL; ?>logout.php"><i class="ti-lock"></i> Logout</a></li>
                    </ul>
                </div>
            </div>

            <ul class="wpb-mobile-menu">
              <li><a href="<?php echo HOME_URL; ?>index.php">Home</a></li>
                    <li><a href="<?php echo HOME_URL; ?>about.php">About</a></li>
                    <li><a href="<?php echo HOME_URL; ?>canjoblist.php">Serach Jobs</a></li>
                    <li><a href="<?php echo HOME_URL; ?>contactus.php">Contact</a></li>

                    <li class="left"><a href="post-job.html"><i class="ti-pencil-alt"></i> Registration</a>
                        <ul class="dropdown">
                            <li>
                                <a href="<?php echo HOME_URL ?>candidateregi.php"" style="color:#666 !important;font-weight:bold">
                                    Candidate Registration
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo HOME_URL ?>companyregi.php" style="color:#666 !important;font-weight:bold">
                                    Company Registration
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="right"><a href="my-account.html"><i class="ti-lock"></i> Log In</a></li>
            </ul>

        </nav>
    </div>
</div>
