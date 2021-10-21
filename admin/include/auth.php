<?php
    session_start();

    if(!isset($_SESSION['aid']))
	{
      header('Location: http://localhost/jobmate/admin/');
    }
?>
