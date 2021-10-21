<?php include 'include/outerauth.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="author" content="Jobboard">
        <title>Candidate Registration</title>
        <?php include 'include/alllink.php'; ?>
    </head>
    <body>
        <?php include 'include/header.php'; ?>
        <section id="slider">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="assets/img/slider/slide1.jpg">
                            <img src="assets/img/dummy.png" alt="laptopmockup_sliderdy" data-lazyload="assets/img/slider/slide1.jpg">
                            <div class="tp-caption mediumHeading h2 lft tp-resizeme rs-parallaxlevel-0 start" data-x="center" data-y="center" data-voffset="-50" data-speed="1200" data-start="1000" data-easing="Back.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="400" style="z-index: 11;">
                                <h2 style="min-height: 0px; min-width: 0px; line-height: 30px; border-width: 0px; margin: 0px 0px 20px; padding: 0px; letter-spacing: 2px; font-weight: 900; font-size: 52px; color: #fff; text-transform: uppercase;">Looking For A Job?</h2>
                            </div>
                            <div class="tp-caption detailText p lfl tp-resizeme start" data-x="center" data-y="center" data-voffset="10" data-speed="1200" data-start="1500" data-easing="easeInOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="text-align: center; z-index: 8; color: #fff;">
                                <p style="font-size: 15px;">Reach new heights with jobmate.
                                <br style="font-size: 12px;">Every Job has it's own priorities.</p>
                            </div>
                            <div class="tp-caption lfb tp-resizeme rs-parallaxlevel-0 start" data-x="center" data-y="center" data-voffset="90" data-speed="1200" data-start="2000" data-easing="easeInOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 11;">
                                <a href="<?php echo HOME_URL; ?>canjoblist.php" class="btn btn-common btn-lg">Search Now</a>
                            </div>
                        </li>
                        <li data-transition="slideup" data-slotamount="7" data-masterspeed="800" data-thumb="assets/img/slider/slide2.jpg">
                            <img src="assets/img/dummy.png" alt="laptopmockup_sliderdy" data-lazyload="assets/img/slider/slide2.jpg">
                            <div class="caption title sfb tp-caption start" data-x="center" data-y="center" data-voffset="-50" data-speed="400" data-start="800" data-easing="easeOutExpo">
                                <h2 style="min-height: 0px; min-width: 0px; line-height: 94px; border-width: 0px; margin: 0px 0px 20px; padding: 0px; letter-spacing: 2px; font-size: 52px; font-weight: 900; color: #fff; text-transform: uppercase;">12000+ Jobs Waiting</h2>
                            </div>
                            <div class="caption text p sfb tp-caption start" data-x="center" data-y="center" data-voffset="10" data-speed="400" data-start="1200" data-easing="easeOutExpo" style="z-index: 8; color: #fff; text-align: center;">
                                <p style="font-size: 15px;">One platform for all jobs.
                            </div>
                            <div class="caption sfb tp-caption start" data-x="center" data-y="center" data-voffset="90" data-speed="400" data-start="1600" data-easing="easeOutExpo">
                                <a href="<?php echo HOME_URL; ?>canjoblist.php" class="btn btn-border btn-lg">Get Started</a>
                            </div>
                        </li>
                        <li data-transition="zoomin" data-slotamount="7" data-masterspeed="1500" data-thumb="assets/img/slider/slide3.jpg">
                            <img src="assets/img/dummy.png" alt="laptopmockup_sliderdy" data-lazyload="assets/img/slider/slide3.jpg">
                            <div class="tp-caption mediumHeading h2 lfl tp-resizeme rs-parallaxlevel-0 start" data-x="35" data-y="center" data-voffset="-50" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-speed="1200" data-start="1550" data-easing="Back.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="400" data-endeasing="Back.easeIn" style="z-index: 11;">
                                <h2 style="min-height: 0px; min-width: 0px; line-height: 94px; border-width: 0px; margin: 0px 0px 20px; padding: 0px; letter-spacing: 2px; font-size: 52px; font-weight: 900; color: #fff; text-transform: uppercase;">Never Miss the Opprtunity</h2>
                            </div>
                            <div class="tp-caption detailText p lfl tp-resizeme start" data-x="35" data-y="center" data-voffset="10" data-speed="1200" data-start="2100" data-easing="easeInOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 8; color: #fff;">
                            </div>
                            <div class="tp-caption lfb tp-resizeme rs-parallaxlevel-0 start" data-x="35" data-y="center" data-voffset="90" data-speed="1200" data-start="2700" data-easing="easeInOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 11;">
                                <a href="<?php echo HOME_URL; ?>companyregi.php" class="btn btn-common btn-lg">Comapny Registration</a>
                                <a href="<?php echo HOME_URL; ?>candidateregi.php" class="btn btn-border btn-lg">Candidate Registration</a>
                            </div>
                            <div class="tp-caption lfb start" data-y="50" data-x="750" style="z-index: 9; left: 839.5px; top: 125px; visibility: visible; opacity: 0; transform: translate3d(0px, 763px, 0px);" data-captionhidden="on" data-endeasing="Power4.easeIn" data-endspeed="1000" data-start="1200" data-speed="800" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"><img src="assets/img/dummy.png" alt="" data-lazyload="assets/img/slider/3dlayer_3.png">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="find-job section">
            <div class="container">
                <h2 class="section-title">Recent Jobs List</h2>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        include 'include/connection.php';
                        $sql=$conn->query("select * from jobpost Left join registermember on registermember.reid=jobpost.comp_id left join categories on categories.catid=registermember.categorie order by jobid desc limit 5");
                        while($kd=$sql->fetch_object())
                        {
                        ?>
                        <div class="job-list col-md-12">
                            <div class="thumb">
                                <a href="<?php echo HOME_URL; ?>jobdetails.php?id=<?php echo base64_encode($kd->jobid); ?>">
                                    <img class="thumbnail" src="profilepic/<?php echo $kd->campanylogo ?>" alt="" style="width:100px;height: 100px">
                                </a>
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
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="category section">
            <div class="container">
                <h2 class="section-title">Job Categories</h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                            <a href="canjoblist.php">
                                <div class="icon">
                                    <i class="ti-home"></i>
                                </div>
                                <h3>Finance</h3>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                            <a href="canjoblist.php">
                                <div class="icon">
                                    <i class="ti-world"></i>
                                </div>
                                <h3>Sale/Markting</h3>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                            <a href="canjoblist.php">
                                <div class="icon">
                                    <i class="ti-book"></i>
                                </div>
                                <h3>Education/Training</h3>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                            <a href="canjoblist.php">
                                <div class="icon">
                                    <i class="ti-desktop"></i>
                                </div>
                                <h3>Technologies</h3>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                            <a href="canjoblist.php">
                                <div class="icon">
                                    <i class="ti-brush"></i>
                                </div>
                                <h3>Art/Design</h3>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                            <a href="canjoblist.php">
                                <div class="icon">
                                    <i class="ti-heart"></i>
                                </div>
                                <h3>Healthcare</h3>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                            <a href="canjoblist.php">
                                <div class="icon">
                                    <i class="ti-filter"></i>
                                </div>
                                <h3>Science</h3>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                            <a href="canjoblist.php">
                                <div class="icon">
                                    <i class="ti-cup"></i>
                                </div>
                                <h3>Food Services</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section purchase" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="section-content text-center">
                        <h1 class="title-text">
                        Looking for a Job
                        </h1>
                        <p>Join thousand of employers and earn what you deserve!</p>
                        <a href="canjoblist.php" class="btn btn-common">Get Started Now</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="clients section">
            <div class="container">
                <h2 class="section-title">
                Clients & Partners
                </h2>
                <div class="row">
                    <div id="clients-scroller">
                        <div class="items">
                            <img src="assets/img/clients/img1.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/img/clients/img2.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/img/clients/img3.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/img/clients/img4.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/img/clients/img5.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/img/clients/img6.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/img/clients/img6.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/img/clients/img6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="infobox section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="info-text">
                            <h2>Don't Want To Miss a Thing?</h2>
                            <p>Search the job and get the enroll for interview...</p>
                        </div>
                        <a href="canjoblist.php" class="btn btn-border">Search Jobs</a>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'include/footer.php'; ?>
    </body>
</html>