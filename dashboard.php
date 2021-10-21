<?php
define ('HOME_URL', 'http://www.internshipland.com/admin/');
session_start();
require_once('auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("include/head.php"); ?>
<style>
strong
{
margin-left:15px;
}
</style>
<style type="text/css">

.button
{
padding: 5px 15px;
text-decoration: none;
background: #333;
color: #F3F3F3;
font-size: 13PX;
border-radius: 2PX;
margin: 0 5PX;
display: block;
float: right;

}
</style>
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
		<?php include("include/header.php"); ?>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
			<div class="row-fluid">
					
					<!-- left menu starts -->
					<div class="span2 main-menu-span">
						<?php include("include/sidebar.php"); ?>
					</div><!--/span-->
					<!-- left menu ends -->
				
				<div id="content" class="span10">
				<!-- content starts -->
				

						<div>
							<ul class="breadcrumb">
								<li>
									<a href="<?php echo HOME_URL?>index_1.php">Home</a> <span class="divider">/</span>
								</li>
								<li>
									<a href="<?php echo HOME_URL?>index_1.php">Dashboard</a>
								</li>
							</ul>
						</div>
						<!-- Members Count box -->
						<div class="sortable row-fluid">
						
						<?php
						include('include/config.php');
						include('include/opendb.php');
						$query = mysql_query("SELECT count( * ) FROM registered_members WHERE role = 'student'");
						$result = mysql_result($query, 0);						
						?>
							
									<a href="<?php echo HOME_URL ?>student.php" data-rel="tooltip" title="<?php echo $result ?> new members." class="well span3 top-block" href="#">
										<span class="icon32 icon-green icon-user"></span>
										<div>Total Registered Student</div>
										<div><?php echo $result ?></div>
										
									</a>
									
									
						<?php
						include('include/config.php');
						include('include/opendb.php');
						$query = mysql_query("SELECT count( * ) FROM registered_members WHERE role = 'employer' ");
						$result = mysql_result($query, 0);						
						?>
							
									<a href="<?php echo HOME_URL ?>employer.php" data-rel="tooltip" title="<?php echo $result ?> new members." class="well span3 top-block" href="#">
										<span class="icon32 icon-red icon-user"></span>
										<div>Total Registered Employer</div>
										<div><?php echo $result ?></div>										
									</a>
									
						<?php
						include('include/config.php');
						include('include/opendb.php');
						$query = mysql_query("SELECT count( * ) FROM postinternship");
						$result = mysql_result($query, 0);						
						?>
							
									<a href="<?php echo HOME_URL ?>postinternship.php" data-rel="tooltip" title="<?php echo $result ?> new members." class="well span3 top-block" href="#">
										<span class="icon32 icon-orange icon-star-on"></span>
										<div>Total Post Internship</div>
										<div><?php echo $result ?></div>										
									</a>
									
						<?php
						include('include/config.php');
						include('include/opendb.php');
						$query = mysql_query("SELECT count( * ) FROM contact");
						$result = mysql_result($query, 0);						
						?>
							
									<a href="<?php echo HOME_URL ?>contact.php" data-rel="tooltip" title="<?php echo $result ?> new members." class="well span3 top-block" href="#">
										<span class="icon32 icon-blue icon-envelope-closed"></span>
										<div>Message</div>
										<div><?php echo $result ?></div>										
									</a>
								
						</div>
						<!-- End of Members Count box -->
						
						<!-- Student and Employer code start -->
						<div class="row-fluid sortable ui-sortable">
							<div class="box span6">
								<div data-original-title="" class="box-header well">
									<h2><i class="icon icon-green icon-user"></i> Registered Student</h2>
									<div class="box-icon">
										<a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a>
										<a class="btn btn-close btn-round" href="#"><i class="icon-remove"></i></a>
									</div>
								</div>
								<!-- php code for student dispaly -->
								<?php
									include('include/config.php');
									include('include/opendb.php');
									$sql="SELECT * FROM registered_members where role = 'student' order by id DESC LIMIT 3";
									$result = mysql_query ($sql); //run the query
								?>
								<!-- end of code -->
								<div class="box-content">
									<div class="box-content">
									<?php   
										while ($row = mysql_fetch_assoc($result)) { 
									?> 
										<ul class="dashboard-list">
											<li>
											
													<a href="<?php echo HOME_URL ?>studentdetails.php?id=<?php echo $row['id']; ?>"><img src="http://www.internshipland.com/student/profile/<?php echo $row ['profilepic']; ?>" alt="Student Image" style="border: 1px solid;border-radius:5px; width: 70px;height: 70px;float: left;"></a>
													<strong>Name  :</strong> <a href="<?php echo HOME_URL ?>studentdetails.php?id=<?php echo $row['id']; ?>">  <?php echo $row ['fname']; ?>&nbsp;<?php echo $row ['lname']; ?>
												</a><br>
												<strong>City  :</strong>  <?php echo $row ['city']; ?><br>
												<strong>Email ID  :</strong>  <?php echo $row ['email']; ?><br>
												<strong>Mobile Number  :</strong> <span class="label label-success">  <?php echo $row ['mobile']; ?></span>                                  
											</li>								
										</ul>
										<?php								
										}?>	
									</div>
									<a href="<?php echo HOME_URL ?>student.php"><p style="float:right">Show More >>> </p></a>
								</div>
							</div><!--/span-->
									
							<div class="box span6">
								<div data-original-title="" class="box-header well">
									<h2><i class="icon icon-red icon-user"></i> Registered Employer</h2>
									<div class="box-icon">
										<a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a>
										<a class="btn btn-close btn-round" href="#"><i class="icon-remove"></i></a>
									</div>
								</div>
								<!-- php code for student dispaly -->
								<?php
									include('include/config.php');
									include('include/opendb.php');
									$sql="SELECT * FROM registered_members where role = 'employer' order by id DESC LIMIT 3";
									$result = mysql_query ($sql); //run the query
								?>
								<!-- end of code -->
								<div class="box-content">
									<div class="box-content">
									<?php   
										while ($row = mysql_fetch_assoc($result)) { 
									?> 
										<ul class="dashboard-list">
											<li>
												<a href="#">
													<a href="<?php echo HOME_URL ?>employerdetails.php?id=<?php echo $row['id']; ?>"> <img src="http://www.internshipland.com/employer/profile/<?php echo $row ['companylogo']; ?>" alt="Company Logo" style="border: 1px solid;border-radius:5px; width: 70px;height: 70px;float: left;"></a>
													<strong>Name  :</strong> <a href="<?php echo HOME_URL ?>employerdetails.php?id=<?php echo $row['id']; ?>">  <?php echo $row ['fname']; ?>&nbsp;<?php echo $row ['lname']; ?>
												</a><br>
												<strong>City  :</strong>  <?php echo $row ['ecity']; ?><br>
												<strong>Email ID  :</strong>  <?php echo $row ['email']; ?><br>
												<strong>Mobile Number  :</strong> <span class="label label-success">  <?php echo $row ['mobile']; ?></span>                                  
											</li>								
										</ul>
										<?php								
										}?>	
									</div>
									<a href="<?php echo HOME_URL ?>employer.php"><p style="float:right">Show More >>> </p></a>
								</div>
							</div><!--/span-->
						</div>
						<!-- End of Student and Employer code start -->
						
						
						<!-- Post Internship and Contact Inquiry code start -->
						<div class="row-fluid sortable ui-sortable">
							<div class="box span6">
								<div data-original-title="" class="box-header well">
									<h2><i class="icon icon-orange icon-star-on"></i> Post Internship</h2>
									<div class="box-icon">
										<a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a>
										<a class="btn btn-close btn-round" href="#"><i class="icon-remove"></i></a>
									</div>
								</div>
								<!-- php code for student dispaly -->
								<?php
									include('include/config.php');
									include('include/opendb.php');
									$sql="SELECT * FROM postinternship order by id DESC LIMIT 3";
									$result = mysql_query ($sql); //run the query
								?>
								<!-- end of code -->
								<div class="box-content">
									<div class="box-content">
									<?php   
										while ($row = mysql_fetch_assoc($result)) { 
									?> 
										<ul class="dashboard-list">
											<li>
											<a href="<?php echo HOME_URL ?>postinternship.php?id=<?php echo $row['id']; ?>">
													<img src="http://www.internshipland.com/employer/profile/<?php echo $row ['companylogo']; ?>" alt="Company Logo" style="border: 1px solid;border-radius:5px; width: 70px;height: 70px;float: left;"></a>
													<strong>Company Name  :</strong><a href="<?php echo HOME_URL ?>postinternship.php?id=<?php echo $row['id']; ?>">   <?php echo $row ['compname']; ?> </a><br>
													<strong>Internship Name  :</strong> <?php echo $row ['internship']; ?><br>												
												<strong>City  :</strong>  <?php echo $row ['location']; ?><br>												
												<strong>Start Date  :</strong> <span class="label label-success">  <?php echo $row ['startdate']; ?></span>
												<strong>Application Deadline :</strong> <span class="label label-success">  <?php echo $row ['applicationdedline']; ?></span>
											</li>								
										</ul>
										<?php								
										}?>	
									</div>
									<a href="<?php echo HOME_URL ?>postinternship.php"><p style="float:right">Show More >>> </p></a>
								</div>
							</div><!--/span-->
									
							<div class="box span6">
								<div data-original-title="" class="box-header well">
									<h2><i class="icon icon-blue icon-envelope-closed"></i> Contact Inquiry</h2>
									<div class="box-icon">
										<a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a>
										<a class="btn btn-close btn-round" href="#"><i class="icon-remove"></i></a>
									</div>
								</div>
								<!-- php code for student dispaly -->
								<?php
									include('include/config.php');
									include('include/opendb.php');
									$sql="SELECT * FROM contact order by id DESC LIMIT 3";
									$result = mysql_query ($sql); //run the query
								?>
								<!-- end of code -->
								<div class="box-content">
									<div class="box-content">
									<?php   
										while ($row = mysql_fetch_assoc($result)) { 
									?> 
										<ul class="dashboard-list">
											<li>
												<a href="#">
													<img src="<?php echo HOME_URL ?>images/message.png" alt="Message" style="width: 70px;height: 70px;float: left;"></a>
													<strong>Name  :</strong> <a href="#">  <?php echo $row ['name']; ?></a><br>
												<strong>Email ID  :</strong>  <?php echo $row ['email']; ?><br>
												<strong>Subject  :</strong>  <?php echo $row ['title']; ?><br>
												<strong>Message  :</strong>  <?php echo $row ['content']; ?><br>
												
											</li>								
										</ul>
										<?php								
										}?>	
									</div>
									<a href="<?php echo HOME_URL ?>contact.php"><p style="float:right">Show More >>> </p></a>
								</div>
							</div><!--/span-->
						</div>
						<!-- End of Student and Employer code start -->
						
						
						<!-- Not Registered Yet -->
						
								<!-- php code for student dispaly -->
								<?php
							include('include/config.php');
							include('include/opendb.php');
							$sql="SELECT * FROM student order by whenadded DESC";
							$result = mysql_query ($sql); //run the query
						?>
				
				<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>  Not Registered Members</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
							  	  <th>Full Name</th>
								  <th>Email ID</th>
								  <th>Mobile No.</th>
								  <th>Role</th>	                                  	
								  <th>Regirstration Date</th>	
								  <th>Action</th>	
							  </tr>
						  </thead>   
						  <tbody>
						  <?php   
while ($row = mysql_fetch_assoc($result)) { 
?> 
							<tr>							   
								<td><?php echo $row ['fname']; ?>&nbsp;<?php echo $row ['lname']; ?></td>
								<td class="center"><?php echo $row ['email']; ?></td>
								<td class="center"><?php echo $row ['mobile']; ?></td>
								<td class="center"><?php echo $row ['role']; ?></td>								
								<td class="center"><?php echo $row ['whenadded']; ?></td>		
								<td >
									<a  class="button" href="delete20.php?id=<?php echo $row['id']; ?>">										
										Delete
									</a>
									
									
								</td>						
							</tr>
							<?php								
}?>	
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
						
						
				</div>
					
					
				</div><!--/#content.span10-->
			</div><!--/fluid-row-->
		<!--footer >
			<?php include ("include/footer.php"); ?>
		</footer-->
		
	</div><!--/.fluid-container-->

	<?php include ("include/script.php"); ?>
	
</body>
</html>
