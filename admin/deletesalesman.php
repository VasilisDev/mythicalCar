<?php
	include('session.php');
	
	$id=$_GET['id'];
	

	mysqli_query($conn,"delete from salesman where salesmanid='$id'");
	
	header('location:salesman.php');

?>