<div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo HOME_URL; ?>dashboard.php" style="padding:8px 8px;"> <img alt="EM Logo" src="<?php echo HOME_URL; ?>../assets/img/logo/logo2.png" class="hidden-xs" style="box-shadow: 0px 0px 6px 2.5px #26ae61;border-radius: 4px;padding: 5px;height: 45px;margin-top: -6px;width: 180px;background: black;"/></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs">&nbsp; Jobmate Admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo HOME_URL; ?>include/logout.php">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->
        </div>
    </div>
