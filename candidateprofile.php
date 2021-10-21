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
		<title>Candidate Profile</title>
		<?php include 'include/alllink.php'; ?>

	</head>
	<body>
		<?php include 'include/sessionheader.php'; ?>
		<div class="page-header" style="background: url(assets/img/banner1.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-wrapper">
							<h2 class="product-title">Candidate Profile</h2>
							<ol class="breadcrumb">
								<li><a href="#"><i class="ti-home"></i> Home</a></li>
								<li class="current">Candidate Profile</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about section">
			<div class="container">
				<div class="row">
					<?php if (isset($_GET['msg'])) {
						?>
						<h2 style="color: red;text-align: center;margin-bottom: 20px;">Please Complete your profile and then apply on jobs....</h2>
						<?php
					}
					 ?>
					
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
								<label>Email id</label>
								<input type="email"  class="form-control" name="email" placeholder="Enter Your Email ID" disabled value="<?php echo $res->email; ?>">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password"  class="form-control" name="password" placeholder="Enter Your Password" disabled value="<?php echo $res->password; ?>">
							</div>
							<div class="form-group">
								<label>Mobile number</label>
								<input type="number"  class="form-control" name="mobile" placeholder="Enter Your Mobile Number"  value="<?php echo $res->mobile; ?>" required="required">
							</div>
							<div>
								<label>Upload pic</label>
								<?php if ($res->profilepic!='') {
									?>
								<img src="profilepic/<?php echo $res->profilepic; ?>" alt="" style="width: 50px;height: 50px;border:1px solid #000;border-radius: 5px;">
								<?php } ?>
								<fieldset class="form-control">
									<input type="file" name="profilepic" required="required">
								</fieldset>
							</div>
							<br>
						</div>

						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>Birthdate</label>
								<input type="text" class="form-control" id="datepicker" value="<?php echo $res->bdate; ?>" name="bdate" required="required">
							</div>
							<div class="form-group">
								<label>Looking for Job</label>
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
								<label for="tags">Location for a job</label>
								<input id="tags" class="form-control" name="joblocation" value="<?php echo $res->joblocation; ?>" size="50" required="required">
							</div>
							<div class="form-group">
								<label>Gender</label>
								<fieldset class="form-control">
									<?php
									$val=$res->gender;
									if($val=="Male"){
									?>
									<label for="radio-1">Male</label>
									<input type="radio" name="gender" value="Male" id="radio-1" checked="checked" required="required">
									<label for="radio-2">Female</label>
									<input type="radio" name="gender" value="Female" id="radio-2" required="required">
								<?php }else if($val=="Female"){ ?>
									<label for="radio-1">Male</label>
									<input type="radio" name="gender" value="Male" id="radio-1"  required="required">
									<label for="radio-2">Female</label>
									<input type="radio" name="gender" value="Female" id="radio-2" checked="checked" required="required">
								<?php }else{ ?>
									<label for="radio-1">Male</label>
									<input type="radio" name="gender" value="Male" id="radio-1"  required="required">
									<label for="radio-2">Female</label>
									<input type="radio" name="gender" value="Female" id="radio-2" required="required">
								<?php } ?>
								</fieldset>
							</div>
							<div class="form-group">
								<label>Hometown</label>
								<input type="text"  class="form-control" name="hometown" value="<?php echo $res->hometown; ?>" id="hometo" placeholder="Hometown" required="required">
								<input type="hidden" name="userida" value="<?php echo $res->reid; ?>">
								<input type="hidden" name="status" value="100%">
							</div>
							<div>

								<label>Upload cv</label>
								<?php if ($res->cv!='') {
									?>
									<a href="<?php echo HOME_URL; ?>cv/<?php echo $res->cv; ?>" class="btn btn-primary btn-sm" style="margin-bottom: 20px;" download>Download Now</a>

								<?php } ?>

								<fieldset class="form-control">
									<input type="file" name="cv" required="required">
								</fieldset>
							</div>
							<br>
						</div>
						<div class="row text-center">
							<button class="btn btn-common log-btn" type="submit" name="candiupdate">Update Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php include 'include/footer.php'; ?>
		<script>
			$( function() {
			$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true
			});
			} );
			$( function() {
				$( "input" ).checkboxradio();
					$( "fieldset" ).controlgroup();
					} );
		</script>
	</body>
</html>
