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
		<title>Company Profile</title>
		<?php include 'include/alllink.php'; ?>

	</head>
	<body>
		<?php include 'include/sessionheader.php'; ?>
		<div class="page-header" style="background: url(assets/img/banner1.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-wrapper">
							<h2 class="product-title">Company Profile</h2>
							<ol class="breadcrumb">
								<li><a href="#"><i class="ti-home"></i> Home</a></li>
								<li class="current">Company Profile</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about section">
			<div class="container">
				<div class="row">
					<form class="" action="function.php" method="POST" enctype="multipart/form-data">
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>First Name</label>
								<input type="text"  class="form-control" name="fname" placeholder="Enter Your First Name" disabled value="<?php echo $res->fname; ?>">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="text"  class="form-control" name="lname" placeholder="Enter Your Last Name" disabled value="<?php echo $res->lname; ?>">
							</div>
							<div class="form-group">
								<label>Company Name</label>
								<input type="text"  class="form-control" name="cname" placeholder="Enter Your Company Name" disabled="" value="<?php echo $res->companyname; ?>">
							</div>
							<div class="form-group">
								<label>Email id</label>
								<input type="email"  class="form-control" name="email" placeholder="Enter Your Email ID" disabled value="<?php echo $res->email; ?>">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password"  class="form-control" name="password" placeholder="Enter Your Password" disabled value="<?php echo $res->password; ?>">
							</div>
							<div class="form-group">
								<label>Designation</label>
								<input type="text"  class="form-control" name="designation" placeholder="Enter Your Designation" disabled value="<?php echo $res->designation; ?>">
							</div>
							<div class="form-group">
								<label>City</label>
								<input type="text" class="form-control" name="hometown"  value="<?php echo $res->hometown; ?>" id="hometo" required="required">
							</div>
						</div>

						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>Mobile number</label>
								<input type="number"  class="form-control" name="mobile" placeholder="Enter Your Mobile Number" value="<?php echo $res->mobile; ?>" required="required">
							</div>
							<div class="form-group">
								<label>Website</label>
								<input type="text" class="form-control" name="website" value="<?php echo $res->website; ?>" required="required">
							</div>
							<div class="form-group">
								<label>Company Sector</label>
								<label class="styled-select" >
									<select name="categorie" id="" class="form-control dropdown-product selectpicker" required="required">
										<option value="">All Categories</option>
										<?php
										include 'include/connection.php';
										$sql="select * from categories";
										$w=$conn->query($sql);
										while ($rw=$w->fetch_object()) {
											if($rw->catid==$res->categorie){
										?>
										<option value="<?php echo $rw->catid  ?>" selected><?php echo $rw->catname;  ?></option>
									<?php }else{ ?>
										<option value="<?php echo $rw->catid  ?>"><?php echo $rw->catname;  ?></option>
									<?php }} ?>
									</select>
								</label>
							</div>
							<div class="form-group">
								<label>No. of emplyoyee</label>
									<input type="text"  class="form-control" name="noofemployee" placeholder="Enter Your Company Employee Count Ex.(0 - 10)" required="required" value="<?php echo $res->noofemployee; ?>">
								</label>

							</div>
							<div>
								<label>Company logo</label>
								<?php if ($res->campanylogo!='') {
									?>
								<img src="profilepic/<?php echo $res->campanylogo; ?>" alt="" style="width: 50px;height: 50px;border:1px solid #000;border-radius: 5px;">
								<?php } ?>
								<fieldset class="form-control">
									<input type="file" name="campanylogo" required="required">
									<input type="hidden" name="status" value="100%" required="required">
									<input type="hidden" name="userida" value="<?php echo $res->reid; ?>">
								</fieldset>
							</div>
							<br>
							<div class="form-group">
								<label>Company Profile</label>
								<textarea name="cprofile" rows="5" class="form-control" placeholder="Enter Your Company Profile 2000 words...." required="required"><?php echo $res->cprofile; ?></textarea>

							</div>

						</div>

				</div>
				<div class="row text-center">
					<button class="btn btn-common log-btn" type="submit" name="companyupdate">Update Now</button>
				</div>
				</form>
			</div>
		</div>
		<?php include 'include/footer.php'; ?>
	</body>
</html>
