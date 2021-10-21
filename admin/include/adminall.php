<?php
require_once('include/auth.php');
$id=$_SESSION['aid'];
include 'include/connection.php';
		echo $sql="select * from adminlogin where aid=$id";
		$co=$conn->query($sql);
		$re=$co->fetch_object();
?>