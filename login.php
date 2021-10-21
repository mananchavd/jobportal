<?php 

    include 'function.php'; 
    if(isset($_SESSION))
        session_destroy();

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>Jobmate || Login</title>

    <?php include 'include/alllink.php'; ?>
</head>

<body>

    <?php include 'include/header.php'; ?>


    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Jobmate || Login</h2>
                        <ol class="breadcrumb">
                            <li><a href="//"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Jobmate || Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about section">
        <div class="container">
           <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-6 cd-user-modal">
                    <div class="my-account-form">
                        <?php if (isset($msg)) {
                            ?>
                        <h3 style="text-align: center;color: red"><?php echo $msg; ?></h3>
                    <?php } ?>
                        <div id="cd-login" class="is-selected">
                            <div class="page-login-form">
                                <form role="form" action="function.php" method="POST" class="login-form">
                                    <input type="hidden" name="pid" value="<?php echo $_REQUEST['id']; ?>">
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <i class="ti-user"></i>
                                            <input type="text" id="sender-email" class="form-control" name="email" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <i class="ti-lock"></i>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <button class="btn btn-common log-btn" type="submit" name="login">Login</button>
                                    <div class="checkbox-item">
                                        <div class="checkbox">
                                            <label for="rememberme" class="rememberme">
                                                <input name="rememberme" id="rememberme" value="forever" type="checkbox"> Remember Me</label>
                                        </div>
                                        <p class="cd-form-bottom-message"><a href="#0">Lost your password?</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="page-login-form" id="cd-reset-password">
                            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>
                            <form class="cd-form">
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="ti-email"></i>
                                        <input type="text" id="sender-email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <p class="fieldset">
                                    <button class="btn btn-common log-btn" type="submit">Reset password</button>
                                </p>
                            </form>
                            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <?php include 'include/footer.php'; ?>
</body>

</html>
