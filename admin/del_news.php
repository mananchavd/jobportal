<?php
	include 'include/connection.php';
	
	$values = $_POST['values'];

	$delete = $connection->query("delete from loan_news where n_id='".$values."'");
	
	if($delete == 1)
	{
		$data = array("status" => "1","msg" => "Congratulation, news has been deleted successfully.");		
	}	
	else
	{
		$data = array("status" => "0","msg" => "Sorry, some server error has been occurred so please try again later...");			
	}


	header('Content-Type:text/json');
	echo json_encode($data);
?>