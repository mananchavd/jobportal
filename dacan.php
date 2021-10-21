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

        <?php include 'include/alllink.php'; ?>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                                    <h3>Categories</h3>
                                    <ul class="cat-list">
                                        <li>
                                            <a href="#">Finance <span class="num-posts">4,287 Jobs</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Techonologies <span class="num-posts">4,256 Jobs</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Art/Design<span class="num-posts">3,245 Jobs</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Science <span class="num-posts">4,256 Jobs</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Education Training <span class="num-posts">4,560 Jobs</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Logistics <span class="num-posts">3,256 Jobs</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Food Services <span class="num-posts">1,256 Jobs</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="inner-box">
                                    <h3>Job Status</h3>
                                    <ul class="cat-list">
                                        <li>
                                            <a href="#">Full Time <span class="num-posts">12,256 Jobs</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Part Time <span class="num-posts">6,510 Jobs</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Freelancer <span class="num-posts">1,171 Jobs</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Internship <span class="num-posts">876 Jobs</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="inner-box">
                                    <h3>Locations</h3>
                                    <ul class="cat-list">
                                        <li>
                                            <a href="#">New York <span class="num-posts">4,197 Jobs</span></a>
                                        </li>
                                        <li>
                                            <a href="#">San Francisco <span class="num-posts">2,256 Jobs</span></a>
                                        </li>
                                        <li>
                                            <a href="#">San Diego <span class="num-posts">3,278 Jobs</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Los Angeles <span class="num-posts">5,294 Jobs</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Chicago <span class="num-posts">1,746 Jobs</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Houston <span class="num-posts">871 Jobs</span></a>
                                        </li>
                                        <li>
                                            <a href="#">New Orleans <span class="num-posts">2,163 Jobs</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-9 col-sm-8">
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </section>



        <?php include 'include/footer.php'; ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript" ></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js" type="text/javascript"></script>

        <script  type="text/javascript" >
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>


    </body>
</html>
