<?php
session_start();
//error_reporting(0);
include 'include/connection.php';
include 'include/include.php';

if(isset($_POST['submit']))
{

	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
    
	$sql="select * from adminlogin where email='$username' AND password='".md5($password)."'";
	$result=$conn->query($sql);
	$obj=$result->fetch_object();
	if($obj != NULL)
	{
		$_SESSION['aid']=$obj->id;
		$_SESSION['login']=true;
		header('location: dashboard.php');

	}
	else
	{
		$msg="Invalid Username or Password";
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login of Jobmate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin panel which admin can access all kind of information of college">

    <?php include 'include/alllink.php'; ?>

</head>

<body>
<div class="ch-container img-responsive"  style="background-image: url('../images/4.jpg');height:640px">
    <div class="row">

    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to Jobmate</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-4 center login-box">
            <div class="alert alert-info">
			<?php
					if(isset($msg))
					{
					?>
						<p class="mt5 mb20" style="color:red;font-size:15px;text-align:center"><?php echo $msg; ?></p>
				<?php
					}
					else
					{
					?>
						Please login with your Username and Password.
					<?php
					}
					?>

            </div>
            <form class="form-horizontal" action="" method="POST">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Please Enter Your Username" required="required">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Please Enter Your Password" required="required">
                    </div>
                    <div class="clearfix"></div>
					<br>
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <input type="submit" name="submit" value="Sign In"  class="btn btn-primary">
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<?php include 'include/footerscript.php'; ?>


</body>
</html>
