<?php 
	include 'include/auth.php';
	include 'include/connection.php';
	if (isset($_GET['st']) && !empty($_GET['st']) && isset($_GET['aid']) && !empty($_GET['aid'])) 
	{
		$st = base64_decode($_GET['st']);
		$aid = base64_decode($_GET['aid']);
		$res = $conn->query("UPDATE `applicant` SET `app_status`='".$st."' WHERE id=$aid");
		header("Location: companydashboard.php");
	}


 ?>