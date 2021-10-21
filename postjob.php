<?php
error_reporting(0);
include 'include/allid.php';
include 'include/auth.php';
include 'function.php';
if(isset($_GET['eid']))
{
	$jid=$_GET['eid'];
	$sql="select * from jobpost where jobid='$jid'";
	$r=$conn->query($sql);
	while($rr=$r->fetch_object())
	{

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="author" content="Jobboard">
		<title>Post Job</title>
		<?php include 'include/alllink.php'; ?>

	</head>
	<body>
		<?php include 'include/sessionheader.php'; ?>
		<div class="page-header" style="background: url(assets/img/banner1.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-wrapper">
							<h2 class="product-title">Post Job</h2>
							<ol class="breadcrumb">
								<li><a href="#"><i class="ti-home"></i> Home</a></li>
								<li class="current">Post Job</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about section">
			<div class="container">
				<div class="row">
					<form class="" action="function.php" method="POST">
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>Job Title</label>
								<input type="text" value="<?php echo $rr->jobtitle; ?>"  class="form-control" name="jobtitle" placeholder="Enter Your Job Title">
							</div>
							<div class="form-group">
								<label>Job Description</label>
								<textarea name="jobdec" class="form-control" placeholder="Enter your Job Decription....."><?php echo $rr->jobdec; ?></textarea>
								
							</div>
							<div class="form-group">
								<label>Skill Required</label>
								<textarea name="skill" class="form-control" placeholder="Enter required Skill....."> <?php echo $rr->skill; ?></textarea>
							</div>
							<div class="form-group">
								<label>Eligibility</label>
								<textarea name="eligibility" class="form-control" placeholder="Enter required eligibility....."><?php echo $rr->eligibility; ?></textarea>
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
										while ($rw=$w->fetch_object()) 
										{
												if($rr->categorie==$rr->catid)
                           							{
										?>
										<option value="<?php echo $rw->catid  ?>" selected><?php echo $rr->catname;  ?></option>
									<?php }else{ ?>
										<option value="<?php echo $rw->catid  ?>"><?php echo $rr->catname;  ?></option>
									<?php }} ?>
									</select>
								</label>
							</div>
						</div>

						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>Post on</label>
								<input type="text" value="<?php echo $rr->poston;  ?>" class="form-control" id="datepicker" name="poston">
							</div>
							<div class="form-group">
								<label for="tags">Location for a job</label>
								<input id="tags" value="<?php echo $rr->location; ?>" class="form-control" name="location" size="50">
							</div>
							<div class="form-group">
								<label>Start Date</label>
								<input type="date" value="<?php echo $rr->sdate;  ?>"  class="form-control" name="sdate">
							</div>
							<div class="form-group">
								<label>Application Deadline</label>
								<input type="date" value="<?php echo $rr->edate;  ?>"  class="form-control" name="edate">
							</div>
							<div class="form-group">
								<label>No.of Openings</label>
								<input type="number" value="<?php echo $rr->opening;  ?>"  class="form-control" name="opening">
							</div>
							<div class="form-group">
								<label>Salary</label>
								<input type="text" value="<?php echo $rr->salary;  ?>"   class="form-control" name="salary" placeholder="Enter Salary">
							</div>
						</div>
					</div>
					<h2>Additional Information</h2>
					<div class="form-group">
						<label>Are the employee allowed to work from home?</label>
						<fieldset class="form-control">
						<?php
						$val=$rr->home;
						if($val=='yes')
							{
				?>
				<label for="radio-1">Yes</label>
				<input type="radio" name="home" checked="checked" id="radio-1" value="yes">
				<label for="radio-2">No</label>
				<input type="radio" name="home" id="radio-2" value="no">
				<?php
					}
					else
					{
						?>
				<label for="radio-1">Yes</label>
				<input type="radio" name="home" id="radio-1" value="yes">
				<label for="radio-2">No</label>
				<input type="radio" name="home" checked="checked" id="radio-2" value="no">

				<?php
					}
					?>
						</fieldset>
					</div>
					<div class="form-group">
						<label>Are the employee allowed to work on part time basis?</label>
						<fieldset class="form-control">
							<?php
					$val=$rr->parttime;
					if($val=='yes')
					{
				?>
							<label for="radio-1">Yes</label>
							<input type="radio" checked="checked" name="parttime" id="radio-1" value="yes">
							<label for="radio-2">No</label>
							<input type="radio" name="parttime" id="radio-2" value="no">
				<?php
					}
					else
					{
						?>
						<label for="radio-1">Yes</label>
							<input type="radio" name="parttime" id="radio-1" value="yes">
							<label for="radio-2">No</label>
							<input type="radio" checked="checked" name="parttime" id="radio-2" value="no">
				

				<?php
					}
					?>

						</fieldset>
					</div>
					<div class="form-group">
						<label>Will you be providing a certificate?</label>
						<fieldset class="form-control">
							<?php
					$val=$rr->certificate;
					if($val=='yes')
					{
				?>
							<label for="radio-1">Yes</label>
							<input type="radio" name="certificate" checked="checked" id="radio-1" value="yes">
							<label for="radio-2">No</label>
							<input type="radio" name="certificate" id="radio-2" value="no">
				<?php
					}
					else
					{
						?>
						<label for="radio-1">Yes</label>
							<input type="radio" name="certificate" id="radio-1" value="yes">
							<label for="radio-2">No</label>
							<input type="radio" name="certificate"  checked="checked" id="radio-2" value="no">
				

				<?php
					}
					?>

						</fieldset>
					</div>
					<div class="row text-center">
						<input type="hidden" name="jobid" value="<?php echo $rr->jobid; ?>">
						<?php
						if(isset($jid))
						{
						
						}
						else
						{
						<button class="btn btn-common log-btn" type="submit" name="postregister">Submit</button>
						}
						?>
					</div>
					<?php
							}
}						
					?>
				</form>
			</div>
		</div>
	</div>
	<?php include 'include/footer.php'; ?>
	<script>
	$( function() {
	$( "#datepicker" ).datepicker({ minDate: 0, maxDate: "0" });
	} );
	</script>
</body>
</html>
