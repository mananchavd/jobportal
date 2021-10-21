<?php 

session_start();

	if (isset($_SESSION['role'])) 
	{
		if ($_SESSION['role'] == 'company') 
			header("Location: companydashboard.php");
		else
			header("Location: candidatedashboard.php");
	}
?>