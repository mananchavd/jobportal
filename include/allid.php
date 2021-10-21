<?php
include 'connection.php';
session_start();
$id=$_SESSION['userid'];
$result3 ="SELECT * FROM registermember where reid='$id'";
$s=$conn->query($result3);
$res=$s->fetch_object();
$fname =$res->fname;
$lname =$res->lname;
?>
